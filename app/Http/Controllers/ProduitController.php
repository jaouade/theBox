<?php namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prix;
use App\Produit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProduitController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
        $produit = new Produit();
        $produits= Produit::where('visible',1)->where('id_caisse',Session::get('id'))->get()->all();
        return view('pages.produit-index',compact('produit','produits'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{


        $inputs = $request->only(['designation', 'description', 'color','id_cat']);
        $prix_inputs = $request->only(['tva','label','prix','code_bar']);
        $incr = count($prix_inputs['tva']);

       // dd($inputs);
        $id_produit=Produit::max("id_produit");
        if($id_produit==null) $id_produit=0;
        $id_prix=Prix::max("id_prix");
        if($id_prix==null) $id_prix=0;

        if($request->file('image')!=null){
                $imageName =md5(uniqid(rand(), true)).'.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(base_path() . '/public/images/produit/', $imageName);
                $inputs['image']= $imageName;
            }
            $last_update = Carbon::now();
            $inputs['last_update'] = $last_update->toDateString();

            $inputs['id_caisse'] = Session::get('id');
            $inputs['id_produit'] =  ++$id_produit;
            $inputs['visible'] = 1;
            $prod = Produit::create($inputs);
            //pix inputs
            for($i=0;$i<$incr;$i++){
                $prix['id_produit'] =$prod->id_produit;
                $prix['etat'] =1;
                $prix['last_update'] = $last_update->toDateString();
                $prix['id_caisse'] =Session::get('id');
                $prix['id_prix'] = ++$id_prix;
                $prix['tva']=$prix_inputs['tva'][$i];
                $prix['prix']=$prix_inputs['prix'][$i];
                $prix['label']=$prix_inputs['label'][$i];
                $prix['code_bar']=$prix_inputs['code_bar'][$i];
                Prix::create($prix);
            }
            return Redirect::route('produit.index');
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
	public function edit($id_produit)
	{
	    $id_caisse = Session::get('id');
	    $produit = Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->get()->first();
	    if($produit==null){
	        Redirect::route('produit.index')->with(['error'=>'nous n\'avons pas pu faire l\'operation ']);
        }else {

            $prices = Prix::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->get()->all();

            return view('pages.update-produit',compact('produit','prices'));
        }

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_produit,Request $request)
	{

	    $id_caisse = Session::get('id');
	    $last_update = Carbon::now();
	    $inputs = $request->only(['designation', 'description', 'color','id_cat']);
        $prix_inputs = $request->only(['tva','label','prix','code_bar','id_prix']);
        $incr = count($prix_inputs['tva']);
        if($request->file('image')!=null){
            $imageName =md5(uniqid(rand(), true)).'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/images/produit/', $imageName);
            $inputs['image']= $imageName;
        }
        $inputs['last_update'] = $last_update->toDateString();
        $inputs['visible'] = 1;
        Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->update($inputs);

        for($i=0;$i<$incr;$i++){
            $prix['last_update'] = $last_update->toDateString();
            $prix['tva']=$prix_inputs['tva'][$i];
            $prix['prix']=$prix_inputs['prix'][$i];
            $prix['label']=$prix_inputs['label'][$i];
            $prix['code_bar']=$prix_inputs['code_bar'][$i];
            Prix::where('id_prix',$prix_inputs['id_prix'][$i])->where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->update($prix);
        }

        return Redirect::route('produit.index')->with(['success'=>'les modifications ont été enregistrés avec succé']);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_produit)

	{
	    $id_caisse = Session::get('id');
        $pro = Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->get()->first();
        $inputs=$pro['attributes'];
        $inputs['visible'] = 2;
        Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->update($inputs);

        return Redirect::route('produit.index')->with(['success'=>'les produit a bien été supprimé ']);

	}



}
