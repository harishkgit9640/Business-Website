<div class="w-full max-w-[300px]">

    <div class="w-full h-max rounded p-3">
        <ul class="flex flex-col gap-y-4 min-w-60">

            <?php    foreach (MENU_ARRAY as $key => $main_menu) { 
                $current_page = basename($_SERVER['REQUEST_URI']);

                if (is_array($main_menu) && !empty($main_menu)) {
                        $label = str_replace('_', ' ', ucfirst($key));
                ?>

            <li>
                <div data-toggle="collapse" data-target="#servicesList" aria-expanded="false"
                    aria-controls="servicesList"
                    class="flex items-center justify-between min-w-60 cursor-pointer py-1.5 px-2.5 rounded-md align-middle transition-all duration-300 ease-in text-slate-300 hover:text-slate-100 hover:bg-[#c48832] nav_link <?php echo ($current_page == strtolower($key).'.php') ? 'active' : ''; ?>">
                    <!-- <span class="text-lg flex items-center">Services</span>  -->
                      <a href="<?php echo strtolower($key).'.php'; ?>" class="text-lg grid place-items-center shrink-0 ">
                    <?php echo $label; ?>
                </a>
                    <span data-icon
                        class="grid place-items-center shrink-0 transition-transform duration-300 ease-in-out">
                        <svg width="2em" height="2em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" color="currentColor"
                            class="h-4 w-4 stroke-[1.5] dark:stroke-slate-300">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>

                    </span>
                </div>
                <div class="overflow-hidden transition-[max-height] duration-300 ease-in-out max-h-0"
                    id="servicesList">
                    <ul class="flex flex-col gap-3 min-w-60">

                        <?php 
                        foreach ($main_menu as $value) { 
                              $sub_label = str_replace('_', ' ', ucfirst($value));
                            $page_url = strtolower($value);
                    ?>
                        <li
                            class="pl-10 flex items-center cursor-pointer py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in bg-transparent text-slate-300 hover:text-slate-100 hover:bg-[#c48832] sub_nav_link">
                           <a href="services.php#<?php echo $page_url; ?>" class="text-lg grid place-items-center shrink-0"> <?php echo $sub_label; ?>
                            </a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
            </li>
            <?php } else {
                        $label = str_replace('_', ' ', ucfirst($main_menu));
                        $page_url = BASE_URL . strtolower($key) . '.php';
                        ?>

            <li
                class="flex items-center py-1.5 px-2.5 rounded-md align-middle transition-all duration-300 ease-in aria-disabled:opacity-50 bg-transparent text-slate-300 hover:text-slate-100 hover:bg-[#c48832] nav_link <?php echo ($current_page == strtolower($key).'.php') ? 'active' : ''; ?> ">
                <a href="<?php echo $page_url; ?>" class="text-lg grid place-items-center shrink-0 ">
                    <?php echo $label; ?>
                </a>

            </li>
            <?php } } ?>


        </ul>
    </div>



</div>