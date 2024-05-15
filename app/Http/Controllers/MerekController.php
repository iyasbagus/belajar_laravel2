<?php

namespace App\Http\Controllers;

use App\Models\Merek;

class MerekController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function menampilkan()
    {
        $merek = Merek::all();
        return view('mereks.index', compact('merek'));
    }

    public function show($id)
    {
        $merek = Merek::FindOrFail($id);
        return view('mereks.show', compact('merek'));
    }
}
