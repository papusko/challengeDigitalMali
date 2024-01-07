<?php

// app/Exports/UsersSheet.php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class UsersSheet implements FromCollection, WithTitle, WithHeadings
{
    protected $collection;
    protected $title;
    protected $role;

    public function __construct(Collection $collection, string $title, string $role)
    {
        $this->collection = $collection;
        $this->title = $title;
        $this->role = $role;
    }

    public function collection()
    {
        // Filtrer les données en fonction du rôle
        $filteredData = $this->collection->filter(function ($user) {
            return $user->role === $this->role;
        });

        // Mapper les données pour inclure les colonnes nécessaires en fonction du rôle
        return $filteredData->map(function ($user) {
            $data = [
                'Nom complet' => $user->fullname,
                'Adresse' => $user->address,
                'Région' => $user->region,
                'Motivation' => $user->motivation,
                'Titre' => $user->role,
                'Numéro de téléphone' => $user->phone_number,
                'Email' => $user->email,
                'Employé dans une entreprise' => $user->works_in_company,
                'Nom entreprise' => $user->company_name,
                'Description des taches' => $user->tasks_description,
                'Diplôme obtenu' => $user->highest_education_level,
                'Institution' => $user->institution_and_program,
                'Année' => $user->graduation_year,
            ];

            // Inclure des colonnes spécifiques au rôle "marketing"
            if ($this->role === 'marketing') {
                $data['campagne de marketing digital'] = $user->digital_marketing_campaign;
                $data['Nom entreprise'] = $user->commercial_plan;
                $data['Employé dans une entreprise'] = $user->communication_strategy_effectiveness_measurement	;
                $data['Nom entreprise'] = $user->crm_experience;
            }


            if ($this->role === 'financier') {
                $data['prévisions financières'] = $user->financial_forecasting;
                $data['recherche de financements'] = $user->startup_financing_experience;
                $data['risques financiers'] = $user->financial_project_risk_evaluation	;
                $data['outils de finance et de comptabilité'] = $user->finance_accounting_tools;
            }


            if ($this->role === 'backend_dev') {
                $data['langages de programmation '] = $user->programming_languages;
                $data["Implémentation d'une base de données"] = $user->database_project_description;
                $data['Expérience dans le développement API'] = $user->api_experience	;
                $data['sécurité informatique '] = $user->security_tools;
                $data['liens vers des projets '] = $user->open_source_projects	;
                $data['expérience avec les méthodologies Agile'] = $user->agile_experience;
            }


            if ($this->role === 'frontend_dev') {
                $data['frameworks JavaScript '] = $user->javascript_frameworks;
                $data['sites Web '] = $user->developed_websites;
                $data['compatibilité entre différents navigateurs et appareils '] = $user->cross_browser_compatibility	;
                $data["approche pour l'optimisation des performances"] = $user->performance_optimization_approach;
                $data['maquette de design en une interface utilisateur fonctionnelle'] = $user->ui_translation_example;
            }

            return $data;
        });
    }

    public function title(): string
    {
        return $this->title;
    }

    public function headings(): array
    {
        // Définissez les noms des colonnes ici
        $headings = [
            'Nom complet',
            'adresse',
            'Région',
            'Motivation',
            'Poste',
            'Numéro de téléphone',
            'Email',
            'Employé dans une entreprise',
            'Nom entreprise',
            'Description des taches',
            'Diplôme obtenu',
            'Institution',
            'Année'

            // Ajoutez d'autres colonnes au besoin
        ];

        // Ajoutez les colonnes spécifiques au rôle "marketing"
        if ($this->role === 'marketing') {
            // Ajoutez d'autres colonnes marketing au besoin
            $headings[] = 'Décrivez une campagne de marketing digital que vous avez gérée.';
            $headings[] = 'Décrivez un plan commercial que vous avez développé';
            $headings[] = "Comment mesureriez-vous l'efficacité d'une stratégie de communication ?";
            $headings[] = "Avez-vous de l'expérience avec les outils de CRM ? Si oui, avec quels outils ?";
            
        }

        if ($this->role === 'financier') {
            $headings[] = 'Comment établissez-vous des prévisions financières pour une nouvelle entreprise ?';
            $headings[] = "Avez-vous de l'expérience dans la recherche de financements pour des startups ? Donnez des détails.";
            $headings[] = "Comment évaluez-vous les risques financiers d'un projet ?";
            $headings[] = "Quels outils de finance et de comptabilité utilisez-vous régulièrement ?";
            
        }

        if ($this->role === 'backend_dev') {
            $headings[] = 'Quels langages de programmation serveur maîtrisez-vous ? Veuillez les énumérer.';
            $headings[] = "Décrivez un projet sur lequel vous avez travaillé qui impliquait la conception et l'implémentation d'une base de données";
            $headings[] = "Avez-vous de l'expérience dans le développement d'APIs ? Si oui, veuillez décrire cette expérience.";
            $headings[] = "Quels outils de sécurité informatique avez-vous utilisés dans vos projets ?";
            $headings[] = "Fournissez des liens vers des projets ou contributions à des projets open-source";
            $headings[] = "Expliquez votre expérience avec les méthodologies Agile.";
        }

        if ($this->role === 'frontend_dev') {
            $headings[] = 'Quels frameworks JavaScript maîtrisez-vous ? Veuillez les énumérer.';
            $headings[] = "Fournissez des exemples de sites Web que vous avez développés.";
            $headings[] = "Comment assurez-vous la compatibilité entre différents navigateurs et appareils ?";
            $headings[] = "Quelle est votre approche pour l'optimisation des performances d'une application web ?";
            $headings[] = "Partagez un exemple où vous avez traduit une maquette de design en une interface utilisateur fonctionnelle.";
        }

        return $headings;
    }
}
