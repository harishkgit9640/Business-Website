<?php

$brands = [
    ['file' => 'ineos.svg', 'span' => 'col-span-2', 'class' => 'h-26 lg:h-48'],
    ['file' => 'ford.svg', 'span' => 'col-span-2', 'class' => 'h-26 lg:h-32'],
    ['file' => 'bmw.svg', 'span' => '', 'class' => 'h-12 md:h-16'],
    ['file' => 'mercedes.svg', 'span' => '', 'class' => 'h-12 md:h-16'],
    ['file' => 'zf.svg', 'span' => '', 'class' => 'h-12 md:h-16'],
    ['file' => 'cummins.svg', 'span' => '', 'class' => 'h-12 md:h-16 lg:20'],
    ['file' => 'continental.svg', 'span' => '', 'class' => 'h-12 md:h-24'],
    ['file' => 'siemens.svg', 'span' => 'col-span-2', 'class' => 'p-3 md:p-0 h-10'],
    ['file' => 'bosch.svg', 'span' => '', 'class' => 'h-12 md:h-24'],
];

?>

<div class="py-[5rem]">
    <div class="grid grid-cols-4 gap-px overflow-hidden rounded-lg">

        <?php foreach ($brands as $b): ?>
            <!-- bg-[#282f39] -->
            <div class="flex items-center justify-center p-2 md:p-4 <?= $b['span'] ?>">
                <img
                    src="<?= BASE_URL ?>assets/brand_logoes/<?= $b['file'] ?>"
                    alt="<?= ucfirst(pathinfo($b['file'], PATHINFO_FILENAME)) ?> logo"
                    class="<?= $b['class'] ?> w-auto object-contain"
                >
            </div>
        <?php endforeach; ?>

    </div>
</div>
