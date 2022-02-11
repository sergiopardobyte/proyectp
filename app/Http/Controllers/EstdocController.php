<?php

namespace App\Http\Controllers;

use App\Models\Estdoc;
use Illuminate\Http\Request;

/**
 * Class EstdocController
 * @package App\Http\Controllers
 */
class EstdocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estdocs = Estdoc::paginate();

        return view('estdoc.index', compact('estdocs'))
            ->with('i', (request()->input('page', 1) - 1) * $estdocs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estdoc = new Estdoc();
        return view('estdoc.create', compact('estdocs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estdoc::$rules);

        $estdoc = Estdoc::create($request->all());

        return redirect()->route('estdocs.index')
            ->with('success', 'Estdoc created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estdoc = Estdoc::find($id);

        return view('estdoc.show', compact('estdocs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estdoc = Estdoc::find($id);

        return view('estdoc.edit', compact('estdocs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estdoc $estdoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estdoc $estdoc)
    {
        request()->validate(Estdoc::$rules);

        $estdoc->update($request->all());

        return redirect()->route('estdocs.index')
            ->with('success', 'Estdoc updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estdoc = Estdoc::find($id)->delete();

        return redirect()->route('estdocs.index')
            ->with('success', 'Estdoc deleted successfully');
    }
}
