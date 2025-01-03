<?php

require_once "dados.php";
$id = $_REQUEST["id"];

$filtrado = array_filter($liuvos, function ($livro) use ($id) {
    return $livro["id"] == $id;
});

$livro = array_pop($filtrado);

?>

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
    
      <div class="bg-stone-800 p-2 border-stone-800 border-2 rounded">                 
                <div class="flex">
                    <div class="w-1/3">imagems</div>
                    <div class="space-y-1">
                        <a href="/livro.php?id=<?=$livro["id"] ?>" class="font-semibold hover:underline"><?= $livro["titulo"] ?></a>
                        <div class="font-italic text-xs"><?= $livro["autor"] ?></div>
                        <div class="text-xs italic">✔️✔️✔️✔️✔️3 Avaliacoes</div>
                    </div>

                    </div>
                    <div class="text-sm mt-2"><?=$livro["descricao"] ?></div>
                </div>
    </main>
    
</body>
</html>