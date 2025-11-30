<?php include_once './utils/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo SITE_NAME; ?></title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">

    <link rel="manifest" href="./assets/favicon/manifest.json">
    <!-- <meta name="msapplication-TileColor" content="#707278"> -->
    <meta name="msapplication-TileImage" content="./assets/favicon/ms-icon-144x144.png">
    <!-- <meta name="theme-color" content="#282f39"> -->


    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <?php
// Current page detection
$current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// cookie variables
if (isset($_COOKIE['TERMLY_COOKIE_CONSENT'])) {
    $consent = json_decode($_COOKIE['TERMLY_COOKIE_CONSENT'], true);
    define('COOKIE_CONSENT',$consent);
}


// Homepage check
$is_home = in_array($current, ['', 'index', 'index.php']);

// If home: hide menu button completely
// If NOT home: show menu ONLY in mobile (lg:hidden)
$menu_cond = $is_home ? 'hidden' : 'lg:hidden';
?>

    <!-- Navbar -->
    <header
        class="w-full h-[110px] fixed top-0 z-50 py-4 flex justify-between items-center [background:var(--header-gradient)] shadow-xl px-6 md:pr-16 md:pl-8">

        <!-- Logo -->
        <a href="index" class="flex items-center space-x-2">
            <img src="assets/logo/header_logo.png" alt="Logo" class="h-20">
        </a>

        <!-- Hamburger (Mobile) -->
        <button id="menu-btn" class="<?php echo $menu_cond; ?> text-white text-2xl focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Desktop CTA -->
        <a href="booking" class="hidden lg:block text-lg dev-btn">Book a Meeting</a>

    </header>