<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du produit</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-gray-700">
            Détails du Produit
        </h1>
        <div class="space-y-3">
            <p><span class="font-semibold">Nom :</span> {{ $produits->nom_p }}</p>
            <p><span class="font-semibold">Description :</span> {{ $produits->description_p }}</p>
            <p><span class="font-semibold">Prix :</span> {{ $produits->prix_p }} DH</p>
            <p><span class="font-semibold">Quantité :</span> {{ $produits->quantite }}</p>
        </div>

        <a href="{{ route('produits.index') }}"
           class="inline-block mt-6 bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800">
            Retour
        </a>
    </div>

</body>
</html>
