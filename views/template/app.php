<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#16181D] text-gray-500 bg-image">
    <?php include 'views/template/inc/header.php'; ?>
    <main class="mx-auto max-w-screen-lg min-h-screen">
        <?php require "views/{$view}.view.php"; ?>

</main>
    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm text-center">
            © Copyright <?= date('Y') ?>. Construído ❤️ por @izaias Jr  :)
        </div>
    </footer>
</body>
</html>