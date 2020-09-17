<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Sports;
use App\Http\Requests\StoreSports;
 
class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sports::all();
        return view('sports.index', compact('sports'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sports.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSports $request)
    {
        sports::create($request->all());
        return redirect()->route('sports.index')->with('success', '新規登録完了しました');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sports = sports::find($id);
        return view('sports.show', compact('sports'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sports = sports::find($id);
        return view('sports.edit', compact('sports'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSports $request, $id)
    {
        $update = [
            'title' => $request->title,
            'author' => $request->author
        ];
        Sports::where('id', $id)->update($update);
        return back()->with('success', '編集完了しました');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sports::where('id', $id)->delete();
        return redirect()->route('sports.index')->with('success', '削除完了しました');
    }
}