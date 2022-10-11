<div>
    <x-jet-dropdown align="center" width="64">
        <x-slot name="trigger">
            <button class="relative inline-block focus:outline-none focus:text-violet-600"
                wire:click="resetNotificationCount()">
                <i class="fa-solid fa-bell text-2xl"></i>
                <span
                    class="absolute top-0 right-0 inline-flex items-center justify-center p-1 mt-2 text-xs  font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ auth()->user()->notification }}</span>
            </button>
        </x-slot>

        <x-slot name="content">
            <div>
                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    Notificaciones
                </div>
                <ul class="divide-y-2">
                    @foreach ($notifications as $notification)
                        <li wire:click="read('{{ $notification->id }}')"
                            class="px-2 cursor-pointer {{ !$notification->read_at ? 'bg-gray-200' : '' }}">
                            <x-jet-dropdown-link class="text-gray-700 text-xs my-1"
                                href="{{ $notification->data['url'] }}">
                                {{ Str::limit($notification->data['message'], 80) }}
                                <span class="text-xs font-bold">{{ $notification->created_at->diffForHumans() }}</span>
                            </x-jet-dropdown-link>
                        </li>
                    @endforeach
                </ul>

        </x-slot>
    </x-jet-dropdown>
</div>
