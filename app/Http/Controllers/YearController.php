<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;

class YearController extends Controller
{
    public function index($year = null)
    {
        $artists = '';
        if($year == null) {
            $artists = Year::select('id', 'year')->get();
        } else {
            $artists = Year::select('id', 'year')->where('year','like','%'.$year.'%')->get();
        }
        if (count($artists) > 0) {
            return response()->json(['code' => '200', 'data' => $artists, 'message' => 'All Artist List']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'Artist List is Empty']);
        }
    }
}
