<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Sport;
use App\Http\Requests\StoreSport;
use App\CoachRequest; 

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sport::all();
       // return view('sport.edit', compact('sports'));
       return view('sport.index', compact('sports'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sport.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSport $request)
    {
        Sport::create($request->all());
        return redirect()->route('sport.index')->with('success', '新規登録完了しました');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sport = Sport::find($id);
        return view('sport.show', compact('sport'));
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
        Sport::where('id', $id)->update($update);
        return back()->with('success', '編集完了しました');
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSport $request, $id)
    {
        $update = [
            'name' => $request->name,
            // 'coach' => $request->coach,
        ];
        Sport::where('id', $id)->update($update);
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
        Sport::where('id', $id)->delete();
        return redirect()->route('sport.index')->with('success', '削除完了しました');
    }
}