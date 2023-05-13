<x-modal wire:model.defer="showQr">
    <x-card title="QR">
        <label>{{ $internal_id }}</label>
        <div class="flex justify-center bg-gray-50 rounded-2xl mb-4">
            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->color(31, 66, 44)->size(300)->generate($link ?? '')) !!} ">
        </div>

        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <x-button dark label="Download" href="{{ \Illuminate\Support\Facades\URL::to('api/sandbox/qr/'.$uuid) }}" target="_blank" />
                <x-button flat label="Close" x-on:click="close" />
            </div>
        </x-slot>
    </x-card>
</x-modal>
