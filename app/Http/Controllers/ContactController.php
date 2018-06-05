<?php 

namespace App\Http\Controllers;

use App\ContactService;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function list()
  {
    $contact = ContactService::getList(Input::all());
    return response()->json(array(
        'contacts' => $contact
    ),200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $contact = new Contact();
    $contact->name=$request->get('name');
    $contact->surname=$request->get('surname');
    $contact->email=$request->get('email');
    $contact->role=$request->get('role');
    $contact->main_contact=$request->get('main_contact');
    $contact->company_id=$request->get('company_id');
    $contact->save();

    return response()->json(array(
        'contacts' => $contact
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
    $contact = ContactService::get($id);
    return response()->json(array(
        'contacts' => $contact
    ),200);
  }

  public function listIdCompany($id)
  {
    $contact = Contact::all()->where('company_id', $id);
    return response()->json(array(
        'contacts' => $contact
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
    $contact = ContactService::update($id, $request);
    return response()->json(array(
        'contacts' => $contact
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
    $contact = Contact::find($id);
    $contact->delete();

    return response()->json(array(
        'contacts' => $contact
    ),200);
  }
  
}

?>