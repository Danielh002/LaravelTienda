<?php

use Illuminate\DataBase\Eloquent\Model;

class Product extends Eloquent
{
	protected $table = 'Products';
	public $timestamp = true;
	protected $fillable = array('titulo', 'price', 'categoria', 'descripcion', 'image' , 'slug');
}