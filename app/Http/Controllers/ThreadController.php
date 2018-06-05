<?php 

namespace App\Http\Controllers;

use App\ThreadService;
use Illuminate\Http\Request;
use App\Thread;
use Illuminate\Support\Facades\Input;

class ThreadController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function list()
  {
    $thread = ThreadService::getList(Input::all());
    return response()->json(array(
        'threads' => $thread
    ),200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $thread = new Thread();
    $thread->name=$request->get('name');
    $thread->description=$request->get('description');
    $thread->status=$request->get('status');
    $thread->interest=$request->get('interest');
    $thread->source=$request->get('source');
    $thread->contact_id=$request->get('contact_id');
    $thread->save();

    return response()->json(array(
      'threads' => $thread
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
    $thread = ThreadService::get($id);
    return response()->json(array(
        'threads' => $thread
    ),200);
  }

  public function listIdContact($id)
  {
    $thread = Thread::all()->where('contact_id', $id);
    return response()->json(array(
        'threads' => $thread
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
    $thread = ThreadService::update($id, $request);
    return response()->json(array(
        'threads' => $thread
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
    $thread = Thread::find($id);
    $thread->delete();
    return response()->json(array(
        'threads' => $thread
    ),200);
  }
  
}

?>