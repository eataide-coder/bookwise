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
        <?php foreach ($livros as $livro): ?>

            <div class="p-4 bg-stone-800 border-stone-800 border-2 rounded">

                <div class="flex">

                    <div class="w-1/3">imagems</div>
                    <div class="space-y-1">
                        <a href="/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
                        <div class="font-italic text-xs"><?= $livro->autor ?></div>
                        <div class="text-xs italic">✔️✔️✔️✔️✔️ - 3 Avaliacoes</div>
                    </div>

                </div>
                <div class="text-sm mt-2"><?= $livro->descricao ?></div>
            </div>
        <?php endforeach; ?>
    </section>
</div>