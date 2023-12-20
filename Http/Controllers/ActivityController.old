<?php

declare(strict_types=1);

namespace Modules\Activity\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('comment::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('comment::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Contracts\View\View
    {
        return view('comment::store');
    }

    /**
     * Show the specified resource.
     */
    public function show(int $id): \Illuminate\Contracts\View\View
    {
        return view('comment::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): \Illuminate\Contracts\View\View
    {
        return view('comment::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): \Illuminate\Contracts\View\View
    {
        return view('comment::update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): \Illuminate\Contracts\View\View
    {
        return view('comment::delete');
    }
}
