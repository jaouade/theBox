<?php namespace App\Http\Controllers;



use App\Produit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProduitController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	private $message ="";
	public function index()
	{
        $produits = Produit::all();
        return view('pages.produit-index',compact('produits'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $produit = new Produit();
        // dd($category);


        return view('pages.add-produit',compact('produit'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        $inputs = $request->only(['id_produit','id_cat', 'visible', 'id_caisse',
            'designation', 'description',
            'color',
        ]);
        if (!$this-> OneFieldIsEmpty($inputs)){
            $imageName =$request->id_produit.'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/images/produit/', $imageName);
            $last_update = Carbon::now();
            $inputs['last_update'] = $last_update->toDateString();
            $inputs['image']= $imageName;

            Produit::create($inputs);
            return Redirect::route('produit.index');
        }
        return Redirect::back()->withInput()->withErrors([$this->message]);



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
        $produit= Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->get()->first();
        if($produit!=null){
            return view('pages.add-produit',compact('produit'));
        }
        return response()->view('pages.add-produit',compact('produit'))->withErrors(["nous avons pas pu trouver la page que vous cherchez !! :( "]);

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id_produit,Request $request)

    {
        $inputs = $request->only(['id_produit','id_cat', 'visible', 'id_caisse',
            'designation', 'description',
            'color',
        ]);
        if(!$this->OneFieldIsEmpty($inputs)){
            $last_update =Carbon::now();
            if ($request->file('image')){
                $imageName =$request->id_produit.'.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(base_path() . '/public/produit/images/', $imageName);
                DB::statement("update Produit set designation ='".$request->designation."', description ='".$request->description."', image ='".$imageName."', visible ='".$request->visible."',color ='".$request->color."', last_update = '".$last_update->toDateString()."', id_caisse ='".$request->id_caisse."'  where  id_produit='".$id_produit."'");
                $produit= Produit::where('id_produit',$id_produit)->get()->first();
                return view('pages.add-produit',compact('produit'));
            }
            DB::statement("update Produit set designation ='".$request->designation."', description='".$request->description."', visible ='".$request->visible."',color ='".$request->color."', last_update = '".$last_update->toDateString()."', id_caisse ='".$request->id_caisse."'  where  id_produit='".$id_produit."'");
            $produit= Produit::where('id_produit',$id_produit)->get()->first();
            return view('pages.add-produit',compact('produit'));
        }
        $produit= Produit::where('id_produit',$id_produit)->get()->first();
        return view('pages.add-produit',compact('produit'));



    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_produit,$id_caisse)
	{
        Produit::where('id_produit',$id_produit)->where('id_caisse',$id_caisse)->delete();
        return Redirect::route('produit.index');
	}


    private function OneFieldIsEmpty($fields){


        if($fields['id_caisse']==null ||  $fields['id_cat']==null ){
            $this->message ="caisse or category input cannot be empty";
            return true;
        }
        foreach($fields as $field=>$value){

            if(strlen($value)==0 ){
                $this->message ='the '.$field.' cannot be empty';
                return true;
            }


        }
        return false;
    }
}
