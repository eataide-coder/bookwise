<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book Wise</title>
</head>
<body class ="bg-stone-900 text-stone-300">
    <header class="bg-stone-800">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-lg tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-semibold">
                <li><a href="/" class="text-orange-600">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class ="hover:underline">Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg space-y-6">
        <div class="my-4">
            <form class="w-full flex space-x-2">
                <input type="text" placeholder="O que você procura?" name="pesquisar"  
                class=" border-stone-800 border-2 rounded-md bg-stone-800 text-sm focus:outline-none px-2 py-1">               
                <button type="submit">🔍</button>
            </form>
        </div>
        <div>
            <!-- Lista de livros -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 flex gap-4">

            <div class="bg-stone-800  p-2 border-stone-800 border-2 rounded">
                <!-- Livros -->
                <div class="flex">

                    <div class="w-1/3">imagem</div>
                    <div>
                        <a href="/livro.php" class="font-semibold hover:underline">titulo</a>
                        <div class="font-italic text-xs">autor</div>
                        <div class="text-xs italic">✔️✔️✔️✔️✔️3 Avaliacoes</div>
                    </div>

                    </div>
                    <div class="text-sm">descrição</div>
                </div>
            <div class="bg-stone-800 p-2 border-stone-800 border-2 rounded">
                <!-- Livros -->
                <div class="flex">

                    <div class="w-1/3">imagem</div>
                    <div>
                        <a href="/livro.php" class="font-semibold hover:underline">titulo</a>
                        <div class="font-italic text-xs">autor</div>
                        <div class="text-xs italic">✔️✔️✔️✔️✔️3 Avaliacoes</div>
                    </div>

                    </div>
                    <div class="text-sm">descrição</div>
                </div>
            <div class="bg-stone-800 p-2 border-stone-800 border-2 rounded">
                <!-- Livros -->
                <div class="flex">

                    <div class="w-1/3">imagem</div>
                    <div>
                        <a href="/livro.php" class="font-semibold hover:underline">titulo</a>
                        <div class="font-italic text-xs">autor</div>
                        <div class="text-xs italic">✔️✔️✔️✔️✔️3 Avaliacoes</div>
                    </div>

                    </div>
                    <div class="text-sm">descrição</div>
                </div>
            </section>
        </div>
    </main>
    
</body>
</html>