<?php include 'template/header.php'; 

?>

<!-- hero section -->
<section
    class="hero_section pt-[3rem] lg:pt-[6rem] w-full h-screen flex justify-center items-center px-6 lg:p-10 [background:var(--bg-gradient)]">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">

        <!-- LEFT CARD – GOLDEN GRADIENT BORDER -->
        <div class="border-2 border-[#c48832] rounded-lg overflow-hidden aspect-video relative">

            <div class="w-full h-full overflow-hidden relative">
                <img src="assets/images/Cover.png" alt="hero image" class="w-full h-full object-cover">

                <div class="absolute inset-0 flex items-center justify-center text-center text-slate-200 my_border left_border">
                    <div class="left_content">
                        <h1 class="text-2xl lg:text-5xl xl:text-6xl font-bold">
                            ANTIKYTHERA
                        </h1>
                        <p class="text-base lg:text-lg xl:text-xl">
                            STAY TUNED
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <!-- RIGHT CARD – LIGHT BLUE GRADIENT BORDER -->
        <div class="border-2 border-[#3b435b] rounded-lg overflow-hidden aspect-video relative">

            <canvas id="canvas1"></canvas>

            <!-- Text -->
            <a href="services" class="absolute inset-0 flex flex-col items-center justify-center text-white my_border">
                <h1 class="text-2xl lg:text-5xl xl:text-6xl font-bold">
                    AES
                </h1>
                <p class="text-base lg:text-lg xl:text-xl">
                    ANTIKYTHERA ENGINEERING SERVICES
                </p>
            </a>
            
        </div>

    </div>
</section>

<script src="assets/js/particles.js"></script>

<?php include 'template/footer.php'; ?>