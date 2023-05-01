<div class="bg-white overflow-hidden border-b">
    <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
    <div class="bg-white p-6">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="sm:flex sm:space-x-5">
                <div class="flex-shrink-0">
                    <img class="mx-auto h-20 w-20 rounded-full" src="https://cdn1.iconfinder.com/data/icons/business-company-1/500/image-512.png" alt="">
                </div>
                <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                    <p class="text-sm font-medium text-gray-600">Welcome to,</p>
                    <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $company->name }}</p>
                    <p class="text-sm font-medium text-gray-600">{{ $company->address }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
