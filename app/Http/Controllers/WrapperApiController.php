<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function Getalistofrecentcomments()
    {
        $json = Http::get( '{{baseUrl}}/media/:media-id/comments/')->json();
        return response()->json($json);
    }
    public function Getinformationaboutamedia()
    {
        $json = Http::get( '{{baseUrl}}/media/:media-id/')->json();
        return response()->json($json);
    }
    public function Getalistofcurrentlypopularmedia()
    {
        $json = Http::get( '{{baseUrl}}/media/popular/')->json();
        return response()->json($json);
    }
    public function Searchformediainagivenarea()
    {
        $json = Http::get( '{{baseUrl}}/media/search?lat=<number>&lng=<number>&min_timestamp=<integer>&max_timestamp=<integer>&distance=<integer>/')->json();
        return response()->json($json);
    }
    public function shortcode()
    {
        $json = Http::get( '{{baseUrl}}/media/shortcode/:shortcode/')->json();
        return response()->json($json);
    }
}
