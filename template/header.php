<?php include_once './utils/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo SITE_NAME; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="assets/favicon.ico">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

<?php
// Current page detection
$current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Homepage check
$is_home = in_array($current, ['', 'index', 'index.php']);

// If home: hide menu button completely
// If NOT home: show menu ONLY in mobile (lg:hidden)
$menu_cond = $is_home ? 'hidden' : 'lg:hidden';
?>

<!-- Navbar -->
<header class="w-full h-[110px] fixed top-0 z-50 py-4 flex justify-between items-center [background:var(--header-gradient)] shadow-xl px-6 md:px-16">

    <!-- Logo -->
    <a href="index.php" class="flex items-center space-x-2">
        <img src="assets/logo/header_logo.png" alt="Logo" class="h-20">
    </a>

    <!-- Hamburger (Mobile) -->
    <button id="menu-btn" class="<?php echo $menu_cond; ?> text-white text-2xl focus:outline-none">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Desktop CTA -->
    <a href="booking.php" class="hidden lg:block text-lg dev-btn">Book a Meeting</a>

</header>
