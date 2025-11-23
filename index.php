<?php include 'template/header.php'; ?>

<!-- hero section -->
<section
    class="hero_section pt-[8rem] lg:pt-[6rem] w-full h-screen flex justify-center items-start lg:items-center p-14 lg:p-10 [background:var(--bg-gradient)]">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">

        <!-- LEFT CARD – GOLDEN GRADIENT BORDER -->
        <div class="border-2 border-[#c48832] rounded-lg overflow-hidden aspect-video relative">

            <div class="w-full h-full overflow-hidden relative">
                <img src="assets/images/Cover.png" alt="hero image" class="w-full h-full object-cover">

                <!-- Text -->
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-slate-200 my_border left_border">
                    <span class="text-4xl lg:text-7xl font-bold drop-shadow-lg">
                        ANTIKYTHERA
                    </span>
                </div>
            </div>
        </div>


        <!-- RIGHT CARD – LIGHT BLUE GRADIENT BORDER -->
        <div class="border-2 border-[#0d64df] rounded-lg overflow-hidden aspect-video relative">

                <canvas id="canvas1"></canvas>

                <!-- Text -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white my_border">
                    <a href="services.php" title="Services" class="text-2xl lg:text-5xl font-bold mb-3">
                        AES - ANTIKYTHERA
                    </a>
                    <span
                        class="text-2xl lg:text-5xl font-bold">
                        ENGINEERING SERVICE
                    </span>
                </div>
        </div>

    </div>
</section>

<script src="assets/js/particles.js"></script>

<?php include 'template/footer.php'; ?>