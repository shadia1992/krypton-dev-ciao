<?php 

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class SubjectController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('subject/index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    if(User::is('admin')){
      return view('subject/create');
    }else{
      echo "tu ne peux pas créer de sujets";
    }
            
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    if(User::is('admin')){
      $validator = Subject::getValidation($request);
        if ($validator->fails()){
            $request->flash();
            return view('subject/create')->withErrors($validator);
        }
        $inputs = $validator->getData();
        
        $subject = new Subject($inputs);
        $theme = Theme::find($request->only('theme_id')['theme_id']);
        $theme->subjects()->save($subject);
        $subject->save();
        return response('OK', 200);
    }else{
      echo "tu ne peux pas créer de sujets";
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
    $subject = Subject::find($id);
    if($subject){
        return view('subject/show',$subject,['discussions'=> $subject->discussions()->get()]);
        // il faudrait retourner les questions aussi.
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
    if(User::is('admin')){
      $subject = Subject::find($id);
        if($subject){
            return view('subject/edit',$subject,['theme_id' => $subject->theme()->first()['id']]);
            // PA doit m'expliquer ces liens de retour
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
  public function update($id)
  {
    if(User::is('admin')){
      $subject = Subject::find($id);

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