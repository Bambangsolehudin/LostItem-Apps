<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Item;
use App\Answerdetail;
use Illuminate\Support\Facades\Auth;

class ItemAllController extends Controller
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
        $items = Item::with('image')->orderBy('id', 'DESC')->get();

        return view('pages.item-all.index', [
            'items' => $items
        ]);
    }

    public function barangHilang()
    {
        $items = Item::with('image')->where('type', 'barang hilang')->get();

        return view('pages.item-all.index', [
            'items' => $items
        ]);
    }

    public function barangTemuan()
    {
        $items = Item::with('image')->where('type', 'barang temuan')->get();

        return view('pages.item-all.index', [
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


        Answerdetail::create([
            'item_id' => $request->item_id,
            'user_id' => Auth::user()->id,
            'answer' => $request->answer12
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
        $item = Item::with('user', 'image')->find($id);
        // dd($item);
        return view('pages.item-all.show', [
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
