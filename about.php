<?php include 'template/header.php'; ?>

<?php
$time_line_array = [
'Industry Experience' => 'He has held key engineering and leadership roles across the industry, including at Cummins, Ford, and INEOS Automotive. At Ford, Vishal led multiple global engine programmes and oversaw the end-to-end delivery of advanced powertrain systems. He played a central role in strategic planning for both vehicle and engine portfolios, shaping long-term product roadmaps, aligning cross-functional teams, and guiding the integration of emerging technologies into future vehicle platforms.',

'Impact at INEOS Automotive' => 'Vishal’s career took a significant leap at INEOS Automotive, where he served as a strategic partner to Founder Sir Jim Ratcliffe. He contributed fundamentally to INEOS’s evolution into a multi-vehicle organisation and played a pivotal role in the successful global launch of the Grenadier.',

'Global Perspective & Cross-Cultural Leadership' => 'He brings a commercially focused mindset and strong cross-cultural leadership experience, with the ability to scale engineering programmes and business functions across continents. A native speaker of German, English, and Hindi, Vishal was educated in Germany and the UK while remaining closely rooted in India. His international career spans China, the USA, and Europe, covering testing, supplier development, and long-term strategic partnerships.',

'Approach to Leadership' => 'Recognised for uniting teams through shared objectives, Vishal thrives in high-pressure, high-stakes environments — a discipline reinforced by his military background.',

'Innovation & Future-Ready Execution' => 'Most recently, he led the integration of AI and agentic automation models into the development of the next-generation Grenadier, reducing software cycle times and increasing overall development efficiency.',

'Vision & Driving Philosophy' => 'Driven by engineering excellence, strategic foresight, and commercial impact, Vishal continues to build, scale, and lead teams and technologies that move industries forward.',
];
?>


<!-- SIDEBAR -->
<div id="sidebar" class="hidden lg:block fixed top-0 left-0 w-[300px] h-screen pt-[150px] px-5
    bg-[var(--primary-color)] overflow-y-auto z-10">
    <?php include 'template/sidebar.php'; ?>
</div>

<!-- MAIN CONTENT -->
<section class="ml-0 lg:ml-[300px] w-full lg:w-[calc(100%-300px)]
    min-h-screen px-6 xl:px-20 pt-[10rem] pb-16
    [background:var(--bg-gradient)] text-white">

    <!-- ABOUT SECTION -->
    <div class="pb-[5rem] grid grid-cols-1 md:grid-cols-3 gap-4 lg:grid-cols-3 lg:gap-8">

        <!-- IMAGE BLOCK -->
        <div class="left_tab" data-aos="fade-right">
            <img src="assets/images/profile_pic.png" alt="Vishal Lalwani"
                class="w-full lg:w-[320px] rounded-lg object-cover">
        </div>

        <!-- TEXT BLOCK -->
        <div class="md:col-span-2 xl:mt-10" data-aos="fade-left">
            <h2 class="text-4xl font-semibold mb-2">VISHAL LALWANI</h2>
            <p class="text-slate-100 tracking-widest text-sm font-thin mb-6">CEO and Founder Antikythera Group</p>

            <p class="leading-normal md:leading-7 font-normal text-slate-300 text-sm sm:text-base mb-4 text-justify">
                An engineer turned commercial leader and multi-patent holder in the automotive sector, known for driving innovation across electrical engineering, electrification, and advanced ICE and hybrid powertrain development — from early concept through to full vehicle launch.
                Driven by engineering excellence, strategic foresight, and commercial impact, Vishal continues to build, scale, and lead teams and technologies that move industries forward.
            </p>
        </div>

    </div>

    <!-- TIMELINE SECTION -->
    <div class="flex w-full flex-col items-start ">
        <?php foreach ($time_line_array as $key => $value) {  ?>
        <div class="group flex gap-x-6">
            <div class="relative">
                <div class="absolute left-1/2 top-0 h-full w-0.5 -translate-x-1/2 bg-[#c48832]"></div>
                <span
                    class="relative grid h-3 w-3 place-items-center rounded-full bg-slate-200 text-slate-800"></span>
            </div>
            <div class="-translate-y-1.5 pb-8">
                <h2 class="text-lg md:text-xl font-bold text-[#c48832]"><?php echo $key; ?></h2>
                <p class="mt-2 leading-[1.7] text-sm md:text-base text-slate-300 text-justify" ><?php echo $value; ?></p>
            </div>
        </div>
        <?php } ?>

    </div>


<!-- Gallery Section -->
<div class="pt-20 w-full">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="image_wrapper">
    
    <!-- Image 1 -->
    <div class="rounded-lg overflow-hidden aspect-video group">
      <img 
        src="<?php echo BASE_URL; ?>assets/images/img_1.jpg"
        alt="Gallery image showing 5 cars"
        class="w-full h-full object-cover cursor-pointer transition duration-300 group-hover:opacity-70"
        id="gallery-img"
      >
    </div>

    <!-- Image 2 -->
    <div class="rounded-lg overflow-hidden aspect-video group">
      <img 
        src="<?php echo BASE_URL; ?>assets/images/img_2.jpg"
        alt="Gallery second image"
        class="w-full h-full object-cover cursor-pointer transition duration-300 group-hover:opacity-70"
        id="gallery-img"
      >
    </div>

  </div>
</div>

<!-- Modal -->
<div 
  id="image-viewer"
  class="hidden fixed inset-0 z-[999] bg-black/90 flex items-center justify-center"
>
  <!-- Close button -->
  <span 
    class="absolute top-4 right-6 text-white text-4xl cursor-pointer hover:text-gray-400 transition"
    id="modal-close"
  >
    &times;
  </span>

  <!-- Wrapper ensures perfect centering -->
  <div class="relative flex items-center justify-center w-full h-full">
    <img 
      id="full-image"
      class="max-w-[800px] w-[80%] max-h-[90%] object-cover rounded-lg animate-zoom"
    >
  </div>
</div>






    <!-- BRAND SECTION -->
    <?php include 'template/car_brand.php'; ?>



    <!-- VIDEO SECTION -->
<div class="pb-[5rem] grid grid-cols-1 md:grid-cols-2 gap-6 w-full">

    <!-- Video 1 -->
    <div class="rounded-lg overflow-hidden aspect-video">
        <iframe 
            src="https://www.youtube.com/embed/1KEbSGob_Lk"
            class="w-full h-full"
            frameborder="0"
            allowfullscreen>
        </iframe>
    </div>

    <!-- Video 2 -->
    <div class="rounded-lg overflow-hidden aspect-video">
        <iframe 
            src="https://www.youtube.com/embed/Zxm58pdcLoQ"
            class="w-full h-full"
            frameborder="0"
            allowfullscreen>
        </iframe>
    </div>

</div>



</section>

<?php include 'template/footer.php'; ?>