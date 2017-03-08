<?php namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
        $clients = Client::where('etat',1)->get()->all();
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
        if (!$this-> OneFieldIsEmpty($inputs)){
            $client = Client::all()->last();

            $last_update = Carbon::now();
            $inputs['last_update'] = $last_update->toDateString();
            $inputs['date'] = $last_update->toDateString();
            $inputs['etat'] =1;
            $inputs['id_client'] = $client->id_client +1;
            Client::create($inputs);
            $clients = Client::all();
            return Redirect::route('client.index')->with('clients',$clients);
        }

        return Redirect::back()->withErrors([$this->message]);





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
	public function edit($id_client,$id_caisse)
	{
        $client= Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->get()->first();
        if($client!=null){
            return view('pages.add-client',compact('client'));
        }
        return response()->view('pages.add-client',compact('client'))->withErrors(["nous avons pas pu trouver la page que vous cherchez !! :( "]);


    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id_client,$id_caisse)
	{
	    $inputs = $request->only(['nom_client','email_client','tel_client']);
	   //dd($inputs);
        if (!$this-> OneFieldIsEmpty($inputs)){

            $last_update = Carbon::now();
            $inputs['last_update'] = $last_update->toDateString();
            Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->update($inputs);
            $clients = Client::all()->where('etat',1);
            return Redirect::route('client.index')->with('clients',$clients);
        }

        return Redirect::back()->withErrors([$this->message]);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_client,$id_caisse)
	{
        $client= Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->get()->first();
        $inputs=$client['attributes'];
        $inputs['etat'] = 0;
        Client::where('id_client',$id_client)->where('id_caisse',$id_caisse)->update($inputs);

        $clients = Client::all()->where('etat',1);
        return Redirect::route('client.index');


    }

    private function OneFieldIsEmpty($fields){

        foreach($fields as $field){

            if(strlen($field)==0  ){
                $this->message ="all fields  cannot be empty";
                return true;
            }


        }
        return false;
    }

}
