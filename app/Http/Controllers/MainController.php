<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Url;
use Config;

class MainController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $str = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890";
        $rand = substr(str_shuffle($str), 0, 5);

        $url = $request['url'];

        $fields = ['url' => $url, 'slug' => $rand];

        $link = new Url;
        $link->create($fields);

        $url = Config::get('app.url') . '/' . $rand;

        return view('index', compact('url'));
    }

    /**
     * Redirect to specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function redirect($slug)
    {
        $url = Url::where('slug', $slug)->first();

        if (Carbon::now() > $url->created_at->addHours(5)) {
            return 'Your URL is expired';
        }

        return redirect($url->url);
    }
}
