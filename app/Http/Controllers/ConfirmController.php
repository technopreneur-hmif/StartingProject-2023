<?php

namespace App\Http\Controllers;

use App\Models\Confirm;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\StoreConfirmRequest;
use App\Http\Requests\UpdateConfirmRequest;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('cms.confirm', compact('users') ,[
            'title' => 'konfirmasi-pemilih'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConfirmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Confirm $confirm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Confirm $confirm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConfirmRequest $request, Confirm $confirm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Confirm $confirm)
    {
        //
    }
}
