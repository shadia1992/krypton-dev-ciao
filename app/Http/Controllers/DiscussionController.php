<?php 

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Discussion;
use App\Models\User;
use Request;
use Session;

class DiscussionController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $discussions = Discussion::all();
      return $discussions;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return "Vue qui permet de créer une discussion";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $user = User::find(Session::get('id'));
    $moderated = false;
    $score = 0;

    $fields = $request::only('subject_id', 'user_id','title','score','moderated','content');

        $validator = Discussion::getVali($fields);


          if($validator){

                  $discussion = new Discussion($fields);
                  $discussion->title = "";
                  $discussion->user_id = $user->id;
                  $discussion->moderated = $moderated;
                  $discussion->score = $score;
                  $discussion->save();
                  return $discussion;
      
          }else{
            echo "Pas de respect des contraintes d'ajout, on redirige la vue création";
          }
      
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
    return $discussion;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {





    //if()


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    $isModerator = User::isModerator();
    $user = User::find(Session::get('id'));
    $userId = $user->id;
    $discussion = Discussion::find($id);
    $discussionUserId = $discussion->user_id;
    dd($discussionUserId);

    $moderated = false;



    if($userId == $discussionUserId || $isModerator){

      if (!isset($discussion)) {

          return response('Not found', 404);

       }else{
        
          $fields = $request::only('subject_id', 'user_id','title','score','moderated','content');

          $validator = Discussion::getVali($fields);

          if($isModerator){
            $moderated = true;
          }

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
    
  }
  
}

?>