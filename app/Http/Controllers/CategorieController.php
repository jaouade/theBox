<?php namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Categorie::all();
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
	   // dd($category);


		return view('pages.add-category',compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $inputs = $request->only(['id_categorie', 'visible', 'id_caisse',
            'designation_cat', 'description_cat',
		'color_cat',
		]);
        $imageName =$request->id_categorie.'.' . $request->file('image_cat')->getClientOriginalExtension();
        $request->file('image_cat')->move(base_path() . '/public/images/', $imageName);
        $last_update = \Carbon\Carbon::now();
        $inputs['last_update'] = $last_update->toDateString();
        $inputs['image_cat']= $imageName;

        Categorie::create($inputs);
        $categories = Categorie::all();
        return Redirect::route('cat.index')->with('categories',$categories);
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
       $category= Categorie::where('id_categorie',$id_categorie)->get()->first();

        return view('pages.add-category',compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_categorie,Request $request)

	{
        $last_update = \Carbon\Carbon::now();
        if ($request->file('image_cat')){
           $imageName =$request->id_categorie.'.' . $request->file('image_cat')->getClientOriginalExtension();
           $request->file('image_cat')->move(base_path() . '/public/images/', $imageName);
           DB::statement("update Categorie set designation_cat ='".$request->designation_cat."', description_cat ='".$request->description_cat."', image_cat ='".$imageName."', visible ='".$request->visible."',color_cat ='".$request->color_cat."', last_update = '".$last_update->toDateString()."', id_caisse ='".$request->id_caisse."'  where  id_categorie='".$id_categorie."'");

       }
        DB::statement("update Categorie set designation_cat ='".$request->designation_cat."', description_cat ='".$request->description_cat."', visible ='".$request->visible."',color_cat ='".$request->color_cat."', last_update = '".$last_update->toDateString()."', id_caisse ='".$request->id_caisse."'  where  id_categorie='".$id_categorie."'");
        $category= Categorie::where('id_categorie',$id_categorie)->get()->first();



        return view('pages.add-category',compact('category'));

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_categorie)
	{
		Categorie::where('id_categorie',$id_categorie)->delete();
		$categories = Categorie::all();
		return Redirect::route('cat.index')->with('categories',$categories);
        //return redirect('cat.index',compact('categories'));
	}

}
