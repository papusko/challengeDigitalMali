<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'address',
        'region',
        'motivation',
        'phone_number',
        'role',
        'works_in_company',
        'company_name',
        'tasks_description',
        'is_active',
        'profile_picture',
        'email',
        'password',
        'is_teamleader',
        'highest_education_level',
        'institution_and_program',
        'graduation_year',
        'finance_accounting_tools',
        'financial_project_risk_evaluation',
        'startup_financing_experience',
        'financial_forecasting',
        // frontend
        'javascript_frameworks',
        'developed_websites',
        'cross_browser_compatibility',
        'performance_optimization_approach',
        'ui_translation_example',
       // backend
       'programming_languages',
       'database_project_description',
       'api_experience',
       'security_tools',
       'open_source_projects',
       'agile_experience',
       // marketing
       'digital_marketing_campaign',
       'commercial_plan',
       'communication_strategy_effectiveness_measurement',
       'crm_experience',
    ];

    public function ideas()
    {
        return $this->hasMany(Idea::class, 'leader_id');
    }

    public function teams()
    {
        return $this->hasMany(Team::class, 'leader_id');
    }

    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class, 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
