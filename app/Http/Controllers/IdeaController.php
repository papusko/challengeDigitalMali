<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Idea;



class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ideas = Idea::all();
        return view('ideas.list', compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255']
        ]);

        if($validated){
            $idea = Idea::create(
                [
                    'title'=>$request['title'],
                    'description'=>$request['description'],
                    'leader_id' => Auth::id(),
                ]
                );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idea = Idea::findOrFail($id);
        return view('ideas.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idea = Idea::findOrFail($id);
        return view('ideas.edit', compact('idea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);
    
        Idea::whereId($id)->update($validatedData);
    
        return redirect('/idea')->with('success', 'Votre proposition a été mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idea = Idea::findOrFail($id);
        $idea->delete();

        return redirect('/idea')->with('success', 'proposition supprimer avec succèss');
    }

    /**
     * Validate the specified idea.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function validateIdea($id)
    {
        // Récupérer l'utilisateur actuellement authentifié
        $user = Auth::user();

        // Vérifier si l'utilisateur a le rôle "admin"
        if ($user->role !== 'admin') {
            return redirect()->back()->with('error', 'Vous n\'avez pas les droits pour valider une proposition.');
        }

        // Récupérer l'idée à valider
        $idea = Idea::findOrFail($id);

        // Mettre à jour le champ is_validated à true
        $idea->update(['is_validated' => true]);

        // Récupérer l'utilisateur qui a créé la proposition
        $leader = User::find($idea->leader_id);

        // Mettre à jour le champ is_teamleader à true
        if ($leader) {
            $leader->update(['is_teamleader' => true]);
        }

        return redirect()->back()->with('success', 'La proposition a été validée avec succès.');
    }
}
