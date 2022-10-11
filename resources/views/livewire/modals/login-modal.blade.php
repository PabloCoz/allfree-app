<div>
    <div>
        <button wire:click="$set('open', true)"
            class="text-sm text-gray-500 hover:text-gray-700">{{ __('Login') }}</button>

        <x-jet-dialog-modal wire:model="open">
            <x-slot name="title">
            </x-slot>
            <x-slot name="content">
                @include('auth.login')
            </x-slot>
            <x-slot name="footer"></x-slot>
        </x-jet-dialog-modal>
    </div>

</div>
