<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Image;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        
        
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Image::where('user_id', Auth::user()->id)->get();
        return view('pages.images.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::where('user_id', Auth::user()->id)->get();

        return view('pages.images.create',[
            'items' => $items
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        Image::create($data);
        return redirect()->route('image.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::findOrFail($id);
        $item = item::all();

        return view('pages.images.edit',[
            'item' => $item,
            'image' => $image
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = $request->all();

        // dd($data);
        
        if(!$request->file('image')) {
            $data = $request->all();
            $image = Image::find($id);
            $image->update($data);
        
        }else{
            $data = $request->all();
            $data['image'] = $request->file('image')->store(
                'assets/gallery', 'public'
            );
            $image = Image::find($id);
            $image->update($data);
        }
        return redirect()->route('image.index');
     
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=Image::find($id);
        $image->delete();
        return redirect()->route('image.index');

    }
}
