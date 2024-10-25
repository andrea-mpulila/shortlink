<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function create()
    {
        return view('create-link');
        $xy =0;
        

    }
 
    public function store(Request $request)
    {
        $request->validate(['url' => 'required|url']);
 
        $originalUrl = $request->input('url');
        $link = Link::shortenUrl($originalUrl);
 
        return redirect()->route('link.show', $link->short_url);
    }
 
    public function show($shortUrl)
    {
        $originalUrl = Link::getOriginalUrl($shortUrl);
 
        if (!$originalUrl) {
            abort(404);
        }
 
        return redirect($originalUrl);
    }
}
