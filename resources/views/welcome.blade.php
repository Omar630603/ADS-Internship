<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <div class="container">
                <x-card :content="$content" :subContent="$subContent" :buttonLink="'about'" :buttonTxt="'Larn More'">
                </x-card>
            </div>
        </div>
    </x-slot>
</x-guest-layout>