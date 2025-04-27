<?php
if(empty($livro)) {
    echo "<h1 class='text-3xl font-bold text-gray-200 mb-4'>Livro não encontrado</h1>";
    die();
}
?>
<div class="container mx-auto px-4 py-8">
      <h1 class="text-3xl font-bold text-gray-200 mb-4">Detalhes do Livro</h1>
      <div class="bg-gray-800 rounded-lg shadow p-4">
        <div class="flex gap-6 items-start">
          <div class="w-24 h-24 flex-shrink-0 overflow-hidden rounded">
            <img src="<?=$livro->image?>" alt="Capa do Livro" class="object-cover w-full h-full" />
          </div>
          <div class="flex flex-col h-full">
            <div class="flex-1">
              <h2 class="text-xl font-bold text-gray-300"><?=$livro->title?></h2>
              <p class="text-blue-500 font-medium mb-1 italic"><?=$livro->author?></p>
              <div class="flex items-center mb-3">
                <?php
                $estrelas = $livro->rating; // exemplo de nota
                for ($i = 1; $i <= 5; $i++): ?>
                  <svg class="w-5 h-5 <?= $i <= $estrelas ? 'text-yellow-400' : 'text-gray-500' ?>" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.967c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.287-3.967a1 1 0 00-.364-1.118L2.049 9.394c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.286-3.967z" />
                  </svg>
                <?php endfor; ?>
              </div>
            </div>
          
            <div class="mt-4">
              <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar à Minha Estante</a>
              <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 ml-2">Marcar como Lido</a>
              <a href="#" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Remover</a>
            </div>
          </div>
        </div>
        <div class="mt-6">
          <h3 class="text-lg font-bold text-gray-300">Sinopse</h3>
          <p class="text-gray-400 mt-2">
            <?=$livro->description?>
          </p>
        </div>
        <div class="mt-6">
          <h3 class="text-lg font-bold text-gray-300">Comentários</h3>
          <div class="mt-2">
            <textarea class="w-full bg-gray-800 text-gray-300 placeholder-gray-500 rounded pl-4 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" rows="4" placeholder="Deixe seu comentário..."></textarea>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mt-2">Enviar Comentário</button>
          </div>
          <div class="mt-4">
            <h4 class="text-gray-300">Comentários Anteriores</h4>
            <div class="bg-gray-700 p-4 rounded mt-2">
              <p class="text-gray-400">"Ótimo livro! Recomendo muito!" - Usuário1</p>
            </div>
            <div class="bg-gray-700 p-4 rounded mt-2">
              <p class="text-gray-400">"Amei a história e os personagens!" - Usuário2</p>
            </div>
            <div class="bg-gray-700 p-4 rounded mt-2">
              <p class="text-gray-400">"Uma leitura envolvente e emocionante." - Usuário3</p>        
            </div>
          </div>
        </div>
      </div>
    </div>