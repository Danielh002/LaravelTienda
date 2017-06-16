<?php

use App\Product;

class ProductTableSeeder extends Seeder
{

public function run()
{
    DB::table('Products')->delete();

    $data = array(
    	[
    		'titulo'=>'New Camisa',
			'price'=> 4.1 ,
			'slug' =>'camisas1',
			'categoria' =>'camisas',
			'descripcion'=> 'Oferta de verano',
			'image'=> 'https://www.decathlon.es/media/836/8369758/big_6aa9ddf49b2742a598f05cbd1c06afe4.jpg'
    	],
    	[
    		'titulo'=>'New Camisa',
			'price'=> 1.1 ,
			'slug' =>'camisas2',
			'categoria' =>'camisas',
			'descripcion'=> 'Oferta de invierno',
			'image'=> 'https://ae01.alicdn.com/kf/HTB1bh1pIpXXXXb4XVXXq6xXFXXXH/Nueva-marca-Para-Hombre-Camisas-de-Vestir-Casuales-Camisas-Tipo-Delgado-Vestido-de-Manga-Larga-Camisas.jpg'
    	]
    );
    /*DB::table('Products')->insert(array(
			'titulo'=>'New Camisa',
			'price'=> 4.1 ,
			'categoria' =>'camisas',
			'descripcion'=> 'Oferta de verano',
			'image'=> 'https://www.decathlon.es/media/836/8369758/big_6aa9ddf49b2742a598f05cbd1c06afe4.jpg'
			));
			*/
	DB::table('Products')->insert($data);
}
}