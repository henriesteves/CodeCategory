<?php

namespace CodePress\CodeCategory\Controllers;


class AdminCategoriesController extends Controller
{
    public function index()
    {
        //return 'Test Controller';
        return view('codecategory::index');
    }
}