    <div
        class="fixed inset-0 bg-black/50 p-4 flex items-center justify-center cookie-consent-modal hidden opacity-0 z-[9999]">

        <div class="bg-white w-full max-w-4xl rounded-lg shadow-lg p-6 relative overflow-y-auto max-h-[90vh]">

            <!-- Close button -->
            <button class="cookie-close absolute top-4 right-4 text-3xl leading-none hover:text-gray-500">
                &times;
            </button>
            <h2 class="text-xl font-semibold mb-4">Preferences</h2>

            <p class="text-sm text-gray-700 mb-4 leading-relaxed">
                We use different types of cookies to optimize your experience on our website. Click on the categories
                below to learn more about their purposes. You may choose which types of cookies to allow and can change
                your preferences at any time. The choices you make regarding the Purposes and Vendors listed in this
                notice are saved in local storage under the key TERMLY_COOKIE_CONSENT for a maximum duration of 12
                months. Remember that disabling cookies may affect your experience on the website. You can learn more
                about how we use cookies by visiting our <a href="#"
                    class="text-[#282f39] font-semibold hover:underline">Cookie Policy</a> and <a href="#"
                    class="text-[#282f39] font-semibold hover:underline">Privacy Policy</a>.
            </p>


            <!-- Necessary Cookies -->
            <div class="border-t py-4">
                <label for="necessary" class="cookie-row center cursor-pointer">
                    <div class="input-box">
                        <input id="necessary" type="checkbox" class="cookieOpt" value="necessary" data-key="necessary"
                            disabled />
                    </div>
                    <div class="cookie-text">
                        <div class="font-semibold">Strictly Necessary Cookies</div>
                        <p class="text-gray-600 text-sm mt-1">These cookies are necessary to the core functionality of
                            our website and some of its features, such as access to secure areas.</p>
                    </div>
                </label>
            </div>

            <!-- Functional Cookies -->
            <div class="border-t py-4">
                <label for="functional" class="cookie-row center cursor-pointer">
                    <div class="input-box">
                        <input id="functional" type="checkbox" class="cookieOpt" value="functional"
                            data-key="functional" />
                    </div>
                    <div class="cookie-text">
                        <div class="font-semibold">Functional Cookies</div>
                        <p class="text-gray-600 text-sm mt-1">These cookies are used to enhance the performance and
                            functionality of our websites but are nonessential to their use. However, without these
                            cookies, certain functionality (like videos) may become unavailable.</p>
                    </div>
                </label>
            </div>

            <!-- Analytics Cookies -->
            <div class="border-t py-4">
                <label for="analytics" class="cookie-row center cursor-pointer">
                    <div class="input-box">

                        <input id="analytics" type="checkbox" class="cookieOpt" value="analytics"
                            data-key="analytics" />
                    </div>
                    <div class="cookie-text">
                        <div class="font-semibold">Analytics and Customization Cookies</div>
                        <p class="text-gray-600 text-sm mt-1">These cookies collect information that can help us
                            understand how our websites are being used. This information can also be used to measure
                            effectiveness in our marketing campaigns or to curate a personalized site experience for
                            you.</p>
                    </div>
                </label>
            </div>

            <!-- Marketing Cookies -->
            <div class="border-t py-4">
                <label for="marketing" class="cookie-row center cursor-pointer">
                    <div class="input-box">

                        <input id="marketing" type="checkbox" class="cookieOpt" value="marketing"
                            data-key="marketing" />
                    </div>
                    <div class="cookie-text">
                        <div class="font-semibold">Advertising Cookies</div>
                        <p class="text-gray-600 text-sm mt-1">These cookies are used to deliver advertising that is more
                            relevant to you and your interests.</p>
                    </div>
                </label>
            </div>



            <!-- Buttons -->
            <div class="border-t mt-4 pt-4 flex justify-end">
                <button class="decline-all px-6 py-2 text-white rounded" style="background:#282f39;">
                    Decline All
                </button>
                <button class="allow-all ml-3 px-6 py-2 text-white rounded" style="background:#c48832;">
                    Allow All
                </button>

            </div>
        </div>