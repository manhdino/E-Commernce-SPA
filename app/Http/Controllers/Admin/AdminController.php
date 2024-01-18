<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Dashboard', ['admin' => 'Admin Controller']);
        // return Inertia::render('Admin.Auth.Login');
        // return 'Admin.Dashboard';
    }
}
