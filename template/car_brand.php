<div class="py-[5rem]">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-1 overflow-hidden rounded-lg">

        <?php foreach (CARS as $brand): ?>
            <div class="flex items-center justify-center p-4 aspect-video bg-gray-700">
                <img 
                    src="<?php echo BASE_URL; ?>assets/brand_logoes/<?php echo $brand; ?>.svg"
                    alt="<?php echo ucfirst($brand); ?> logo"
                    class="h-16 md:h-20 lg:h-24 w-auto object-contain"
                >
            </div>
        <?php endforeach; ?>

    </div>
</div>
