<?php
// ---------------------------------------------
// Page Title Builder
// ---------------------------------------------
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$current = basename($path);

// Normalize landing page
if ($current === '' || $current === 'index' || $current === 'index.php') {
    $pageTitle = 'Home';
} else {
    // Remove extension
    $pageName = pathinfo($current, PATHINFO_FILENAME);

    // Format title cleanly
    $pageTitle = ucwords(str_replace(['-', '_'], ' ', $pageName));
}

// Define dynamic site name
define('SITE_NAME', 'Antikythera Group | ' . $pageTitle);


// ---------------------------------------------
// Base URL (Auto-detect option for future use)
// ---------------------------------------------
// define('BASE_URL', 'https://www.antikythera-group.io/');
define('BASE_URL', 'http://localhost/website/basic_website/');


// ---------------------------------------------
// Booking URL
// ---------------------------------------------
define('BOOKING_URL', 'https://outlook.office365.com/owa/calendar/AntikytheraGroup@NETORGFT19856432.onmicrosoft.com/bookings/');


// ---------------------------------------------
// Menu
// ---------------------------------------------
define('MENU_ARRAY', [
    'services' => ['Management', 'Technical', 'Investment', 'Growth'],
    'booking'  => 'Book a Meeting',
    'about'    => 'About Antikythera',
]);

?>
