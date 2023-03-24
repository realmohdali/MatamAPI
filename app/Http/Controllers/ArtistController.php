<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index($name = null)
    {
        $artists = '';
        if ($name == null) {
            $artists = Artist::select('id', 'name', 'image', 'nationality')->get();
        } else {
            $artists = Artist::select('id', 'name', 'image', 'nationality')->where('name', 'like', '%' . $name . '%')->get();
        }
        if (count($artists) > 0) {
            return response()->json(['code' => '200', 'data' => $artists, 'message' => 'All Artist List']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'Artist List is Empty']);
        }
    }

    public function featured()
    {
        $artists = Artist::select('id', 'name', 'image', 'nationality', 'featured')->where('featured', 1)->get();
        if (count($artists) > 0) {
            return response()->json(['code' => '200', 'data' => $artists, 'message' => 'All Artist List']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'Artist List is Empty']);
        }
    }
}
