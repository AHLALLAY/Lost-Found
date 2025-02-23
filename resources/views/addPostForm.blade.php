<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Créer une annonce - Objets Trouvés/Perdus</title>
</head>

<body class="min-h-screen bg-gradient-to-b from-amber-100 to-amber-200">
    <header class="bg-white shadow-md py-4 mb-6">
        <div class="max-w-4xl mx-auto px-4">
            <div class="flex items-center gap-4">
                <form action="/">
                    @csrf
                    <button class="bg-amber-600 hover:bg-amber-700 text-white font-semibold px-4 py-2 rounded-lg transition duration-300 flex items-center gap-2">
                        <i class="fas fa-arrow-left"></i>
                        Retour
                    </button>
                </form>
                <h1 class="text-2xl font-bold text-amber-800">Nouvelle Annonce</h1>
            </div>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 pb-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <form action="/addPost" method="POST" class="space-y-4" enctype="multipart/form-data">
                @csrf
                <div class="flex gap-4">
                    <div class="flex-1">
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Titre</label>
                        <input type="text" name="title" 
                               class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 text-sm" 
                               required>
                    </div>
                    <div class="flex-1">
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Type d'annonce</label>
                        <select name="lost_found" id="type" 
                                class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 bg-white text-sm">
                            <option value="lost">Perdu</option>
                            <option value="found">Trouvé</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-amber-900 mb-1 text-sm font-medium">Description</label>
                    <textarea name="description" 
                              class="w-full p-2 border border-amber-200 rounded-lg h-24 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 text-sm" 
                              required></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Catégorie</label>
                        <select name="category" 
                                class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 bg-white text-sm">
                            <option value="Vêtements">Vêtements</option>
                            <option value="Électroniques">Électroniques</option>
                            <option value="Objets">Objets</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Photo</label>
                        <div class="relative">
                            <input type="file" name="photo" accept="image/*" 
                                   class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 bg-white text-sm">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Date</label>
                        <input type="date" name="date" 
                               class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 text-sm" 
                               required>
                    </div>
                    <div>
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Lieu</label>
                        <input type="text" name="location" 
                               class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 text-sm" 
                               required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Email</label>
                        <input type="email" name="contact_email" 
                               class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 text-sm" 
                               required>
                    </div>
                    <div>
                        <label class="block text-amber-900 mb-1 text-sm font-medium">Téléphone</label>
                        <input type="tel" name="contact_phone" 
                               class="w-full p-2 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-300 text-sm" 
                               required>
                    </div>
                </div>

                <button type="submit" 
                        class="w-full px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-lg transition duration-300 flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-paper-plane"></i>
                    Publier l'annonce
                </button>
            </form>
        </div>
    </main>
</body>

</html>