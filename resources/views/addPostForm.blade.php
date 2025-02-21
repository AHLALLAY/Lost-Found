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

        <form action="/" class="mb-8" method="post">
            @csrf
            <button class="px-4 py-2 rounded-lg flex items-center gap-2 text-white bg-[#7B76A1] hover:bg-[#746D01] transition duration-300">
                <span class="text-xl"><--</span>
                <span>Back</span>
            </button>
        </form>
    </header>

    <main class="max-w-4xl mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-bold mb-6 text-[#171703]">Créer une nouvelle annonce</h3>
            <form class="space-y-4">
                @csrf
                <div>
                    <label class="block text-[#342f25] mb-2">Titre</label>
                    <input type="text" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label class="block text-[#342f25] mb-2">Description</label>
                    <textarea class="w-full p-2 border rounded-lg h-32" required></textarea>
                </div>

                <div>
                    <label class="block text-[#342f25] mb-2">Photo</label>
                    <input type="file" accept="image/*" class="w-full p-2">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[#342f25] mb-2">Date</label>
                        <input type="date" class="w-full p-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-[#342f25] mb-2">Lieu</label>
                        <input type="text" class="w-full p-2 border rounded-lg" required>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[#342f25] mb-2">Email</label>
                        <input type="email" class="w-full p-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-[#342f25] mb-2">Téléphone</label>
                        <input type="tel" class="w-full p-2 border rounded-lg" required>
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