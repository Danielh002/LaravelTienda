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
			'titulo'=>(string)Input::get('Titulo'),
			'price'=>Input::get('Price'),
			'categoria'=>(string)Input::get('select'),
			'descripcion'=>(string)Input::get('Descripcion'),
			'image'=>(string)Input::get('image')
			));
		$product->save();
		echo "Fue exito la insercion";
		//return View::make('store.index');
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
	public function edit($slug)
	{
		$product = Product::where('slug',$slug)->first();
		return View::make('store.modificarProducto', compact('product'));
//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		$product = Product::where('slug',$slug)->first();

		$tituloRecibido = Input::get('Titulo');
		$precioRecibido = Input::get('Price');
		$categoriaRecibida = Input::get('select');
		$descripcionRecibida = Input::get('Descripcion');
		$url_imagenRecibida = Input::get('image');
		if ( strcmp ($tituloRecibido, "")){
			$product->titulo = $tituloRecibido;
		}
		if ( strcmp ($precioRecibido, "")){
			$product->price = $precioRecibido;
		}
		if ( strcmp ($categoriaRecibida, "")){
			$product->categoria = $categoriaRecibida;
		}
		if ( strcmp ($descripcionRecibida, "")){
			$product->descripcion = $descripcionRecibida;
		}
		if ( strcmp ($url_imagenRecibida, "")){
			$product->image = $url_imagenRecibida;
		}		
		$product->save();
		return Redirect::action('StoreController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		$product = Product::where('slug',$slug)->first();
		$product->delete();
		return Redirect::back();

	}


}
