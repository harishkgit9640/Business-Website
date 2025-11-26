<?php include 'template/header.php'; ?>

<!-- SIDEBAR -->
<div id="sidebar" class="hidden lg:block fixed top-0 left-0 w-[300px] h-screen pt-[150px] px-5
    bg-[var(--primary-color)] overflow-y-auto z-10">
    <?php include 'template/sidebar.php'; ?>
</div>

<!-- BOOKING SECTION -->
<section id="booking"
    class="ml-0 lg:ml-[300px] w-full lg:w-[calc(100%-300px)] 
           px-8 lg:px-20 pt-[10rem] [background:var(--bg-gradient)] min-h-screen">

    <h3 class="text-center text-3xl text-white font-bold mb-10" data-aos="fade-down">
        Book a Meeting
    </h3>

<!-- Responsive Iframe Wrapper -->
<div class="relative w-full overflow-hidden rounded-lg shadow-md"
     style="padding-top: 130%;">

    <iframe 
        src="https://outlook.office.com/book/AntikytheraGroup@NETORGFT19856432.onmicrosoft.com/?ismsaljsauthenabled"
        class="absolute top-0 left-0 w-full h-full"
        style="border: 0;"
        scrolling="yes">
    </iframe>

</div>


    
</section>

<?php include 'template/footer.php'; ?>
