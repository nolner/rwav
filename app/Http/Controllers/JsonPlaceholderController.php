<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class JsonPlaceholderController extends Controller
{
    /**
     * Called from front-end to return posts (x100)
     *
     * @return json
     */
    public function posts() {

        return Http::get('https://jsonplaceholder.typicode.com/posts')->json();
    }
}
