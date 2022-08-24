<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <div class="container">
                <x-card :content="$content" :subContent="$subContent">
                </x-card>
            </div>
        </div>
    </x-slot>
</x-guest-layout>