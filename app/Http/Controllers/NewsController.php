<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class NewsController extends Controller
{
    public function index(){
        $search =  "Harry News";
        $data = Http::get('https://newsapi.org/v2/everything?q=bitcoin&apiKey=1f5d0d60a86445679e207f05a754b733');

        return view('news',['collectionsofnews' => $data['articles'] ]);

    }
    public function search(Request $request){
        $search =  $request->sech;
        $data = Http::get('https://newsapi.org/v2/everything?q='.$search.'&apiKey=1f5d0d60a86445679e207f05a754b733');

        return view('search',['collectionsofnews' => $data['articles'],'search'=>$search ]);

    }
    public function sources(){
        $search =  "All Sources";
        $data = Http::get('https://newsapi.org/v2/sources?apiKey=1f5d0d60a86445679e207f05a754b733');

        return view('source',['collectionsofnews' => $data['sources'],'search'=>$search ]);

    }
    public function sourcenews($sources){
        $search =  "Source ".$sources;
        $data = Http::get('https://newsapi.org/v2/everything?sources='.$sources.'&apiKey=1f5d0d60a86445679e207f05a754b733');

        return view('source_news',['collectionsofnews' => $data['articles'],'search'=>$search ]);

    }
    public function category($cat){
        $search =  "Category : ".$cat;
        $data = Http::get('https://newsapi.org/v2/top-headlines?category='.$cat.'&apiKey=1f5d0d60a86445679e207f05a754b733');

        return view('source_news',['collectionsofnews' => $data['articles'],'search'=>$search ]);

    }
}
