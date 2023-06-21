<x-modal.card blur fullscreen wire:model.defer="buySubscription" squared="true">
    <!-- Pricing Section -->
    <section class="relative" aria-labelledby="pricing-heading">
        <h2 id="pricing-heading" class="sr-only">Pricing</h2>

        <!-- Tiers -->
        <div class="max-w-2xl mx-auto px-4 space-y-12 sm:px-6 lg:max-w-7xl lg:space-y-0 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-900">Freelancer</h3>
                    <p class="mt-4 flex items-baseline text-gray-900">
                        <span class="text-5xl font-extrabold tracking-tight">$24</span>
                        <span class="ml-1 text-xl font-semibold">/month</span>
                    </p>
                    <p class="mt-6 text-gray-500">The essentials to provide your best work for clients.</p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">5 products</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Up to 1,000 subscribers</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Basic analytics</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">48-hour support response time</span>
                        </li>
                    </ul>
                </div>

                <a href="#" class="bg-rose-50 text-rose-700 hover:bg-rose-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Monthly billing</a>
            </div>

            <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-900">Startup</h3>

                    <p class="absolute top-0 py-1.5 px-4 bg-rose-500 rounded-full text-xs font-semibold uppercase tracking-wide text-white transform -translate-y-1/2">Most popular</p>
                    <p class="mt-4 flex items-baseline text-gray-900">
                        <span class="text-5xl font-extrabold tracking-tight">$32</span>
                        <span class="ml-1 text-xl font-semibold">/month</span>
                    </p>
                    <p class="mt-6 text-gray-500">A plan that scales with your rapidly growing business.</p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">25 products</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Up to 10,000 subscribers</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Advanced analytics</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">24-hour support response time</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Marketing automations</span>
                        </li>
                    </ul>
                </div>

                <a href="#" class="bg-rose-500 text-white hover:bg-rose-600 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Monthly billing</a>
            </div>

            <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-900">Enterprise</h3>
                    <p class="mt-4 flex items-baseline text-gray-900">
                        <span class="text-5xl font-extrabold tracking-tight">$48</span>
                        <span class="ml-1 text-xl font-semibold">/month</span>
                    </p>
                    <p class="mt-6 text-gray-500">Dedicated support and infrastructure for your company.</p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited products</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited subscribers</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Advanced analytics</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">1-hour, dedicated support response time</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="flex-shrink-0 w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-gray-500">Marketing automations</span>
                        </li>

                    </ul>
                </div>

                <a href="#" class="bg-rose-50 text-rose-700 hover:bg-rose-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Monthly billing</a>
            </div>
        </div>
    </section>





    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">

            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="I will" x-on:click="close"  />
            </div>
        </div>
    </x-slot>
</x-modal.card>
