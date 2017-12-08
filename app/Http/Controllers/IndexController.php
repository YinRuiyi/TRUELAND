<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() 
    {

    	
    	$focus = DB::table('focus')->where('status',1)->get();
    	$series = DB::table('series')->where('status',1)->orderBy('proh1')->get();
    	$team = DB::table('team')->where('status',1)->get();
    	$news = DB::table('news')->where('status',1)->get();
    	$partners = DB::table('partners')->get();

    	return view('Index.index',[
    		'focus'=>$focus,
    		'series'=>$series,
    		'team'=>$team,
    		'news'=>$news,
    		'partners'=>$partners,
    	]);
    }
}
