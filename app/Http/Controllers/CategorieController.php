<?php namespace App\Http\Controllers;

use App\Categorie;
use App\Produit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategorieController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
     private $message ="";
	public function index()
	{
        $categories = Categorie::where('visible',1)->where('id_caisse',Session::get('id'))->get()->all();
        return view('pages.cat-index',compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $category = new Categorie();
		return view('pages.add-category',compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        $inputs = $request->only(['designation_cat', 'description_cat', 'color_cat']);
        $id=Categorie::max("id_categorie");
        if($id==null) $id=0;
        if($request->file('image_cat')!=null){
            $imageName = Hash::make(uniqid(rand(), true)).'.' . $request->file('image_cat')->getClientOriginalExtension();
            $inputs['image_cat']= $imageName;
            $request->file('image_cat')->move(base_path() . '/public/images/categorie/', $imageName);

        }
        $last_update = Carbon::now();
        $inputs['last_update'] = $last_update->toDateString();
        $inputs['id_categorie'] = ++$id;
        $inputs['id_caisse'] = Session::get('id');
        $inputs['visible'] = 1;
        Categorie::create($inputs);
        return Redirect::route('cat.index');







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
	public function edit($id_categorie)

	{
	    $id_caisse  =Session::get('id');
       $category= Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id_caisse)->get()->first();
        if($category!=null){
            return view('pages.update-category',compact('category'));
        }
        return response()->view('pages.update-category',compact('category'))->withErrors(["nous avons pas pu trouver la page que vous cherchez !! :( "]);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_categorie,Request $request)

	{
	    $fields=$request->only(['designation_cat','description_cat','color_cat']);

        $last_update =Carbon::now();
        $id_caisse = Session::get('id');
        $fields ['last_update'] = $last_update;
        if ($request->file('image_cat')){

            $imageName =Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id_caisse)->image_cat.'.' . $request->file('image_cat')->getClientOriginalExtension();
            $request->file('image_cat')->move(base_path() . '/public/images/categorie/', $imageName);
            $fields['image_cat'] = $imageName;
            Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id_caisse)->update($fields);
            return Redirect::route('cat.index')->with('success','les modificetions ont ete enrigistrés');
        }
        Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id_caisse)->update($fields);
        return Redirect::route('cat.index')->with('success','les modificetions ont ete enrigistrés');



	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_categorie)
	{
	    $id_caisse = Session::get('id');
		$cat = Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id_caisse)->get()->first();
        $inputs=$cat['attributes'];
        $inputs['visible'] = 2;
        Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id_caisse)->update($inputs);

        return Redirect::route('cat.index')->with(['success'=>'la categorie a bien été supprimée']);
;
	}



}
