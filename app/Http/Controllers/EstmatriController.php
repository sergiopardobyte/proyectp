<?php

namespace App\Http\Controllers;

use App\Models\Estmatri;
use Illuminate\Http\Request;

/**
 * Class EstmatriController
 * @package App\Http\Controllers
 */
class EstmatriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estmatris = Estmatri::paginate();

        return view('estmatri.index', compact('estmatri'))
            ->with('i', (request()->input('page', 1) - 1) * $estmatris->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estmatri = new Estmatri();
        return view('estmatri.create', compact('estmatri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estmatri::$rules);

        $estmatri = Estmatri::create($request->all());

        return redirect()->route('estmatri.index')
            ->with('success', 'Estmatri created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estmatri = Estmatri::find($id);

        return view('estmatri.show', compact('estmatri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estmatri = Estmatri::find($id);

        return view('estmatri.edit', compact('estmatri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estmatri $estmatri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estmatri $estmatri)
    {
        request()->validate(Estmatri::$rules);

        $estmatri->update($request->all());

        return redirect()->route('estmatri.index')
            ->with('success', 'Estmatri updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estmatri = Estmatri::find($id)->delete();

        return redirect()->route('estmatri.index')
            ->with('success', 'Estmatri deleted successfully');
    }
}
