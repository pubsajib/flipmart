<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function category() {
		return $this->belongsTo(Category::class);
	}
	public function tag() {
		return $this->belongsToMany(Tag::class);
	}
	public function author() {
		return $this->belongsTo(User::class, 'user_id');
	}
}
