<?php namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	private $message = "";
	public function index()
	{
        $client = new Client();
        $clients = Client::where('etat',1)->where('id_caisse',Session::get('id'))->get()->all();
        return view('pages.client-index',compact('client','clients'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $client = new Client();
        return view('pages.add-client',compact('client'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $id=Client::max("id_client");
        if($id==null) $id=0;
        $last_update = Carbon::now();
        $inputs['last_update'] = $last_update->toDateString();
        $inputs['date'] = $last_update->toDateString();
        $inputs['etat'] =1;
        $inputs['id_client'] = ++$id;
        $inputs['id_caisse'] = Session::get('id');
        Client::create($inputs);
        return Redirect::route('client.index')->with(['success'=>'le client a été bien ajouté']);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_client)

	{
	    $id_caisse = Session::get('id');
        $client= Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->get()->first();
        if($client!=null){
            return view('pages.update-client',compact('client'));
        }
        return Redirect::route('client.index')->with(['error'=>'nous n\'avons pas pu completer l\'operation veuillez reéssayer plus tard ']);


    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id_client)
	{
	    $inputs = $request->only(['nom_client','email_client','tel_client']);
        $id_caisse = Session::get('id');
            $last_update = Carbon::now();
            $inputs['last_update'] = $last_update->toDateString();
            Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->update($inputs);

            return Redirect::route('client.index');


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_client)
	{


        $id_caisse = Session::get('id');
        $client= Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->get()->first();
        $inputs=$client['attributes'];
        $inputs['etat'] = 0;
        Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->update($inputs);
        return Redirect::route('client.index')->with(['success'=>'le client a bien été supprimé']);


    }



}
