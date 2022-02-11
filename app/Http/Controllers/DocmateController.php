<?php

namespace App\Http\Controllers;

use App\Models\Docmate;
use Illuminate\Http\Request;

/**
 * Class DocmateController
 * @package App\Http\Controllers
 */
class DocmateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docmates = Docmate::paginate();

        return view('docmate.index', compact('docmates'))
            ->with('i', (request()->input('page', 1) - 1) * $docmates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docmate = new Docmate();
        return view('docmate.create', compact('docmate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Docmate::$rules);

        $docmate = Docmate::create($request->all());

        return redirect()->route('docmates.index')
            ->with('success', 'Docmate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docmate = Docmate::find($id);

        return view('docmate.show', compact('docmate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docmate = Docmate::find($id);

        return view('docmate.edit', compact('docmate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Docmate $docmate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docmate $docmate)
    {
        request()->validate(Docmate::$rules);

        $docmate->update($request->all());

        return redirect()->route('docmates.index')
            ->with('success', 'Docmate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docmate = Docmate::find($id)->delete();

        return redirect()->route('docmates.index')
            ->with('success', 'Docmate deleted successfully');
    }
}
