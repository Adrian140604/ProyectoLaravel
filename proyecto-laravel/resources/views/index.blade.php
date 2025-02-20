@include('partials.navbarPartial')
    
    <section id="hero" class="h-screen bg-cover bg-center flex flex-col items-center justify-center text-center px-4" style="background-image: url('imagenFondo.jpg');">
        <div class="bg-black bg-opacity-60 p-10 rounded-lg">
            <h2 class="text-5xl font-extrabold">Bienvenido a la tienda de lo prohibido</h2>
            <p class="mt-4 text-gray-300 text-lg">Funko Pops, videojuegos, posters y mucho más...</p>
            <a href="/productos" class="mt-6 inline-block bg-red-600 text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-red-700 transition">Ver Productos</a>
        </div>
    </section>
    
    @include('partials.footerPartial')
</body>
</html>