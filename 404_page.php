<?php include 'template/header.php'; ?>

<!-- 404 PAGE -->
<section class="min-h-screen flex justify-center items-center px-6 text-[#282f39] relative overflow-hidden">

    <!-- LARGE FADED 404 BACKGROUND -->
    <h1 class="absolute text-[50vw] font-extrabold text-slate-100 select-none z-0">
        404
    </h1>

    <!-- FOREGROUND CONTENT -->
    <div class="relative z-10 text-center max-w-2xl">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">
            Page Not Found
        </h2>

        <p class="text-lg md:text-xl mb-6">
            The page you're looking for doesn’t exist or may have been moved.
        </p>

        <a href="index" class="text-lg dev-btn inline-block">
            Go Back Home
        </a>
    </div>

</section>

<?php include 'template/footer.php'; ?>
