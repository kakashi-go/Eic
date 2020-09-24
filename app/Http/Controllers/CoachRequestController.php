<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoachRequest;
use App\Http\Requests\StoreCoachRequest;
use Illuminate\Support\Facades\Auth;



class CoachRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coach_requests = CoachRequest::all();
        // $coach_requests = CoachRequest::all();
        return view('coach_request.index', compact('coach_requests'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('coach_request.create');
    }
 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoachRequest $request)
    {
        
        CoachRequest::create($request->all());
        return redirect()->route('coach_request.index')->with('success', '新規登録完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coach_request = CoachRequest::find($id);
        return view('coach_request.show', compact('coach_request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = [
          
            // 'author' => $request->author
        ];
        CoachRequest::where('id', $id)->update($update);
        return back()->with('success', '編集完了しました');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCoachRequest $request, $id)
    {
        $user_id = Auth::id();
        // $sport_id = Auth::sport_id(),
        CoachRequest::where('id', $id)->delete();
        return redirect()->route('coach_request.index')->with('success', '削除完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function destroy($id)
    {
        CoachRequest::where('id', $id)->delete();
        return redirect()->route('sport.index')->with('success', '削除完了しました');
    }
    
}
