<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ThankYou;


class AdminUserController extends Controller
{
    public function create(){
        return view('auth.adminRegister');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => 'required|string|email|max:255|unique:users',
            'region' => ['required', 'string', 'max:255'],
            'motivation' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'work_in_company' => ['sometimes', 'boolean'],
            'phone_number' => ['required', 'string', 'regex:/^\+?\d{1,4}?\s?\(?\d{1,4}\)?[-.\s]?\d{1,10}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_active' => ['sometimes', 'boolean'],
        ]);
    
        $user = User::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'region' => $request->input('region'),
            'motivation' => $request->input('motivation'),
            'phone_number' => $request->input('phone_number'),
            'work_in_company' => false,
            'company_name' => null,
            'tasks_description' => null,
            'password' => Hash::make($request->input('password')),
            'role' => 'admin',
            'is_active' => true,
        ]);
    
        $user->notify(new ThankYou());
        return redirect()->route('home')->with('success', 'Utilisateur administrateur ajouté avec succès.');
    }
    
}
