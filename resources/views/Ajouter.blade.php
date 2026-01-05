<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
<div class="max-w-xl mx-auto mt-8 bg-blue-50 shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-700">Ajouter un Produit</h1>

    <form action="{{ route('produits.store') }}" method="POST" class="space-y-4">
        @csrf
        @method('POST')
        <div>
            <label for="nom_p" class="block mb-1 font-medium text-gray-600">
                Nom du Produit
            </label>
            <input type="text" id="nom_p" name="nom_p" required class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" >
        </div>

        <div>
            <label for="description_p" class="block mb-1 font-medium text-gray-600">
                Description
            </label>
            <input type="text" id="description_p" name="description_p" required class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" >
        </div>

        <div>
            <label for="prix_p" class="block mb-1 font-medium text-gray-600">
                Prix
            </label>
            <input type="number" id="prix_p" name="prix_p" required class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" >
        </div>

        <div>
            <label for="quantite" class="block mb-1 font-medium text-gray-600">
                Quantité
            </label>
            <input type="number" id="quantite" name="quantite" required class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" >
        </div>

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Ajouter Produit
        </button>
    </form>
</div>

</body>
</html>