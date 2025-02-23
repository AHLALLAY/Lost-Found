<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Annonces Objets Trouvés/Perdus</title>
</head>

<body class="min-h-screen bg-[#A18900]">
    <header class="p-6 max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-[#171703]">Annonces</h2>

        <form action="/" class="mb-8">
            @csrf
            <button class="px-4 py-2 rounded-lg flex items-center gap-2 text-white bg-[#7B76A1] hover:bg-[#746D01] transition duration-300">
                <span class="text-xl"><--</span><span>Back</span>
            </button>
        </form>
    </header>

    <main class="max-w-4xl mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-bold mb-6 text-[#171703]">Créer une nouvelle annonce</h3>
            <form action="/addPost" method="POST" class="space-y-4" enctype="multipart/form-data">
                @csrf
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label class="block text-[#342f25] mb-2 font-medium">Titre</label>
                        <input type="text" name="title" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#7B76A1] focus:border-transparent transition duration-300" required>
                    </div>
                    <div class="flex-1">
                        <label class="block text-[#342f25] mb-2 font-medium">Type d'annonce</label>
                        <select name="lost_found" id="type" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#7B76A1] focus:border-transparent transition duration-300">
                            <option value="lost">Perder</option>
                            <option value="found">Trouvaille</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-[#342f25] mb-2">Description</label>
                    <textarea name="description" class="w-full p-2 border rounded-lg h-32" required></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[#342f25] mb-2">Catégorie</label>
                        <select name="category" class="w-full p-2 border rounded-lg bg-white">
                            <option value="Vétements">Vétements</option>
                            <option value="Eléctroniques">Eléctroniques</option>
                            <option value="Objets">Objets</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[#342f25] mb-2">Photo</label>
                        <input type="file" name="photo" accept="image/*" class="w-full p-2 border rounded-lg bg-white">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[#342f25] mb-2">Date</label>
                        <input type="date" name="date" class="w-full p-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-[#342f25] mb-2">Lieu</label>
                        <input type="text" name="location" class="w-full p-2 border rounded-lg" required>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[#342f25] mb-2">Email</label>
                        <input type="email" name="contact_email" class="w-full p-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-[#342f25] mb-2">Téléphone</label>
                        <input type="tel" name="contact_phone" class="w-full p-2 border rounded-lg" required>
                    </div>
                </div>

                <button type="submit" class="w-full px-4 py-2 bg-[#7B76A1] hover:bg-[#746D01] text-white rounded-lg transition duration-300">
                    Publier l'annonce
                </button>
            </form>
        </div>
    </main>
</body>

</html>