<main class="relative">
    <div class="bg-white">
        <div class="divide-y divide-gray-200 h-screen lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
            <aside class="py-6 lg:col-span-2">
                <nav class="space-y-1">
                    <x-common.sidebar.setting-item name="Privacy" icon="lock-closed" :$currentPage />
                    <x-common.sidebar.setting-item name="Password" icon="key" :$currentPage />
                    <x-common.sidebar.setting-item name="Notification" icon="bell" :$currentPage />
                    <x-common.sidebar.setting-item name="Billing" icon="credit-card" :$currentPage />
                    <x-common.sidebar.setting-item name="Integrations" icon="view-grid-add" :$currentPage />
                </nav>
            </aside>

            @livewire('dashboard.pages.settings.' . strtolower($currentPage), key(time()))
        </div>
    </div>
</main>
