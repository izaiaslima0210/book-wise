<div class="container mx-auto px-4 py-16 flex flex-col items-center justify-center min-h-screen">
    <h1 class="text-3xl font-bold text-gray-200 mb-4">Login no Book Wise</h1>
    <p class="text-gray-400 mb-8">Acesse sua conta para explorar seus livros favoritos.</p>

    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow p-8">
        <form method="POST" class="space-y-6">
            <div>
                <label for="email" class="block text-gray-300 mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    value="<?= $_REQUEST['email'] ?? '' ?>"
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
                    placeholder="Sua senha"
                />
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember" 
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                    />
                    <label for="remember" class="ml-2 block text-sm text-gray-400">Lembrar-me</label>
                </div>

                <a href="esqueci-senha" class="text-sm text-blue-500 hover:underline">Esqueceu a senha?</a>
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
            >
                Entrar
            </button>
        </form>

        <p class="mt-6 text-center text-gray-400 text-sm">
            Não tem uma conta? 
            <a href="registrar" class="text-blue-500 hover:underline">Registre-se</a>
        </p>
    </div>
</div>
