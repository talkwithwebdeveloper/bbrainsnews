<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = "posts";

	protected $fillable = ['title', 'slug', 'content', 'image', 'tags', 'user_id', 'category_id', 'allowed_comment', 'active', 'meta_title', 'meta_description', 'meta_keywords', 'custom_header'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comments::class, 'post_id');
	}

	public function category()
	{
		return $this->belongsTo(Categories::class, 'category_id', 'id');
	}
}
