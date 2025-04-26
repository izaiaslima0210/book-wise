<div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-gray-200 mb-4">Bem-vindo ao Book Wise</h1>
            <p class="text-gray-400">Aqui você pode explorar e gerenciar seus livros favoritos.</p>
            
            <div class="mt-6">
                <form method="GET" action="explorar.php" class="relative">
                    <input 
                        type="text" 
                        name="pesquisa" 
                        placeholder="Pesquisar livros..." 
                        class="w-full bg-gray-800 text-gray-300 placeholder-gray-500 rounded pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
                    />
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                        </svg>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full mx-auto px-4 py-8">
            <?php foreach ($livros as $livro): ?>
            <div class="bg-gray-800 rounded-lg shadow p-4 hover:shadow-lg transition">
                <div class="flex gap-6 items-start">
                    <div class="w-24 h-24 flex-shrink-0 overflow-hidden rounded">
                        <img src="<?=$livro['cover_image']?>" alt="<?=$livro['title']?>" class="object-cover w-full h-full" />
                    </div>
                    <div class="flex flex-col h-full">
                        <div class="flex-1">
                            <a href="livro?id=<?=$livro['id']?>" class="text-xl font-bold text-gray-300 hover:text-green-400"><?=$livro['title']?></a>
                            <p class="text-blue-500 font-medium mb-1 italic"><?=$livro['author']?></p>
                            <div class="flex items-center mb-3">
                                <?php
                                    $estrelas = $livro['rating']; // exemplo de nota
                                    for ($i = 1; $i <= 5; $i++): ?>
                                    <svg class="w-5 h-5 <?= $i <= $estrelas ? 'text-yellow-400' : 'text-gray-500' ?>" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.967c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.287-3.967a1 1 0 00-.364-1.118L2.049 9.394c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.286-3.967z" />
                                    </svg>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?= $livro['description'] ?>
                </p>
            </div>
            <?php endforeach; ?>    
        </div>