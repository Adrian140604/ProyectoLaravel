@include('partials.navbarPartial')

<body class="min-h-screen flex flex-col">
    <section id="productos" class="py-24 container mx-auto text-center flex-grow">
        <h2 class="text-4xl font-extrabold mb-10">Nuestros Productos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-6">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <img src="Funko.png" alt="Funko Pop" class="w-full h-auto max-h-56 object-contain rounded-md">
                <h3 class="mt-4 text-2xl font-semibold">Coleccionables</h3>
                <p class="mt-2 text-gray-400">Figuras coleccionables de tus personajes favoritos.</p>
                <button class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Comprar</button>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <img src="EldenRing.jpg" alt="Videojuegos" class="w-full h-auto max-h-56 object-contain rounded-md">
                <h3 class="mt-4 text-2xl font-semibold">Videojuegos</h3>
                <p class="mt-2 text-gray-400">Explora una amplia selección de títulos para todas las plataformas.</p>
                <button class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Comprar</button>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <img src="poster.jpg" alt="Pósteres" class="w-full h-auto max-h-56 object-contain rounded-md">
                <h3 class="mt-4 text-2xl font-semibold">Pósteres</h3>
                <p class="mt-2 text-gray-400">Decora tu espacio con imágenes épicas y únicas.</p>
                <button class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Comprar</button>
            </div>
        </div>
    </section>

    @include('partials.footerPartial')

</body>
</html>
