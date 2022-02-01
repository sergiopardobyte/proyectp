<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

/**
 * Class SectionController
 * @package App\Http\Controllers
 */
class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::paginate();

        return view('section.index', compact('sections'))
            ->with('i', (request()->input('page', 1) - 1) * $sections->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section = new Section();
        return view('section.create', compact('section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Section::$rules);

        $section = Section::create($request->all());

        return redirect()->route('section.index')
            ->with('success', 'Section created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Section::find($id);

        return view('section.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::find($id);

        return view('section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Section $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        request()->validate(Section::$rules);

        $section->update($request->all());

        return redirect()->route('section.index')
            ->with('success', 'Section updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $section = Section::find($id)->delete();

        return redirect()->route('section.index')
            ->with('success', 'Section deleted successfully');
    }
}
