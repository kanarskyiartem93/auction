<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Http\Requests\Lot\LotStoreRequest;
use App\Http\Requests\Lot\LotUpdateRequest;
use App\Models\Category;
use App\Models\Lot;

class LotController extends Controller
{
    public function index()
    {
        $lots = Lot::all();
        return view('lot.index', compact('lots'));
    }

    public function show(Lot $lot)
    {
        return view('lot.show', compact('lot'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('lot.create', compact('categories'));
    }

    public function store(LotStoreRequest $request)
    {
        $data = $request->validated();
        $categories = $data['categories'];
        unset($data['categories']);
        $lot = Lot::create($data);
        $lot->categories()->attach($categories);
        return redirect()->route('lots.index');
    }

    public function edit(Lot $lot)
    {
        return view('lot.edit', compact('lot'));
    }

    public function update(LotUpdateRequest $request, Lot $lot)
    {
        $data = $request->validated();
        $lot->update($data);
        return redirect()->route('lots.index');
    }

    public function destroy(Lot $lot)
    {
        $lot->delete();
        return redirect()->route('lots.index');
    }

}
