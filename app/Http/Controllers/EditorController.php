<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    //

    public function index()
    {
        $editors = Editor::all();
        return view('editors', compact('editors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'operating_system' => 'required',
            'license' => 'required',
        ]);

        Editor::create($request->all());

        return redirect()->route('editors.index')
            ->with('success', 'Editor created successfully.');
    }

}
