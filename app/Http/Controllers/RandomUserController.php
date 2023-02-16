<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRandomUserRequest;
use App\Http\Requests\UpdateRandomUserRequest;
use App\Models\RandomUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RandomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRandomUserRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RandomUser $randomUser): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RandomUser $randomUser): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRandomUserRequest $request, RandomUser $randomUser): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RandomUser $randomUser): RedirectResponse
    {
        //
    }
}
