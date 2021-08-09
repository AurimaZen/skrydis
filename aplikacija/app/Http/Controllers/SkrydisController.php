<?php

namespace App\Http\Controllers;

use App\Models\FlyLocationDate;
use App\Models\Product;
use App\Models\Skrydis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SkrydisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$list = Skrydis::all();
        $list = Skrydis::filter($request)->get();
        return view('interface.index', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('interface.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $skrydis = new Skrydis();
        $skrydis->vardas = $request->get('vardas');
        $skrydis->pastas = $request->get('pastas');
        $skrydis->telefonas = $request->get('telefonas');
        $skrydis->vieta = $request->get('vieta');
        $skrydis->laikas = $request->get('laikas');
        $skrydis->busena = $request->get('busena');
        $skrydis->save();


        $list = Skrydis::all();
        return view('interface.index', ['list' => $list]);
    }

    /**
     * @return Response
     */
    public function show(Skrydis $skrydis)
    {
        return view('interface.show', $skrydis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Skrydis $skrydis
     * @return Response
     */
    public function edit(Skrydis $skrydi)
    {
        //$skrydis=Skrydis::find(1);
        return view('interface.edit', ['skrydis' => $skrydi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Skrydis $skrydis
     * @return Response
     */
    public function update(Request $request, Skrydis $skrydi)
    {
        $skrydi->update($request->toArray());
        return redirect()->route('skrydis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Skrydis $skrydis
     * @return Response
     */
    public function destroy(Skrydis $skrydi)
    {
        $skrydi->delete();
        return redirect()->route('skrydis.index');
    }

    public function registrationForm(Request $request)
    {
        $skydis = Skrydis::where('kodas', $request->get('kodas'))->first();
        $list = FlyLocationDate::all();
        return view('customerregistration', ['list' => $list, 'skrydis' => $skydis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Skrydis $skrydis
     * @return Response
     */
    public function skrydisUpdate(Request $request, Skrydis $skrydi)
    {
        $dataLaikas = explode('|', $request->get('vietos'));

        $laikas = $dataLaikas[0];
        $vieta = $dataLaikas[1];
        $skrydi->update([
            'vardas' => $request->get('vardas'),
            'pastas' => $request->get('pastas'),
            'telefonas' => $request->get('telefonas'),
            'vieta' => $vieta,
            'laikas' => $laikas,
            'busena' => 'uzregistruotas',
        ]);
        $skrydi->save();

        return redirect()->route('registration.update', '/');
    }

    public function filtras(Request $request, Skrydis $skrydi)
    {
        return Skrydis::filter($request)->get();
    }

    public function registerCoupon(Request $request)
    {
        return view('couponForm', ['kodas' => $request->get('kodas')]);
    }
}
