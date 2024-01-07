@extends('admin.dashboard')
@section('contenu')
<div class="container">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
        <div class="profile-section">
            <h2>Informations Personnelles</h2>
            <p><strong>Nom :</strong> {{$postulant->fullname}}</p>
            <p><strong>Email :</strong> {{$postulant->email}}</p>
            <p><strong>Rôle :</strong> {{$postulant->role}}</p>
            <!-- Autres informations personnelles -->
        </div>

        
        <div class="responses-section">
    <h2>Réponses de l'Utilisateur</h2>
    <div class="responses-container">
        @if($postulant->role == 'backend_dev')
            <!-- Afficher les réponses pour les utilisateurs financiers -->
            <div class="response">
                <p>Question : Quels langages de programmation serveur maîtrisez-vous ? Veuillez les énumérer</p>
                <p>Réponse: {{$postulant->programming_languages}}</p>
            </div>
            <div class="response">
                <p>Question : Décrivez un projet sur lequel vous avez travaillé qui impliquait la conception et l'implémentation d'une base de données.</p>
                <p>Réponse: {{$postulant->database_project_description}}</p>
            </div>
            <div class="response">
                <p>Question : Avez-vous de l'expérience dans le développement d'APIs ? Si oui, veuillez décrire cette expérience.</p>
                <p>Réponse: {{$postulant->api_experience}}</p>
            </div>
            <div class="response">
                <p>Question : Quels outils de sécurité informatique avez-vous utilisés dans vos projets ?</p>
                <p>Réponse: {{$postulant->security_tools}}</p>
            </div>
            <div class="response">
                <p>Question :	Fournissez des liens vers des projets ou contributions à des projets open-source</p>
                <p>Réponse: {{$postulant->open_source_projects}}</p>
            </div>
            <div class="response">
                <p>Question : Expliquez votre expérience avec les méthodologies Agile.</p>
                <p>Réponse: {{$postulant->agile_experience}}</p>
            </div>
            <!-- Autres réponses financières -->
        @elseif($postulant->role == 'frontend_dev')
            <!-- Afficher les réponses pour les utilisateurs marketing -->
            <div class="response">
                <p>Question : Quels frameworks JavaScript maîtrisez-vous ? Veuillez les énumérer.</p>
                <p>Réponse: {{$postulant->javascript_frameworks}}</p>
            </div>
            <div class="response">
                <p>Question: Fournissez des exemples de sites Web que vous avez développés.</p>
                <p>Réponse: {{$postulant->developed_websites}}</p>
            </div>
            <div class="response">
                <p>Question : Comment assurez-vous la compatibilité entre différents navigateurs et appareils ?</p>
                <p>Réponse: {{$postulant->cross_browser_compatibility}}</p>
            </div>
            <div class="response">
                <p>Question : Quelle est votre approche pour l'optimisation des performances d'une application web ?</p>
                <p>Réponse: {{$postulant->performance_optimization_approach}}</p>
            </div>
            <div class="response">
                <p>Question : Partagez un exemple où vous avez traduit une maquette de design en une interface utilisateur fonctionnelle</p>
                <p>Réponse: {{$postulant->ui_translation_example}}</p>
            </div>
            <!-- Autres réponses marketing -->
            @elseif($postulant->role == 'financier')
            <!-- Afficher les réponses pour les utilisateurs marketing -->
            <div class="response">
                <p>Question 1: Comment établissez-vous des prévisions financières pour une nouvelle entreprise ?</p>
                <p>Réponse: {{$postulant->financial_forecasting}}</p>
            </div>
            <div class="response">
                <p>Question 1: Avez-vous de l'expérience dans la recherche de financements pour des startups ? Donnez des détails</p>
                <p>Réponse: {{$postulant->startup_financing_experience}}</p>
            </div>
            <div class="response">
                <p>Question 1: Comment évaluez-vous les risques financiers d'un projet ?</p>
                <p>Réponse: {{$postulant->financial_project_risk_evaluation}}</p>
            </div>
            <div class="response">
                <p>Question 1: Quels outils de finance et de comptabilité utilisez-vous régulièrement ?</p>
                <p>Réponse: {{$postulant->finance_accounting_tools}}</p>
            </div>


            @elseif($postulant->role == 'marketing')
            <!-- Afficher les réponses pour les utilisateurs marketing -->
            <div class="response">
                <p>Question 1: Décrivez une campagne de marketing digital que vous avez gérée.</p>
                <p>Réponse: {{$postulant->digital_marketing_campaign}}</p>
            </div>
            <div class="response">
                <p>Question 1: Décrivez un plan commercial que vous avez développé</p>
                <p>Réponse: {{$postulant->commercial_plan}}</p>
            </div>
            <div class="response">
                <p>Question 1: Comment mesureriez-vous l'efficacité d'une stratégie de communication ?</p>
                <p>Réponse: {{$postulant->communication_strategy_effectiveness_measurement}}</p>
            </div>
            <div class="response">
                <p>Question 1:Avez-vous de l'expérience avec les outils de CRM ? Si oui, avec quels outils ?</p>
                <p>Réponse: {{$postulant->crm_experience}}</p>
            </div>
        @endif
    </div>
</div>

            @if(Auth::user()->role === 'admin')
                                                @if($postulant->is_active)
                                                    <button class="btn btn-secondary disabled">Candidature validée</button></td>
                                                @else
                                                    <a href="{{ route('user.activate', $postulant->id) }}" class="btn btn-success">Valider candidature</a>
                                                @endif
            @endif
            <a href="{{ url('/admin-dashboard') }}" class="btn btn-primary">Retour sur la liste des candidats </a>


    </div>
    @endsection