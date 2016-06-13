<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\Subject;
use Illuminate\Http\Request;
use Validator;
use DB;
use Hash;
use Redirect;
use Input;

class ThemeController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(){

    return view('theme/index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('theme/create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {      
      $validator = Theme::getValidation($request);

      if ($validator->fails()){
          $request->flash();
          return view('theme/create')->withErrors($validator);
      }

      $inputs = $validator->getData();
      $theme = new Theme($inputs);
      $theme->save();
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
    $theme = Theme::find($id);
    if($theme){
        return view('theme/show',$theme,['subjects'=> $theme->subjects()->get()]);
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
    $theme = Theme::find($id);

    if($theme){
        return view('theme/edit',$theme);
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
    $theme = Theme::find($id);
    if (!$theme){
        return response('Bad Request', 400);
     }else{
      $rules = [
        'name' => 'min:2|max:40|required|unique:themes,name,'.$theme->id,
        'content' => 'required',
    ];
    $inputs = $request->only('name','content');
    $validator = Validator::make($inputs, $rules);
    if ($validator->fails()){
      $request->flash();
      return view('theme/edit',$theme)->withErrors($validator);
    }
    $inputs = $validator->getData();
    $theme->name = $inputs['name'];
    $theme->content = $inputs['content'];
    $theme->save();
    return response('OK', 200);
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
    $theme = Theme::find($id);
        if (!isset($theme)) {
            return response('Not found', 404);
        }else{
            $theme->delete();
    		return response('OK', 200);
        }
  }
}
?>