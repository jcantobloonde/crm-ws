<?php 

namespace App\Http\Controllers;

use App\ActionService;
use Illuminate\Http\Request;
use App\Action;
use Illuminate\Support\Facades\Input;

class ActionController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function list()
  {
    $action = ActionService::getList(Input::all());
    return response()->json(array(
        'actions' => $action
    ),200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $action = new Action();
    $action->name=$request->get('name');
    $action->description=$request->get('description');
    $action->result=$request->get('result');
    $action->issue=$request->get('issue');
    $action->observations=$request->get('observations');
    $action->type_id=$request->get('type_id');
    $action->thread_id=$request->get('thread_id');
    $action->save();

    return response()->json(array(
      'actions' => $action
    ),200);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function get($id)
  {
    $action = ActionService::get($id);
    return response()->json(array(
        'actions' => $action
    ),200);
  }

  public function listIdThread($id)
  {
    $action = Action::all()->where('thread_id', $id);
    return response()->json(array(
        'actions' => $action
    ),200);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id = null, Request $request)
  {
    $action = ActionService::update($id, $request);

    return response()->json(array(
        'actions' => $action
    ),200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $action = Action::find($id);
    $action->delete();

    return response()->json(array(
        'actions' => $action
    ),200);
  }
  
}

?>