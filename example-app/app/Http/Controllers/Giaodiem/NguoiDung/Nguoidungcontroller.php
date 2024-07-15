<?php

namespace App\Http\Controllers\Giaodiem\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Nguoidungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('nguoidung.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('nguoidung.login');
    }
    public function catagory()
    {
        return view('nguoidung.dangmuc');
    }
    public function checkout()
    {
        return view('nguoidung.checkout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}