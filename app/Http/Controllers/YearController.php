<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;

class YearController extends Controller
{
    public function index($year = null)
    {
        $years = '';
        if($year == null) {
            $years = Year::select('id', 'year_ad', 'year_hijri')->get();
        } else {
            $years = Year::select('id', 'year_ad', 'year_hijri')->where('year_hijri','like','%'.$year.'%')->get();
        }
        if (count($years) > 0) {
            return response()->json(['code' => '200', 'data' => $years, 'message' => 'All Years List']);
        } else {
            return response()->json(['code' => '404', 'data' => '', 'message' => 'Years List is Empty']);
        }
    }
}
