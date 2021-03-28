<?php

namespace App\Http\Controllers;

// use App\Answer;
use Illuminate\Http\Request;
use App\Item;
use App\Image;
use App\Answerdetail;
use Illuminate\Support\Facades\Auth;

class ItemAllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with('image')->get();

        return view('pages.item-all.index',[
            'items' => $items
        ]);
    }

    public function barangHilang()
    {
        $items = Item::with('image')->where('type', 'barang hilang')->get();

        return view('pages.item-all.index',[
            'items' => $items
        ]);
    }

    public function barangTemuan()
    {
        $items = Item::with('image')->where('type', 'barang temuan')->get();

        return view('pages.item-all.index',[
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
        
    }

    public function answer(Request $request)
    {

        // $post = Post::create([
    	// 	'title' => $request->title,
    	// 	'content' => $request->content,
    	// 	'user_id' => auth()->user()->id,
    	// 	'thumbnail'=> $request->thumbnail
    	// ]);

        // $data = $request->all();
        // // $data['user_id'] = ;
        // $data['name'] = Auth::user()->name;
        // $data['nomor'] = Auth::user()->nomor;


        
        // $answer = Answer::create([
        //     'item_id' => $request->item_id,
        //     'user_id' => $request->user_id,
        //     'name' => Auth::user()->name,
        //     'nomor' => Auth::user()->nomor,
        //     'answer' => $request->answer
        // ]);

        $answerdetail = Answerdetail::create([
            // 'answer_id' => $answer->id,
            'item_id' => $request->item_id,
            'user_id' => Auth::user()->id,
            'answer' => $request->answer
        ]);

        return redirect()->route('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::with('user','image')->find($id);
        // dd($item);
        return view('pages.item-all.show',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
