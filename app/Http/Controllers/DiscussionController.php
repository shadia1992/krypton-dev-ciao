<?php 

namespace App\Http\Controllers;

//use Illuminate\Routing\Controller as BaseController;
use App\Models\Discussion;
use App\Models\User;
use App\Models\Subject;
use Session;
use Illuminate\Http\Request;
use Validator;
use DB;
use Hash;
use Redirect;
use Input;

class DiscussionController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      return view('discussion/index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
     return view('discussion/create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $user = User::find(Session::get('id'));
    $request->merge(['user_id' => $user->id, 'moderated' => false, 'score'=>0]);



     $validator = Discussion::getValidation($request);


        if ($validator->fails()){
            $request->flash();

            return view('discussion/create')->withErrors($validator);
        }
        
        $inputs = $validator->getData();

        $discussion = new Discussion($inputs);

        $discussion->save();
        
        //return $discussion;
        return response('OK', 200);
      
        
  }
  

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $discussion = Discussion::find($id);
    if($discussion){
            return view('discussion/show',$discussion);
        }else{
            return response('Bad Request', 400);
        }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
    $discussion = Discussion::find($id);
    if($discussion){
            return view('discussion/edit',$discussion);
        }else{
            return response('Bad Request', 400);
        }

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    // Il faut que les infos soit présentes dans les champs
    $isModerator = User::is('moderator');
    $isGuest = User::is('guest');
    $user = User::find(Session::get('id'));
    $discussion = Discussion::find($id);
    $discussionUserId = $discussion->user_id;
    $moderated = $discussion->moderated;
    //$score = $discussion->score;

    if($moderated == true || $isGuest){

      return "UNAUTHORIZED";
    }


    $request->merge(['user_id' => $user->id, 'moderated' => $moderated, 'score'=>$score]);
    //dd($discussionUserId);

    if($userId == $discussionUserId || $isModerator){

      if (!isset($discussion)) {

          return response('Not found', 404);

       }else{

          $rules = [
          'subject_id' => 'exists:subjects,id|required',
          'title' => 'min:3|max:128|required|string|unique:discussions,title,'.$discussion->id,
          'content' => 'required|string',
          'user_id' => 'exists:users,id|required',
          'moderated' =>  'required',
          'score' => 'required|numeric'
          ];

        

          $inputs = $request->only('subject_id','title','content');
          
           $validator = Validator::make($inputs, $rules);
            if ($validator->fails()){
                $request->flash();
                return view('discussion/edit',$discussion,['subject_id' => $discussion->subject()->first()['id']])->withErrors($validator);
            }

          if($isModerator){
            $moderated = true;
          }

          $discussion->subject_id = $inputs['subject_id'];
          $discussion->user_id = $userId;
          $discussion->title = $inputs['title'];
          $discussion->score = $score;
          $discussion->moderated = $moderated;
          $discussion->content = $inputs['content'];
          
          $discussion->save();
          return $discussion;
          //return response('OK', 200);
        }else{
          echo "vous ne pouvez plus modifier cette vue car déjà modérée";
        }
    }
  }else{
    echo "tu peux pas car t'es pas le bon user n'y moderateur";
  }
}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $isModerator = User::is('moderator');
    $isAdmin = User::is('admin');
    $discussion = Discussion::find($id);
    

    if(!$discussion){
      return response('Not found', 404);
    }
    if($isAdmin || $isModerator){
      $discussion->delete();
      return response('OK', 200);
    }else{
      echo "pas les droits";
    }
  
}
}

?>