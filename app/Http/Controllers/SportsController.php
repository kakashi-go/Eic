<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
Sports::create($request->all());



class SportsController extends Controller
{
    public function index()
    {
        $books = DB::select('select * from sports');
        $data = ['msg' => 'スポーツ一覧', 'sports' => $sports];
        return view('sports.index', $data);
    }
}