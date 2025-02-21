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
        
        <form action="/addPostForm" class="mb-8" method="post">
            @csrf
            <button class="px-4 py-2 rounded-lg flex items-center gap-2 text-white bg-[#7B76A1] hover:bg-[#746D01] transition duration-300">
                <span class="text-xl">+</span>
                <span>Nouvelle annonce</span>
            </button>
        </form>
    </header>
    
    <main class="max-w-4xl mx-auto p-6">
        <article class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="flex gap-6">
                <div class="w-1/3">
                    <img src="/api/placeholder/300/300" alt="Object image" class="w-full h-auto rounded-lg">
                </div>
                <div class="grid grid-cols-1 gap-3 w-2/3">
                    <h4 class="text-xl font-semibold text-[#171703]">Titre de l'annonce</h4>
                    <p class="text-gray-600">Description détaillée de l'objet trouvé ou perdu...</p>
                    <div class="text-[#342f25]">
                        <p class="mb-1"><span class="font-medium">Date:</span> 21 Février 2025</p>
                        <p class="mb-1"><span class="font-medium">Lieu:</span> Paris, 75001</p>
                        <p class="mb-1"><span class="font-medium">Email:</span> contact@email.com</p>
                        <p class="mb-1"><span class="font-medium">Téléphone:</span> +33 1 23 45 67 89</p>
                    </div>
                </div>
            </div>
        </article>
    </main>
</body>
</html>