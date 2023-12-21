<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\ThankYou;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'fullname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
            'motivation' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'regex:/^\+?\d{1,4}?\s?\(?\d{1,4}\)?[-.\s]?\d{1,10}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_active' => ['sometimes', 'boolean'],
            'highest_education_level' => ['required', 'string', 'max:255'],
            'institution_and_program' => ['required', 'string', 'max:255'],
            'graduation_year' => ['required', 'string', 'max:255'],
        ];

        if ($data['work_in_company']) {
            $rules['company_name'] = ['required', 'string', 'max:255'];
            $rules['tasks_description'] = ['required', 'string', 'max:255'];
        }

        // if (!empty($data['profile_picture'])) {
        //     $rules['profile_picture'] = ['required', 'image', 'max:2048']; // Exemple: La photo doit être une image et ne pas dépasser 2 Mo
        // }

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'fullname' => $data['fullname'],
            'address' => $data['address'],
            'region' => $data['region'],
            'motivation' => $data['motivation'],
            'role' => $data['role'],
            'phone_number' => $data['phone_number'],
            'work_in_company' => $data['work_in_company'],
            'company_name' => $data['company_name'],
            'tasks_description' => $data['tasks_description'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_active' => $data['is_active'] ?? false,
            'highest_education_level' => $data['highest_education_level'],
            'institution_and_program' => $data['institution_and_program'],
            'graduation_year' => $data['graduation_year'],
            'finance_accounting_tools' => $data['finance_accounting_tools'] ?? null,
            'institution_and_program' => $data['institution_and_program'] ?? null,
            'financial_project_risk_evaluation' => $data['financial_project_risk_evaluation'] ?? null,
            'financial_forecasting' => $data['financial_forecasting'] ?? null,
            'javascript_frameworks' => $data['javascript_frameworks'] ?? null,
            'developed_websites' => $data['developed_websites'] ?? null,
            'cross_browser_compatibility' => $data['cross_browser_compatibility'] ?? null,
            'performance_optimization_approach' => $data['performance_optimization_approach'] ?? null,
            'ui_translation_example' => $data['ui_translation_example'] ?? null,
            'programming_languages' => $data['programming_languages'] ?? null,
            'database_project_description' => $data['database_project_description'] ?? null,
            'api_experience' => $data['api_experience'] ?? null,
            'security_tools' => $data['security_tools'] ?? null,
            'open_source_projects' => $data['open_source_projects'] ?? null,
            'agile_experience' => $data['agile_experience'] ?? null,
            'digital_marketing_campaign' => $data['digital_marketing_campaign'] ?? null,
            'commercial_plan' => $data['commercial_plan'] ?? null,
            'communication_strategy_effectiveness_measurement' => $data['communication_strategy_effectiveness_measurement'] ?? null,
            'crm_experience' => $data['crm_experience'] ?? null,
        
        ]);

        // if ($data['profile_picture'] && $data['profile_picture']->isValid()) {
        //     $imagePath = $data['profile_picture']->store('profile_pictures', 'public');
        //     $user->update(['profile_picture' => $imagePath]);
        // }

        $user->notify(new ThankYou());
        return $user;       
    }

     /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        // Laissez cette méthode vide pour désactiver la connexion automatique// Ajoutez un message flash à la session
    Session::flash('success', 'Inscription réussie ! Bienvenue, ' . $user->fullname);

    // Redirigez l'utilisateur vers la page souhaitée
    return redirect()->intended($this->redirectPath());
    }
}
