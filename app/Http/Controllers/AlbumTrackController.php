<?php

namespace App\Http\Controllers;

use App\Models\AlbumTrack;
use Illuminate\Http\Request;

class AlbumTrackController extends Controller
{
    public function album_tracks($album_id)
    {
        $tracks = AlbumTrack::with('track')->where('album_id', $album_id)->select('id','track_id')->get();
        if(count($tracks)>0){
            return response()->json(['code'=>'200', 'data' => $tracks, 'message' => 'All Tracks in this album']);
        } else {
            return response()->json(['code'=>'404', 'data' => '', 'message' => 'No Tracks found']);
        }
    }
}
