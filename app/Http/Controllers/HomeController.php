<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Online Store';
        return view('home.index')->with("viewData", $viewData);
    }


    public function about()
    {
        $viewData = [];
        $viewData['title'] = "About us -Online Store";
        $viewData['subtitle'] = "About Us";
        $viewData['description'] = "This is an about Page...";
        $viewData['author']= "Developed by Utsav karki";
        return view('home.about')->with('viewData', $viewData);
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
