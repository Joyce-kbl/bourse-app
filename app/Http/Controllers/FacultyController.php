<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $faculties = Faculty::latest()->get();
    return view('faculties.index', compact('faculties'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('faculties.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      "name" => 'required|string|min:6|max:191|unique:faculties',
      "sigle" => 'required|string|min:2|max:191|unique:faculties',
    ]);

    Faculty::create($request->all());

    return redirect()->route('faculties.index')->with('success', 'Faculté créée avec succès');
  }

  /**
   * Display the specified resource.
   */
  public function show(Faculty $faculty) {}

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Faculty $faculty)
  {
    return view('faculties.edit', compact('faculty'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Faculty $faculty)
  {
    $faculty->update($request->all());
    return redirect()->route('faculties.index')->with('success', 'Faculté mise à jour avec succès');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Faculty $faculty)
  {
    $faculty->delete();
    return redirect()->route('faculties.index')->with('success', 'Faculté supprimée avec succès');
  }
}
