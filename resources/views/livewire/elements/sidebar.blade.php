<div class="bg-white w-64 border-r shadow-sm z-16 max-lg:hidden">
    @livewire('dashboard.sidebar.role.' . strtolower(auth()->user()->getRoleNames()[0] ?? 'guest'))
</div>
