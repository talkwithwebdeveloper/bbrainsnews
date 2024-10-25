<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return response()
            ->view('sitemap', ['posts' => $posts])
            ->header('Content-Type', 'application/xml');
    }
}
