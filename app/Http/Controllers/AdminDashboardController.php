<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\UserActivatedEmail;
use Illuminate\Support\Facades\Mail;

class AdminDashboardController extends Controller
{
    //
    public function index() {
        
        $nombrePostulantMarketing = User::where('role', 'marketing')->count();
        $nombrePostulantFinance = User::where('role', 'financier')->count();
        $nombrePostulantDevBackend = User::where('role', 'backend_dev')->count();
        $nombrePostulantDevFrontend = User::where('role', 'frontend_dev')->count();
        $postulant = User::whereNotIn('role', ['admin', 'superAdmin'])->get();
        return view('admin.adminDashboard', compact('nombrePostulantMarketing',
        'nombrePostulantFinance',
        'nombrePostulantDevBackend',
        'nombrePostulantDevFrontend',
        'postulant'));
    }

    public function exportToExcel()
    {
        return Excel::download(new UsersExport, 'users-export.xlsx');
    }

    public function activateUser(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->is_active = true;
        $user->save();

        // Mail::to($user->email)->send(new UserActivatedEmail($user));
        $request->session()->flash('success', 'Candidature validée avec succès.');

        // Rediriger vers la même page
        return back();
        // Rediriger avec un message de succès ou retourner une réponse appropriée
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postulant = User::findOrFail($id);
        return view('postulant.show', compact('postulant'));
    }

    public function frontend() {
        
        $postulantDevFrontend = User::where('role', 'frontend_dev')->get();
        return view('postulant.frontend', compact('postulantDevFrontend'));
    }

    public function backend() {
        $postulantDevBackend = User::where('role', 'backend_dev')->get();
        return view('postulant.backend', compact('postulantDevBackend'));
    }

    public function financier() {
        
        $postulantFinance = User::where('role', 'financier')->get();
        return view('postulant.finance', compact('postulantFinance'));
    }

    public function marketing() {
        
        $postulantMarketing = User::where('role', 'marketing')->get();
        return view('postulant.marketing', compact('postulantMarketing'));
    }

   
}
