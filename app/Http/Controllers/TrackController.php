<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Year;


class TrackController extends Controller
{
    public function index($artist_id, $year_id)
    {
        $tracks = Track::with('artist')->with('year')->select('id', 'title', 'track_url', 'artist_id', 'year_id')->where('artist_id', $artist_id)->where('year_id', $year_id)->get();

        if (count($tracks) > 0) {
            return response()->json(['code' => '200', 'data' => $tracks, 'message' => 'List of Tracks']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'Tracks List is Empty']);
        }
    }

    public function search($title = null)
    {
        $tracks = Track::with('artist')->with('year')->select('id', 'title', 'track_url', 'artist_id', 'year_id')->where('title', 'like', '%' . $title . '%')->get();

        if (count($tracks) > 0) {
            return response()->json(['code' => '200', 'data' => $tracks, 'message' => 'List of Tracks']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'Tracks List is Empty']);
        }
    }

    public function all($id = null)
    {
        $tracks = '';
        if ($id == null) {
            $tracks = Track::with('artist')->with('year')->select('id', 'title', 'track_url', 'artist_id', 'year_id')->get();
        } else {
            $tracks = Track::with('artist')->with('year')->select('id', 'title', 'track_url', 'artist_id', 'year_id')->where('id', $id)->get();
        }

        if (count($tracks) > 0) {
            return response()->json(['code' => '200', 'data' => $tracks, 'message' => 'List of Tracks']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'r_id' => $id, 'message' => 'Tracks List is Empty']);
        }
    }
}
