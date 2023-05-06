<form class="divide-y divide-gray-200 lg:col-span-10">
    <!-- Privacy section -->
    <div class="pt-6 divide-y divide-gray-200">
        <div class="px-4 sm:px-6">
            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Privacy</h2>
                <p class="mt-1 text-sm text-gray-500">Ornare eu a volutpat eget vulputate. Fringilla commodo amet.</p>
            </div>
            <ul role="list" class="mt-2 divide-y divide-gray-200">
                <li class="py-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">Available to hire</p>
                        <p class="text-sm text-gray-500" id="privacy-option-1-description">Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.</p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <x-toggle lg wire:model.defer="hiring" />
                </li>
                <li class="py-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">Make account private</p>
                        <p class="text-sm text-gray-500" id="privacy-option-2-description">Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.</p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <x-toggle lg wire:model.defer="private" />
                </li>
                <li class="py-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">Allow connecting</p>
                        <p class="text-sm text-gray-500" id="privacy-option-3-description">Integer amet, nunc hendrerit adipiscing nam. Elementum ame</p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <x-toggle lg wire:model.defer="connecting" />
                </li>
                <li class="py-4 flex items-center justify-between">
                    <div class="flex flex-col">
                        <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">Allow mentions</p>
                        <p class="text-sm text-gray-500" id="privacy-option-4-description">Adipiscing est venenatis enim molestie commodo eu gravid</p>
                    </div>
                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                    <x-toggle lg wire:model.defer="mentions" />
                </li>
            </ul>
        </div>
        <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
            <button type="button" class="bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Cancel</button>
            <button type="button" class="ml-5 bg-sky-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Save</button>
        </div>
    </div>
</form>
