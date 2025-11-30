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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

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
<header class="w-full h-[110px] fixed top-0 z-50 py-4 flex justify-between items-center [background:var(--header-gradient)] shadow-xl px-6 md:pr-16 md:pl-8">

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
