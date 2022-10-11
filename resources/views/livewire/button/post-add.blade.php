<div>
    <x-jet-dropdown align="left" width="64">
        <x-slot name="trigger">
            <button class="focus:outline-none focus:text-violet-600"><i
                    class="fa-solid fa-square-plus text-2xl "></i></button>
        </x-slot>
        <x-slot name="content">
            <ul class="space-y-1 px-3 my-2">
                <li>
                    <button wire:click="$set('open', true)"
                        class="flex items-center space-x-3 w-full hover:bg-violet-600 hover:text-white rounded-lg focus:outline-none py-2">
                        <i class="fa-solid fa-handshake-angle text-xl ml-1"></i>
                        <h1> Solicitar </h1>
                    </button>
                </li>
                <li>
                    <button wire:click="$set('regalos', true)"
                        class="flex items-center space-x-3 w-full hover:bg-violet-600 hover:text-white rounded-lg focus:outline-none py-2">
                        <i class="fa-solid fa-gift text-xl ml-1"></i>
                        <h1>Regalos</h1>
                    </button>
                </li>
                <li>
                    <button wire:click="$set('otros', true)"
                        class="flex items-center space-x-3 w-full hover:bg-violet-600 hover:text-white rounded-lg focus:outline-none py-2">
                        <i class="fa-solid fa-people-carry-box text-xl ml-1"></i>
                        <h1> Solicitar para otros(as) </h1>
                    </button>
                </li>
                <li>
                    <button wire:click="$set('reflexion', true)"
                        class="flex items-center space-x-3 w-full hover:bg-violet-600 hover:text-white rounded-lg focus:outline-none py-2">
                        <i class="fa-solid fa-shapes text-xl ml-1"></i>
                        <h1> Compartir Reflexiones </h1>
                    </button>
                </li>
            </ul>
        </x-slot>
    </x-jet-dropdown>

    <x-jet-dialog-modal :maxWidth="'2xl'" wire:model="open">
        <x-slot name="title">
        </x-slot>
        <x-slot name="content">
            <x-create-modal :img="$img" :description="$description" :indent="$indent" :options="$options" :video="$video" />
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end">
                <button wire:click="solicitar" wire:loading.attr="disabled" wire:target="solicitar,img"
                    class="block p-2 bg-sky-500 text-white rounded hover:bg-sky-700 text-sm font-bold disabled:bg-sky-300">
                    Crear Publicación
                </button>
            </div>

        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-dialog-modal :maxWidth="'2xl'" wire:model="regalos">
        <x-slot name="title">
        </x-slot>
        <x-slot name="content">
            <x-create-modal :img="$img" :description="$description" :indent="$indent" :options="$options" :video="$video"/>
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end">
                <button wire:click="regalo" wire:loading.attr="disabled" wire:target="regalo,img"
                    class="block p-2 bg-red-500 text-white rounded hover:bg-red-700 text-sm font-bold disabled:bg-red-300">
                    Crear Publicación
                </button>
            </div>

        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-dialog-modal :maxWidth="'2xl'" wire:model="otros">
        <x-slot name="title">
        </x-slot>
        <x-slot name="content">
            <x-create-modal :img="$img" :description="$description" :indent="$indent" :options="$options" :video="$video" />

        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end">
                <button wire:click="otros" wire:loading.attr="disabled" wire:target="otros,img"
                    class="block p-2 bg-yellow-500 text-white rounded hover:bg-yellow-700 text-sm font-bold disabled:bg-yellow-300">
                    Crear Publicación
                </button>
            </div>

        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-dialog-modal :maxWidth="'2xl'" wire:model="reflexion">
        <x-slot name="title">
        </x-slot>
        <x-slot name="content">
            <x-create-modal :img="$img" :description="$description" :indent="$indent" :options="$options" :video="$video" />

        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end">
                <button wire:click="reflexion" wire:loading.attr="disabled" wire:target="reflexion,img"
                    class="block p-2 bg-green-500 text-white rounded hover:bg-green-700 text-sm font-bold disabled:bg-green-300">
                    Crear Publicación
                </button>
            </div>

        </x-slot>
    </x-jet-dialog-modal>
</div>
