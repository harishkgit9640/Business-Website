<div id="cookieModal" class="fixed inset-0 flex items-center justify-center bg-black/50 p-4 z-[99999]">
    <div class="bg-white w-full max-w-2xl rounded-lg shadow-lg p-6 relative overflow-y-auto max-h-[90vh]">

        <!-- Close button -->
        <button id="cookieClose" class="absolute top-4 right-4 text-3xl leading-none hover:text-gray-500">&times;</button>

        <h2 class="text-xl font-semibold mb-4">Preferences</h2>

        <p class="text-sm text-gray-700 mb-4 leading-relaxed">
            We use different types of cookies to optimize your experience…
        </p>

        <!-- Essential Cookies -->
        <div class="border-t py-4">
            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" checked disabled class="mt-1" />
                <div>
                    <div class="font-semibold">Essential Cookies (2)</div>
                    <p class="text-gray-600 text-sm mt-1">These cookies are necessary…</p>
                </div>
            </label>
        </div>

        <!-- Performance Cookies -->
        <div class="border-t py-4">
            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" class="mt-1 cookieOpt" data-key="functional" />
                <div>
                    <div class="font-semibold">Performance and Functionality Cookies (0)</div>
                    <p class="text-gray-600 text-sm mt-1">These cookies are used…</p>
                </div>
            </label>
        </div>

        <!-- Analytics Cookies -->
        <div class="border-t py-4">
            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" class="mt-1 cookieOpt" data-key="analytics" />
                <div>
                    <div class="font-semibold">Analytics and Customization Cookies (3)</div>
                    <p class="text-gray-600 text-sm mt-1">These cookies collect…</p>
                </div>
            </label>
        </div>

        <!-- Ads Cookies -->
        <div class="border-t py-4">
            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" class="mt-1 cookieOpt" data-key="marketing" />
                <div>
                    <div class="font-semibold">Advertising Cookies (0)</div>
                    <p class="text-gray-600 text-sm mt-1">These cookies are used…</p>
                </div>
            </label>
        </div>

        <!-- Buttons -->
        <div class="border-t mt-4 pt-4 flex justify-between">
            <button id="cookieDecline" class="px-6 py-2 text-white rounded" style="background:#282f39;">Decline All</button>
            <button id="cookieAllow" class="px-6 py-2 text-white rounded" style="background:#282f39;">Allow All</button>
        </div>

    </div>
</div>
