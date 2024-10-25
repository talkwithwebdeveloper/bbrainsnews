<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Posts;

class PreviewController extends Controller
{
	public function preview($slug)
	{
		$post = Posts::where('slug', $slug)->firstOrFail();


		$tags = explode(',', $post->tags);

		return view('blog.preview', compact('post', 'tags'));
	}
}
