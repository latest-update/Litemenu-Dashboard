<x-modal.card blur fullscreen wire:model.defer="buySubscription" squared="true">
    <!-- Pricing Section -->
    <section class="relative" aria-labelledby="pricing-heading">
        <h2 id="pricing-heading" class="sr-only">Pricing</h2>

        <div class="max-w-2xl mx-auto px-4 space-y-12 sm:px-6 lg:max-w-7xl lg:space-y-0 lg:px-4 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-[#1C64F2]">Basic Package</h3>
                    <p class="mt-4 flex items-baseline text-gray-900">
                        <span class="text-5xl font-bold tracking-tight">60.000tg</span>
                        <span class="ml-1 text-xl font-semibold">/month</span>
                    </p>
                    <p class="mt-6 text-gray-500">Features included:</p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">QR code and NFC integration for seamless ordering</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">User-friendly menu site for customers</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Real-time order tracking on the admin dashboard</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Secure online payment processing</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Basic customer support</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Ideal for small restaurants or establishments looking to implement a simple and efficient food ordering system.</span>
                        </li>
                    </ul>
                </div>

                <a href="http://77.243.80.82:8088/" class="bg-gray-50 text-[#1C64F2] hover:bg-gray-200 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Get started today</a>
            </div>

            <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-[#1C64F2]">Essential Package</h3>

                    <p class="absolute top-0 py-1.5 px-4 bg-red-900 rounded-full shadow-md shadow-red-500 text-xs font-semibold uppercase tracking-wide text-white transform -translate-y-1/2">Most popular</p>
                    <p class="mt-4 flex items-baseline text-gray-900">
                        <span class="text-5xl font-bold tracking-tight">100.000tg</span>
                        <span class="ml-1 text-xl font-semibold">/month</span>
                    </p>
                    <p class="mt-6 text-gray-500">Features included:</p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">All features of the Basic Package, plus:</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Customizable menu layouts and designs</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Integration with popular payment gateways</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Enhanced order management tools</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Customer data analytics and insights</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Email and chat-based customer support</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Perfect for mid-sized restaurants that want to enhance their brand presence and gain deeper insights into customer behavior.</span>
                        </li>
                    </ul>
                </div>

                <a href="http://77.243.80.82:8088/" class="bg-[#1C64F2] text-white hover:bg-[#10172A] mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Get started today</a>
            </div>

            <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-[#1C64F2]">Premium Package</h3>
                    <p class="mt-4 flex items-baseline text-gray-900">
                        <span class="text-5xl font-bold tracking-tight">120.000tg</span>
                        <span class="ml-1 text-xl font-semibold">/month</span>
                    </p>
                    <p class="mt-6 text-gray-500">Features included:</p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">All features of the Essential Package, plus:</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Advanced customization options for the menu site</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Integration with loyalty programs and promotional campaigns</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">1-hour, dedicated support response time</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Multi-location support for restaurant chains</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">API access for seamless integration with other systems</span>
                        </li>

                        <li class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#1C64F2]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Dedicated account manager and priority customer support</span>
                        </li>
                    </ul>
                </div>

                <a href="http://77.243.80.82:8088/" class="bg-gray-50 text-[#1C64F2] hover:bg-gray-200 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Get started today</a>
            </div>
        </div>
    </section>





    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">

            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" wire:click="toMainPage" />
                <x-button primary label="I will" x-on:click="close" wire:click="toMainPage" />
            </div>
        </div>
    </x-slot>
</x-modal.card>
