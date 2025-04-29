<div class="container mx-auto px-4 py-16 flex flex-col items-center justify-center min-h-screen">
    <h1 class="text-3xl font-bold text-gray-200 mb-4">Crie sua conta no Book Wise</h1>
    <p class="text-gray-400 mb-8">Junte-se a nós e comece a gerenciar seus livros favoritos.</p>

    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow p-8">
        <form method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-gray-300 mb-2">Nome</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    class="w-full bg-gray-700 text-gray-300 placeholder-gray-500 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="Seu nome completo"
                />
            </div>

            <div>
                <label for="email" class="block text-gray-300 mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="w-full bg-gray-700 text-gray-300 placeholder-gray-500 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="seuemail@exemplo.com"
                />
            </div>

            <div>
                <label for="password" class="block text-gray-300 mb-2">Senha</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="w-full bg-gray-700 text-gray-300 placeholder-gray-500 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="Crie uma senha"
                />
            </div>

            <div>
                <label for="confirm_password" class="block text-gray-300 mb-2">Confirmar Senha</label>
                <input 
                    type="password" 
                    id="confirm_password" 
                    name="confirm_password" 
                    required 
                    class="w-full bg-gray-700 text-gray-300 placeholder-gray-500 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="Repita sua senha"
                />
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
            >
                Registrar
            </button>
        </form>

        <p class="mt-6 text-center text-gray-400 text-sm">
            Já tem uma conta? 
            <a href="login" class="text-blue-500 hover:underline">Entrar</a>
        </p>
    </div>
</div>
