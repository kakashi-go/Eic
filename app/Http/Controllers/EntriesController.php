<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
// use Illuminate\Support\Facades\DB;
class EntriesController extends Controller
{
    //
    public function index() {
       $entries = Entry::all();
       foreach($entries as $entry){
           var_dump($entry->content);
       }
    }
}
