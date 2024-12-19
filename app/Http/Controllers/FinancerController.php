<?php

namespace App\Http\Controllers;

use App\Models\Financer;
use Illuminate\Http\Request;

class FinancerController extends Controller
{
      /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $financers = Financer::latest()->get();
    return view('financers.index', compact('financers'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('financers.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      "name" => 'required|string|min:3|max:191|unique:financers,name',
      "description" => 'required|string|min:2',
    ]);

    Financer::create($request->all());

    return redirect()->route('financers.index')->with('success', 'Donateur créé avec succès');
  }

  /**
   * Display the specified resource.
   */
  public function show(Financer $financer) {}

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Financer $financer)
  {
    return view('financers.edit', compact('Financer'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Financer $financer)
  {
    $financer->update($request->all());
    return redirect()->route('financers.index')->with('success', 'Donateur mis à jour avec succès');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Financer $financer)
  {
    $financer->delete();
    return redirect()->route('financers.index')->with('success', 'Donateur supprimé avec succès');
  }
}
