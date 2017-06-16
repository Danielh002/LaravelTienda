<?php

use Illuminate\DataBase\Eloquent\Model;

class Product extends Eloquent
{
	protected $table = 'Products';
	public $timestamp = false;
}