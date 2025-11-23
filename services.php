<?php include 'template/header.php'; ?>

<!-- SIDEBAR -->
<div id="sidebar" class="hidden lg:block fixed top-0 left-0 w-[300px] h-screen pt-[150px] px-5
    bg-[var(--primary-color)] overflow-y-auto z-10">
    <?php include 'template/sidebar.php'; ?>
</div>

<!-- SERVICE MAIN CONTENT -->
<section class="ml-0 lg:ml-[300px] w-full lg:w-[calc(100%-300px)]
    min-h-screen px-6 lg:px-20 pt-[10rem] pb-16
    [background:var(--bg-gradient)] text-white">

    <!-- Heading -->
    <div class="container text-center mx-auto w-full lg:w-[85%] mb-16">
        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-5 text-white">
            Antikythera Engineering Services
        </h3>
        <p class="text-[#c3cbd9] leading-relaxed">
            Antikythera Engineering Services partners with companies at the forefront of technology
            and innovation — providing leadership, technical expertise, and strategic insight to help
            them scale intelligently, execute with precision, and lead with purpose.
        </p>
    </div>


    <!-- MANAGEMENT SECTION -->
    <div id="management" class="container border-b-2 border-[var(--secondary-color)] pb-6 mb-10">


        <div class="flex items-end gap-4 mb-4">
            <h3 class="text-xl md:text-3xl font-semibold text-white [font-family:var(--theme-font)]">Management</h3>
            <img src="<?php echo BASE_URL; ?>assets/icons/management.png" alt="management-section" width="35"
                height="35">
        </div>

        <div class="text-[#c3cbd9] text-justify space-y-2">

            <p>
                We provide interim and strategic leadership across technology-driven industries,
                guiding companies through transformation, restructuring, or expansion.
            </p>

            <p>
                With proven executive experience at INEOS Automotive and Ford Motor Company,
                we align business and engineering strategy to ensure stability, efficiency,
                and measurable growth.
            </p>
        </div>


        <div class="hidden management-more text-[#c3cbd9] text-justify space-y-2 mt-3">

            <p>
                Antikythera offers interim and strategic leadership to organisations
                undergoing transformation or expansion.
            </p>

            <p>
                With extensive experience leading engineering and business operations at
                INEOS Automotive and Ford Motor Company, we provide executive-level support
                in roles such as interim CTO, CEO, or Head of Engineering.
            </p>

            <p>
                Our focus lies in aligning business and technology strategies, strengthening
                governance frameworks, and stabilising operations during critical growth or
                restructuring phases.
            </p>

            <p>
                We ensure that every strategic decision is anchored in technical insight
                and operational discipline.
            </p>
        </div>

        <!-- Trigger Button -->
        <button data-target="management-more"
            class="learn-more-btn flex items-center gap-2 text-base font-thin italic text-[var(--secondary-color)] mt-2">
            <span>Learn more</span>
            <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
        </button>

    </div>


    <!-- technical-section -->
    <div id="technical" class="container border-b-2 border-[var(--secondary-color)] pb-6 mb-10">

        <div class="flex items-end gap-4 mb-4">
            <h3 class="text-xl md:text-3xl font-semibold text-white [font-family:var(--theme-font)]">Technical</h3>
            <img src="<?php echo BASE_URL; ?>assets/icons/technical.png" alt="technical-section" width="35" height="35">
        </div>

        <div class="text-[#c3cbd9] space-y-2">
            <p>Our engineering services span automotive, aerospace, mobility, robotics, AI, and blockchain.</p>
            <p>From system architecture to cybersecurity, we combine traditional engineering rigour with next-generation
                intelligence.</p>
            <p>By integrating agentic AI and blockchain frameworks, we enhance efficiency, traceability, and long-term
                performance.</p>
        </div>


        <div class="hidden technical-more text-[#c3cbd9] space-y-2 mt-3">
         <p>Antikythera delivers comprehensive engineering solutions across automotive, aerospace, mobility, robotics, AI, and blockchain sectors.</p>

            <p>We support clients from concept to production, covering system architecture, electrification, cybersecurity, and functional safety (ISO 26262).</p>

            <p>By integrating agentic AI and blockchain frameworks into development processes, we enhance product intelligence, data integrity, and operational efficiency.</p>
            <p>Our experience leading global vehicle programmes ensures technical excellence, compliance, and scalability for every project.</p>
        </div>

        <!-- Trigger Button -->
        <button data-target="technical-more"
            class="learn-more-btn flex items-center gap-2 text-base font-thin italic text-[var(--secondary-color)] mt-2">
            <span>Learn more</span>
            <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
        </button>
    </div>


    <!-- Investment-section -->
    <div id="investment" class="container border-b-2 border-[var(--secondary-color)] pb-6 mb-10">

        <div class="flex items-end gap-4 mb-4">
            <h3 class="text-xl md:text-3xl font-semibold text-white [font-family:var(--theme-font)]">Investment</h3>
            <img src="<?php echo BASE_URL; ?>assets/icons/inventment.png" alt="investment-section" width="35"
                height="35">
        </div>


        <div class="text-[#c3cbd9] space-y-2">
            <p>We bridge technical understanding with financial insight, delivering expert due diligence and strategic
                evaluations for investors in deep-technology sectors.</p>
            <p>Antikythera assesses feasibility, scalability, and IP strength to identify ventures with real
                technological depth and sustainable market potential.</p>
        </div>

        <div class="hidden investment-more text-[#c3cbd9] space-y-2 mt-3">
          <p>Antikythera combines technical expertise with financial acumen to evaluate high-potential opportunities in advanced technology sectors.</p>

        <p>We conduct in-depth technical due diligence, assessing feasibility, manufacturability, scalability, and IP strength.</p>

        <p>With hands-on experience managing complex R&D budgets and supplier ecosystems, we provide investors and corporate stakeholders with clear, data-driven insights that support confident, strategic decision-making.</p>

        </div>

        <!-- Trigger -->
        <button data-target="investment-more"
            class="learn-more-btn flex items-center gap-2 text-base font-thin italic text-[var(--secondary-color)] mt-2">
            <span>Learn more</span>
            <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
        </button>
    </div>

    <!-- organisation-section -->
    <div id="growth" class="container border-b-2 border-[var(--secondary-color)] pb-6 mb-10">

        <div class="flex items-end gap-4 mb-4">
            <h3 class="text-xl md:text-3xl font-semibold text-white [font-family:var(--theme-font)]">Organisational
                Growth</h3>
            <img src="<?php echo BASE_URL; ?>assets/icons/organization.png" alt="management-section" width="35"
                height="35">
        </div>


        <div class="text-[#c3cbd9] space-y-2">
            <p>We support companies in scaling from start-up to structured, globally capable organisations.</p>
            <p>Our experience in building international teams and governance frameworks ensures that growth is
                efficient, resilient, and strategically aligned.</p>
        </div>


        <div class="hidden growth-more text-[#c3cbd9] space-y-2 mt-3">
         <p>Antikythera supports companies in scaling from early-stage ventures to structured, globally capable organisations. </p>

         <p>We collaborate with founders and leadership teams to design effective organisational architectures, define governance frameworks, and implement automated processes to sustain long-term growth. </p>

         <p>Our expertise in building international teams across Europe, the UK, and the Middle East enables us to establish systems for talent development, accountability, and leadership succession — ensuring growth that is efficient, coherent, and enduring. </p>



        </div>

        <!-- Trigger -->
        <button data-target="growth-more"
            class="learn-more-btn flex items-center gap-2 text-base font-thin italic text-[var(--secondary-color)] mt-2">
            <span>Learn more</span>
            <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
        </button>
    </div>


</section>


<?php include 'template/footer.php'; ?>