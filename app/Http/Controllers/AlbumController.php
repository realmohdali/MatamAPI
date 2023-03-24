<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index($limit = null)
    {
        $albums = '';
        if ($limit == null) {
            $albums = Album::select('id', 'name', 'album_cover')->orderBy('release_year', 'DESC')->get();
        } else {
            $albums = Album::select('id', 'name', 'album_cover')->orderBy('release_year', 'DESC')->limit($limit)->get();
        }
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }

    public function artist($artist_id)
    {
        $albums = Album::select('id', 'name', 'album_cover', 'featured', 'new_release')->where('artist_id', $artist_id)->orderBy('release_year', 'DESC')->get();
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }

    public function year($year_id)
    {
        $albums = Album::select('id', 'name', 'album_cover', 'featured', 'new_release')->where('year_id', $year_id)->orderBy('release_year', 'DESC')->get();
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }

    public function featured()
    {
        $albums = Album::select('id', 'name', 'album_cover', 'featured', 'new_release')->where('featured', 1)->orderBy('release_year', 'DESC')->get();
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }

    public function newRelease()
    {
        $albums = Album::select('id', 'name', 'album_cover', 'featured', 'new_release')->where('new_release', 1)->orderBy('release_year', 'DESC')->get();
        if (count($albums) > 0) {
            return response()->json(['code' => '200', 'data' => $albums, 'message' => 'List of Albums']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'List of Albums is Empty']);
        }
    }
}
