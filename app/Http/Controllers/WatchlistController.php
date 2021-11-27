<?php

namespace App\Http\Controllers;

use App\Models\watchlist;
use App\Http\Requests\StorewatchlistRequest;
use App\Http\Requests\UpdatewatchlistRequest;
use DB;

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorewatchlistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorewatchlistRequest $request)
    {
        $watchlist = new watchlist();
        $data = $request->input();

        $watchlist->id = $this->idGenerator();
        $watchlist->show_title = $data['showTitle'];
        $watchlist->show_category = $data['showCategory'];

        $watchlist->save();

        return redirect('/');
    }

    private function idGenerator(){
        $num = array("1", "2", "3", "4", "5", "6", "7", "8","9");
        $generatedID = "";

        for($i = 0; $i<4; $i++){
            $generatedID .= $num[rand(0, 8)];
        }

        return $generatedID;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\watchlist  $watchlist
     * @return \Illuminate\Http\Response
     */
    public function show(watchlist $watchlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\watchlist  $watchlist
     * @return \Illuminate\Http\Response
     */
    public function edit(watchlist $watchlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewatchlistRequest  $request
     * @param  \App\Models\watchlist  $watchlist
     * @return \Illuminate\Http\Response
     */
    public function update($id, $category)
    {
        DB::update('UPDATE watchlists SET show_category = ? WHERE id = ?',[$category, $id]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\watchlist  $watchlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM watchlists WHERE id > 2');
        
        return redirect('/');
    }
}
