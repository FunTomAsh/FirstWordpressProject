<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="pl">
    <!--<link href="./src/output.css" rel="stylesheet">-->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!--<h1 class="text-3xl font-bold"> BND Light </h1>-->
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

<header class="site">
    <nav class="relative bg-transparent h-28 md:mx-auto md:container flex justify-between items-center z-40">
        <a href="<?php echo home_url(); ?>">
            <img src="http://localhost/wordpress/wp-content/uploads/2025/01/DoroGoonin.webp" 
                    alt="Lorem Ipsum Logo"
                    class="flex items-center justify-start mx-4 md:space-x-3">
        </a>

        <ul class="flex flex-row mx-1 space-x-2 md:space-x-5">
            <li><a href="#contact" class="text-sm md:text-base text-gray-400 hover:text-red-400">Lorem</a></li>
            <li><a href="#" class="text-sm md:text-base text-gray-400 hover:text-red-400">Ipsum</a></li>
            <li><a href="#" class="text-sm md:text-base text-gray-400 hover:text-red-400">Dolor</a></li>
        </ul>
    </nav>
</header>