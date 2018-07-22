<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function index()
    {
    	// show all categories
    	$categories = Category::all();
    }
}
