<?php 

namespace App\Http\Controllers;

use App\TypeService;
use Illuminate\Http\Request;
use App\Type;
class TypeController extends Controller 
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function list()
  {
    $type = TypeService::getList();
    return response()->json(array(
        'types' => $type
    ),200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function get($id)
  {
    $type = TypeService::get($id);
    return response()->json(array(
        'types' => $type
    ),200);
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
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