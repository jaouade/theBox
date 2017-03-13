<?php namespace App\Http\Middleware;

use App\AccountCaisse;
use App\Http\Requests\Request;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Connection {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

	   if(!Session::has('userToken') && $request->path() != 'user/connecting' && $request->path()!='user/login'){

	       return Redirect::route('user.login')->with(['noUserIn'=>'vous n\'etes pas connectés veuillez se connecter pour accéder à la plateforme ']);

	   }elseif(Session::has('userToken') && $request->path()=='user/login' ){
	       return Redirect::to(Session::all()['_previous']['url']);
       }


		return $next($request);
	}

}
