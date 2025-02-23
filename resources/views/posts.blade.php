<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Annonces Objets Trouvés/Perdus</title>
</head>

<body class="min-h-screen bg-gradient-to-b from-amber-100 to-amber-200">
    <header class="bg-white shadow-md py-6 mb-8">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl font-bold text-amber-800">
                    <i class="fas fa-search mr-2"></i>
                    Objets Trouvés/Perdus
                </h1>
                <form action="/addPostForm" method="get" class="flex-shrink-0">
                    @csrf
                    <button class="bg-amber-600 hover:bg-amber-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300 flex items-center gap-2">
                        <i class="fas fa-plus"></i>
                        Nouvelle annonce
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 pb-12">
        @if($posts->isEmpty())
        <div class="text-center py-12 bg-white rounded-lg shadow-md">
            <i class="fas fa-inbox text-6xl text-gray-400 mb-4"></i>
            <p class="text-xl text-gray-600">Aucune annonce disponible pour le moment.</p>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                    <img src="{{ asset('storage/' . $post->photo) }}" 
                         alt="Photo de {{ $post->title }}" 
                         class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-amber-900 mb-3">{{ $post->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->description }}</p>
                    
                    <div class="space-y-2 text-gray-700">
                        <div class="flex items-center">
                            <i class="far fa-calendar-alt w-6"></i>
                            <span>{{ $post->date }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt w-6"></i>
                            <span>{{ $post->location }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-envelope w-6"></i>
                            <a href="mailto:{{ $post->contact_email }}" 
                               class="text-amber-600 hover:text-amber-700">
                                {{ $post->contact_email }}
                            </a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone w-6"></i>
                            <a href="tel:{{ $post->contact_phone }}" 
                               class="text-amber-600 hover:text-amber-700">
                                {{ $post->contact_phone }}
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @endif
    </main>
</body>

</html>