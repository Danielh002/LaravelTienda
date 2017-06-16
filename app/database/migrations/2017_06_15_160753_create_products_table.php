<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('products', function (Blueprint $table) {
			$table->increments('id');
			$table->string('titulo', 20);
			$table->decimal('price', 5, 2);
			$table->string('categoria', 20);
			$table->string('descripcion', 255);
			$table->string('image', 255);
			$table->date('created_at');
			$table->date('updated_at');
			$table->string('slug', 20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('products');
	}
}
