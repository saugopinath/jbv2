<x-filament-panels::page>
    <label for="selectscheme">Select Scheme</label>
    <form method="GET" action="" class="flex items-center space-x-4">
        <x-scheme-selection-dropdown />
        <x-filament::button type="submit">
            Go
        </x-filament::button>
    </form>
</x-filament-panels::page>