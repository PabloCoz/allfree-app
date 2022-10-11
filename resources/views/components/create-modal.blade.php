@props(['img', 'description', 'indent', 'options', 'video'])

<div>
    <div wire:loading wire:target="img"
        class="bg-red-100 border w-full border-red-400 text-red-700 px-4 py-3 mb-3 rounded relative" role="alert">
        <strong class="font-bold">!Imagen o Video Cargando!</strong>
        <span class="block sm:inline">Espere por favor.</span>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-3" wire:init="analyzeImg">
        @if ($img)
            @foreach ($img as $index => $im)
                @if ($im)
                    <div class="relative inline-block bg-violet-100 rounded-lg">
                        <img class="rounded-lg object-contain object-center w-full h-72" src="{{ $im->temporaryUrl() }}">
                        <span
                            class="cursor-pointer absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-black border-2 transform translate-x-1/2 -translate-y-1/2 bg-white rounded-full"
                            wire:click="removeImage({{ $index }})">X</span>
                    </div>
                @else
                    <div class="relative inline-block bg-violet-100 rounded-lg">
                        <video muted loop class="rounded-lg object-contain object-center w-full h-72">
                            <source src="{{ $im->temporaryUrl() }}" />
                        </video>
                        <span
                            class="cursor-pointer absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-black border-2 transform translate-x-1/2 -translate-y-1/2 bg-white rounded-full"
                            wire:click="removeImage({{ $index }})">X</span>
                    </div>
                @endif
            @endforeach
        @endif

        <div class="">
            <label for="{{ $indent }}" class="">
                <i wire:click="addImages"
                    class="fa-solid fa-plus cursor-pointer p-4 border-2 rounded-lg w-full flex justify-center items-center h-72 border-dashed border-violet-500"></i>
            </label>

            <input wire:model="img" id="{{ $indent }}" type="file" class="hidden" multiple
                enctype="multipart/form-data" accept="image/*, video/*" />
        </div>
    </div>

    <div class="mt-6">
        <div class="relative z-0 mb-6 w-full group">
            <textarea wire:model="description"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-500 appearance-none  focus:outline-none focus:ring-0 focus:border-violet-600 peer"
                placeholder=" " required></textarea>
            <label for=""
                class="peer-focus:font-medium absolute text-sm text-gray-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-violet-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripción</label>
        </div>
        <div class="flex items-center space-x-2">
            <label class="text-sm text-gray-700 font-bold">#Etiquetas</label>
            <i class="fa-solid fa-circle-plus cursor-pointer text-xl" wire:click="addOption"></i>
        </div>


        @foreach ($options as $index => $option)
            <div class="flex items-center w-52 justify-between mx-2">
                <input type="text" wire:model="options.{{ $index }}"
                    class="block px-0 w-48 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-violet-600 peer"
                    placeholder="#salud" />
                <button>
                    <i class="fa-solid fa-x font-extrabold -ml-3 text-red-500"
                        wire:click="removeOptionLabel({{ $index }})"></i>
                </button>

            </div>
        @endforeach

    </div>
</div>
