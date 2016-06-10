<?php 

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Question;
use Request;

class QuestionController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Question
   */
  public function index()
  {
      $questions = Question::all();
      return $questions;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Question
   */
  public function create()
  {
    return view('question/create', "caca");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Question
   */
  public function store(Request $request)
  {
    $fields = $request::only('title', 'content','subject_id','user_id');

    $validator = Question::getVali($fields);
    if(!$validator) {
      return response(json_encode(['message' => 'validation failed']), 400, array('Content-Type' => 'application/json'));
    }else{
      $question = new Question($fields);
      $question->moderated = false;
      $question->answered = false;
      $question->comment = "";
      $question->save();
      return response()->json(
          $question->toArray());
    }
      
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Question
   */
  public function show($id)
  {
    $question = Question::find($id);

    if (!isset($question)) {
      return response('Not found', 404);
    } else {
      return $question;
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Question
   */
  public function edit($id)
  {
    $question = Question::find($id);

    if(!isset($question)){
      return responses('Not found',404);
    }else{
      return view('question/edit',$question);
    }

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Question
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Question
   */
  public function destroy($id)
  {
    
  }
  
}

?>