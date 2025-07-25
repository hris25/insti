<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if ($request->email === 'insti@admin.com' && $request->password === 'admin123') {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Identifiants incorrects');
    }

    public function logout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('admin.login');
    }
}
