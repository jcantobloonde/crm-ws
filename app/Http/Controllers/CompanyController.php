<?php 

namespace App\Http\Controllers;

use App\CompanyService;
use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function list()
  {
    $company = CompanyService::getList();
    return response()->json(array(
      'companies' => $company
    ),200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $company = new Company();
    $company->name=$request->get('name');
    $company->save();

    return response()->json(array(
      'companies' => $company
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
    $company = CompanyService::get($id);
    return response()->json(array(
        'companies' => $company
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
    $company = CompanyService::update($id, $request);
    $company->name=$request->get('name');
    $company->save();

    return response()->json(array(
        'companies' => $company
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
    $company = Company::find($id);
    $company->delete();

    return response()->json(array(
        'companies' => $company
    ),200);
  }
  
}

?>