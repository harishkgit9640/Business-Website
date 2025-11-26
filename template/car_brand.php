<?php

$brands = [
    ['file' => 'ineos.jpg', 'span' => 'lg:col-span-2', 'class' => 'h-26 lg:h-32 mix-blend-screen'],
    ['file' => 'ford.svg', 'span' => 'lg:col-span-2', 'class' => 'h-16 md:h-20 lg:h-24'],
    ['file' => 'bmw.svg', 'span' => '', 'class' => 'h-16 md:h-20 lg:h-24'],
    ['file' => 'mercedes.svg', 'span' => '', 'class' => 'h-16 md:h-20 lg:h-24'],
    ['file' => 'zf.svg', 'span' => '', 'class' => 'h-16 md:h-20 lg:h-24'],
    ['file' => 'bosch.svg', 'span' => '', 'class' => 'h-16 md:h-20 lg:h-24'],
    // ['file' => 'cummins.svg', 'span' => '', 'class' => 'h-24 lg:h-28'],
    ['file' => 'continental.svg', 'span' => 'lg:col-span-2', 'class' => 'h-16 md:h-20'],
    ['file' => 'siemens.svg', 'span' => 'lg:col-span-2', 'class' => 'h-16 md:h-20'],
];

?>

<div class="py-[5rem]">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-1 overflow-hidden rounded-lg">

        <?php foreach ($brands as $b): ?>
            <div class="flex items-center justify-center p-4 <?= $b['span'] ?>">
                <img
                    src="<?= BASE_URL ?>assets/brand_logoes/<?= $b['file'] ?>"
                    alt="<?= ucfirst(pathinfo($b['file'], PATHINFO_FILENAME)) ?> logo"
                    class="<?= $b['class'] ?> w-auto object-contain"
                >
            </div>
        <?php endforeach; ?>

    </div>
</div>
