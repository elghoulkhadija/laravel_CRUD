<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
   <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
        <a href="{{ route('produits.create') }}">Ajouter produits</a>
    </button>
    <table class="min-w-full border border-gray-300 rounded-lg m-3">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 text-left font-semibold border">Nom du Produit</th>
            <th class="px-4 py-2 text-left font-semibold border">Description</th>
            <th class="px-4 py-2 text-left font-semibold border">Prix</th>
            <th class="px-4 py-2 text-left font-semibold border">Quantité</th>
            <th class="px-4 py-2 text-center font-semibold border">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($produits as $produit)
        <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">{{ $produit->nom_p }}</td>
            <td class="px-4 py-2 border">{{ $produit->description_p }}</td>
            <td class="px-4 py-2 border">{{ $produit->prix_p }}</td>
            <td class="px-4 py-2 border">{{ $produit->quantite }}</td>

            <td class="px-4 py-2 border text-center space-x-2">
                <button>
                    <a href="{{ route('produits.show', $produit->id) }}" class="px-3 py-1 font-semibold rounded bg-green-300 text-white hover:bg-green-600">
                    show
                    </a>
                </button>
                <button>
                    <a href="{{ route('produits.edit', $produit->id) }}" class="px-3 py-1 font-semibold rounded bg-amber-500 text-white hover:bg-amber-600">
                    Modifier
                    </a>
                </button>
                <form action="{{ route('produits.destroy', $produit->id) }} " method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')" type="submit" class="px-3 py-1 font-semibold rounded bg-red-500 text-white hover:bg-red-600">
                        Supprimer
                    </button>
                </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>