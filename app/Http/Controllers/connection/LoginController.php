<?php namespace App\Http\Controllers\connection;

use App\AccountCaisse;
use App\Caisse;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        return view('pages.account.login');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function login(Request $request)
	{
	    $inputs = $request->all();
	    //dd(sha1($inputs['mdp']));
       // dd(Session::all());
	    $account = $this->getUserByLogin($inputs['login']);
            if($account==null){
                return Redirect::back()->with(['emailError'=>'ce compte n\'existe pas veuillez réssayer ou créer un nouveau compte']);
            }else{
                if(sha1($inputs['mdp'])==$account->mdp){
                    Session::put('userToken',md5($account->id_account_caisse));
                    Session::put('client',$account);
                    return redirect('caisses');
                }else{
                    return Redirect::back()->with(['passError'=>'votre mot de passe n\'est pas correcte veuillez réssayer!!']);


                }
            }


	}

	/**
	 * logout.
     *
	 * @return Response
	 */
	public function logout()
	{
        Session::pull('userToken');

        return redirect(route('user.login'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	private function getUserByLogin($login){
	    $accountCaisse = AccountCaisse::where('login',$login)->get()->first();
	    //dd($accountCaisse);
        return $accountCaisse;
    }

}
