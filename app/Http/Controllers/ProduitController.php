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
	private  $message = "";
    public function catalogue()
    {
        $produits= Produit::where('visible',1)->get()->all();
        $categories= Categorie::where('visible',1)->get()->all();

        return view('pages.catalogue-index',compact('produits','categories'));
    }
	public function index()
	{
        $produit = new Produit();
        $produits= Produit::where('visible',1)->get()->all();
        return view('pages.catalogue-index',compact('produit','produits'));
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

       // dd($inputs);
        if (!$this-> OneFieldIsEmpty($inputs) && !$this->OneFieldIsEmpty($prix_inputs)){
            if($request->file('image')!=null){
                $imageName =md5(uniqid(rand(), true)).'.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(base_path() . '/public/images/produit/', $imageName);
                $inputs['image']= $imageName;
            }
            $last_update = Carbon::now();
            $inputs['last_update'] = $last_update->toDateString();

            $inputs['id_caisse'] = Session::get('id');
            $inputs['id_produit'] =  Produit::all()->last()->id_produit+1;
            $inputs['visible'] = 1;
            $prod = Produit::create($inputs);
            //pix inputs
            $prix_inputs['id_produit'] =$prod->id_produit;
            $prix_inputs['etat'] =1;
            $prix_inputs['id_caisse'] =Session::get('id');
            if(Prix::all()->last()['attributes']['id_prix']==null){
                $prix_inputs['id_prix'] = 1;
            }else{
                $prix_inputs['id_prix'] = Prix::all()->last()['attributes']['id_prix']+1;
            }

            Prix::create($prix_inputs);
            $categories = Categorie::where('visible',1)->get()->all();
            $produits = Produit::where('visible',1)->get()->all();
            return view('pages.catalogue-index',compact('produits','categories'));
        }
        return Redirect::back()->with('produit_error',$this->message);
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
	public function edit($id_produit,$id_caisse)
	{
	    $produit = Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->get()->first();
	    $prix = Prix::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->get()->first();

	    return view('pages.update-produit',compact('produit','prix'));

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
	public function destroy($id_produit,$id_caisse)
	{
        $pro = Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->get()->first();
        $inputs=$pro['attributes'];
        $inputs['visible'] = 2;
        Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->update($inputs);

        return Redirect::route('catalogue.index');

	}

    private function OneFieldIsEmpty($fields){

        foreach($fields as $field){

            if(strlen($field)==0  ){
                $this->message ="veuillez remplir tous les champs avant de soumettre le formulaire";
                return true;
            }


        }
        return false;
    }

}
