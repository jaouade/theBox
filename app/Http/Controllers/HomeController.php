<?php namespace App\Http\Controllers;

use App\Account;
use App\AccountCaisse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{


        $caisses=Account::where('id_account_caisse',Session::get('client')->id_account_caisse)->get();
		return view('pages.caisses',compact('caisses'));
	}


	public function switchCaisse($id){
        Session::put('id',$id);
        return redirect('sales');
    }

}
