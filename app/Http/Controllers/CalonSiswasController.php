<?php

namespace App\Http\Controllers;

use App\Models\calon_siswa;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;

class CalonSiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
            $calon_siswa = calon_siswas::all();
            return view('index',['calon_siswa'=>$calon_siswa]);
            // return('hello');

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
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(calon_siswa $calon_siswa): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(calon_siswa $calon_siswa): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, calon_siswa $calon_siswa): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(calon_siswa $calon_siswa): RedirectResponse
    {
        //
    }
}
