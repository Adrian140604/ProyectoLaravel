@include('partials.navbarPartial')
    
    <section id="productos" class="py-24 container mx-auto text-center" >
        <h2 class="text-4xl font-extrabold mb-10">Nuestros Productos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-6">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <img src="Funko.png" alt="Funko Pop" class="w-full h-56 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-semibold">Funko Pops</h3>
                <p class="mt-2 text-gray-400">Figuras coleccionables de tus personajes favoritos.</p>
                <button class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Comprar</button>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <img src="videojuegos.jpg" alt="Videojuegos" class="w-full h-56 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-semibold">Videojuegos</h3>
                <p class="mt-2 text-gray-400">Explora una amplia selección de títulos para todas las plataformas.</p>
                <button class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Comprar</button>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <img src="posters.jpg" alt="Pósteres" class="w-full h-56 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-semibold">Pósteres</h3>
                <p class="mt-2 text-gray-400">Decora tu espacio con imágenes épicas y únicas.</p>
                <button class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Comprar</button>
            </div>
        </div>
    </section>
    
    <footer class="text-center py-6 bg-black mt-12">
        <p class="text-gray-400">&copy; 2025 Holandés Errante. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
