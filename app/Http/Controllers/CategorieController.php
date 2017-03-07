<?php namespace App\Http\Controllers;

use App\Categorie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
     private $message ="";
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
	    if (!$this-> OneFieldIsEmpty($inputs)){
            $imageName =$request->id_categorie.'.' . $request->file('image_cat')->getClientOriginalExtension();
            $request->file('image_cat')->move(base_path() . '/public/images/', $imageName);
            $last_update = \Carbon\Carbon::now();
            $inputs['last_update'] = $last_update->toDateString();
            $inputs['image_cat']= $imageName;

            Categorie::create($inputs);
            $categories = Categorie::all();
            return Redirect::route('cat.index')->with('categories',$categories);
        }
        $category= new Categorie();
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_categorie,$id)
	{
       $category= Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id)->get()->first();
        if($category!=null){
            return view('pages.add-category',compact('category'));
        }
        return response()->view('pages.add-category',compact('category'))->withErrors(["nous avons pas pu trouver la page que vous cherchez !! :( "]);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_categorie,Request $request)

	{
	    $fields=$request->only(['designation_cat','description_cat','color_cat','id_caisse']);
	    if(!$this->OneFieldIsEmpty($fields)){
            $last_update =Carbon::now();
            if ($request->file('image_cat')){
                $imageName =$request->id_categorie.'.' . $request->file('image_cat')->getClientOriginalExtension();
                $request->file('image_cat')->move(base_path() . '/public/images/', $imageName);
                DB::statement("update Categorie set designation_cat ='".$request->designation_cat."', description_cat ='".$request->description_cat."', image_cat ='".$imageName."', visible ='".$request->visible."',color_cat ='".$request->color_cat."', last_update = '".$last_update->toDateString()."', id_caisse ='".$request->id_caisse."'  where  id_categorie='".$id_categorie."'");

            }
            DB::statement("update Categorie set designation_cat ='".$request->designation_cat."', description_cat ='".$request->description_cat."', visible ='".$request->visible."',color_cat ='".$request->color_cat."', last_update = '".$last_update->toDateString()."', id_caisse ='".$request->id_caisse."'  where  id_categorie='".$id_categorie."'");
            $category= Categorie::where('id_categorie',$id_categorie)->get()->first();
            return view('pages.add-category',compact('category'));
        }
        return Redirect::back()->withErrors([$this->message]);



	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_categorie,$id)
	{
		Categorie::where('id_categorie',$id_categorie)->where('id_caisse',$id)->delete();

		return Redirect::route('cat.index');
	}

	private function OneFieldIsEmpty($fields){
	    //dd($fields['id_caisse']);
        if($fields['id_caisse']==null){
            $this->message ="caisse input cannot be empty";
            return true;
        }
	    foreach($fields as $field){

	        if(strlen($field)==0  ){
	            $this->message ="all fields  cannot be empty";
	            return true;
            }


        }
        return false;
}

}
