<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }

    public function showPostForm()
    {
        return view('addPostForm');
    }

    public function addPost(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'lost_found' => 'required|string', // Correspond au nom dans le formulaire
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string|max:20',
        ]);

        // Gestion de l'upload de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $photoPath;
        }

        // Création du post
        Post::create($validatedData);

        // Redirection
        return redirect('/')->with('success', 'Annonce créée avec succès !');
    }
}
