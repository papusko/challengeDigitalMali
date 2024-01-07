<?php
// app/Exports/UsersExport.php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UsersExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        $sheets = [];

        // Sheet 2: Utilisateurs avec le rôle "financier"
        $sheets[] = new UsersSheet(User::where('role', 'financier')->get(), 'Financiers', 'financier');

        // Sheet 3: Utilisateurs avec le rôle "marketing"
        $sheets[] = new UsersSheet(User::where('role', 'marketing')->get(), 'Marketing', 'marketing');

        // Sheet 4: Utilisateurs avec le rôle "dev backend"
        $sheets[] = new UsersSheet(User::where('role', 'backend_dev')->get(), 'Developpeur backend', 'backend_dev');

        // Sheet 5: Utilisateurs avec le rôle "frontendev"
        $sheets[] = new UsersSheet(User::where('role', 'frontend_dev')->get(), 'developpeur frontend', 'frontend_dev');

        return $sheets;
    }
}
