<?php
namespace App\Traits;

trait CustomRegistersUsers
{
    use \Illuminate\Foundation\Auth\RegistersUsers {
        register as traitRegister;
    }

    // Redéfinissez la méthode register pour ajuster le comportement
    protected function register(\Illuminate\Http\Request $request)
    {
        $user = $this->traitRegister($request);

        return redirect('/register')->with('user', $user);
    }
}
