<?= $livro->titulo?>

<div class="bg-stone-800 p-2 border-stone-800 border-2 rounded">
    <div class="flex">
        <div class="w-1/3">imagems</div>
        <div class="space-y-1">
            <a href="/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
            <div class="font-italic text-xs"><?= $livro->autor ?></div>
            <div class="text-xs italic">✔️✔️✔️✔️✔️3 Avaliacoes</div>
        </div>
    </div>
    <div class="text-sm mt-2"><?= $livro->descricao ?></div>
</div>