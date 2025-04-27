<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criterias = Criteria::latest()->paginate(10);
        return view('admin.criteria.index', compact('criterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:criterias',
        ]);

        Criteria::create($request->all());

        return redirect()->route('admin.criteria.index')
            ->with('success', 'Criteria created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Criteria $criteria)
    {
        return view('admin.criteria.show', compact('criteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criteria $criteria)
    {
        return view('admin.criteria.edit', compact('criteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Criteria $criteria)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:criterias,name,' . $criteria->id,
        ]);

        $criteria->update($request->all());

        return redirect()->route('admin.criteria.index')
            ->with('success', 'Criteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Criteria $criteria)
    {
        $criteria->delete();

        return redirect()->route('admin.criteria.index')
            ->with('success', 'Criteria deleted successfully');
    }
}