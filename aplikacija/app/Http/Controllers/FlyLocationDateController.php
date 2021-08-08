<?php

namespace App\Http\Controllers;

use App\Models\FlyLocationDate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FlyLocationDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $list = FlyLocationDate::all();
        return view('flylocationdate.index', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('flylocationdate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $item = new FlyLocationDate();
        $item->laikas = $request->get('laikas');
        $item->vieta = $request->get('vieta');
        $item->busena = $request->get('busena');
        $item->save();


        $list = FlyLocationDate::all();
        return view('flylocationdate.index', ['list' => $list]);
    }

    /**
     * @return Response
     */
    public function show(FlyLocationDate $item)
    {
        return view('flylocationdate.show', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\FlyLocationDate $flyLocationdate
     * @return Response
     */
    public function edit(FlyLocationDate $flyLocationdate)
    {
        return view('flylocationdate.edit', ['flylocationdate' => $flyLocationdate] );
    }


    public function update(Request $request, FlyLocationDate $flylocationdate)
        {

        $flylocationdate->update($request->toArray());
        return redirect()->route('flylocationdate.index', '' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlyLocationDate  $flylocationdate
     * @return Response
     */
    public function destroy(FlyLocationDate $flylocationdate)
    {
        $flylocationdate->delete();
        return redirect()->route('flylocationdate.index');
    }
    public function list()
    {
        $list = FlyLocationDate::all();
        return view('customerregistration', ['list'=>$list]);
    }

}

