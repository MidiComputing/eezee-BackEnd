<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Exception;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Valider les champs obligatoire
        $request->validate([
            'statut'         => 'required',
            'nom_entreprise' => 'required',
            'num_entreprise' => 'required',
            'num_tvq'        => 'required',
        ]);

        try{
            //Enregistrer tous les données au table profils
            Profil::create($request->post());

            return response()->json([
                'Votre profil a été enregistré avec succés!!'
            ]);
        }catch(\Exception $e){
            error_log($e->getMessage());
            return response()->json([
                'Erreur d\'enregistrer votre profil!!'
            ],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
