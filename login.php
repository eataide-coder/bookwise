<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link do Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-800 text-stone-300 flex justify-center items-center h-screen m-0">

    <div class="bg-stone-700 p-8 rounded-lg shadow-lg w-80">
        <h2 class="text-2xl font-semibold text-center mb-6">BookWise Login</h2>
        <form action="login_process.php" method="POST">
            <input type="text" name="username" placeholder="Usuário" class="bg-stone-700 w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            <input type="password" name="password" placeholder="Senha" class=" bg-stone-700 w-full p-3 mb-6 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Entrar</button>
        </form>
        <div class="text-center mt-4">
            <a href="#" class="text-gray-200 hover:underline">Esqueceu sua senha?</a>
        </div>
    </div>

</body>
</html>
