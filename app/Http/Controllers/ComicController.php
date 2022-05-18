<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ComicController extends Controller
{
    protected $validationRules = [
        'title'             => 'required|unique:comics|min:5|max:100',
        'thumb'             => 'url|max:250',
        'description'       => 'max:250',
        'price'             => 'required|numeric|max:3',
        'series'            => 'max:150',
        'type'              => 'string|min:3|max:90',
        'sale_date'         => 'before_or_equal:date',
    ];
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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validationRules = [
            'title'             => 'required|unique:comics|min:5|max:100',
            'thumb'             => 'url|max:2000',
            'description'       => 'max:250',
            'price'             => 'required|numeric',
            'series'            => 'max:150',
            'type'              => 'string|min:3|max:90',
            'sale_date'         => 'date',
        ];
        // validazion
        $request->validate($this->validationRules);
        $formData = $request->all();
        $comics = Comic::create($formData);
        return redirect()->route('comics.show', $comics->id);
        // $Comics = new Comic;
        // $Comics->title = $request->item["title"];
        // $Comics->description = $request->item["description"];
        // $Comics->thumb = $request->item["thumb"];
        // $Comics->price = $request->item["price"];
        // $Comics->series = $request->item["series"];
        // $Comics->sale_date = $request->item["sale_date"];
        // $Comics->type = $request->item["type"];
        // $Comics->save();
        // return $Comics;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', [
            'comic'     => $comic,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $this->validationRules = [
            'title'             => 'required|unique:comics|min:5|max:100',
            'thumb'             => 'url|max:2000',
            'description'       => 'max:250',
            'price'             => 'required|numeric|max:3',
            'series'            => 'max:150',
            'type'              => 'string|min:3|max:90',
            'sale_date'         => 'before_or_equal:date',
        ];
        return view('comics.edit', compact('comic'));
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
        $formData = $request->all();

        $comic->update($formData);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Comic $comic)
    // {
    //     $comics = Comic::find($comic);
    //     if ($comics) {
    //         $comics->destroy();
    //         return redirect()->back();
    //     }
    // }
    public function destroy($id)
    {
        Comic::destroy($id);


        return redirect()->route('comics.index');
    }

    public function search(Request $request)
    {
        $search_text = $request->query('query');
        $comics = Comic::where('title', 'LIKE', '%' . $search_text . '%')->get();
        return view('comics.search', compact('comics'));
    }
}
