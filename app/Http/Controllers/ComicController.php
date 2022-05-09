<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(10);
        return view('home', compact('comics'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Comics = new Comic;
        $Comics->title = $request->item["title"];
        $Comics->description = $request->item["description"];
        $Comics->thumb = $request->item["thumb"];
        $Comics->price = $request->item["price"];
        $Comics->series = $request->item["series"];
        $Comics->sale_date = $request->item["sale_date"];
        $Comics->type = $request->item["type"];
        $Comics->save();
        return $Comics;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $comics = Comic::find($comic);
        if ($comics) {
            return $comics;
        }
        return 'item not found';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comics = Comic::find($comic);
        if ($comics) {
            $comics->delete();
            return redirect()->back();
        }
        return 'item not found';
    }

    public function search()
    {
        $search_text = $_GET['query'];
        if ($search_text = '') {
            return;
        }
        $comics = Comic::where('title', 'LIKE', '%' . $search_text . '%')->get();
        return view('home', compact('comics'));
    }
}
