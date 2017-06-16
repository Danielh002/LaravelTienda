<?php


require "App\Models\Product.php";
//use Illuminate\Http\Request;


class StoreController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();
	    //return "hola mundo";
		//return Redirect::to('views/store/index.blade.php');
		return View::make('store.index', compact('products'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('store.index', compact('products'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	}

/*
	public function insert( Request $req)
	{	

		$titulo = $req->input('Titulo', 'null');
		$price = $req->input('Price', 'null');
		$categoria = $req->input('select', 'null');
		$descripcion = $req->input('descripcion', 'null');
		$image = $req->input('image', 'null');
		$data = array('titulo'=>$firstName, 'price'=>$price, 'categoria'=>$categoria, 'descripcion'=>$descripcion);
		dd($data);
		DB::table('Products')->insert(array('data'=>$fileName));
		//DB::table('Products')->insert($data);

		echo "Exitoso";
		return Redirect::back();
	}
*/

	public function insert()
	{	
		$product = Product::create(array(
			'titulo'=>Input::get('Titulo'),
			'price'=>Input::get('Price'),
			'categoria'=>Input::get('select'),
			'descripcion'=>Input::get('descripcion'),
			'image'=>Input::get('image')
			));
		$product->save();
		echo "Exitoso";

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


}
