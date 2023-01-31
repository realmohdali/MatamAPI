<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index($limit = null)
    {
        $albums = '';
        if($limit == null) {
            $albums = Album::select('id', 'name', 'album_cover')->get();
        } else {
            $albums = Album::select('id', 'name', 'album_cover')->limit($limit)->get();
        }
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }
    
    public function artist($artist_id)
    {
        $albums = Album::select('id', 'name')->where('artist_id', $artist_id)->get();
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }

    public function year($year_id)
    {
        $albums = Album::select('id', 'name')->where('year_id', $year_id)->get();
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }
}
