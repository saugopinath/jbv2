<x-filament-panels::page>
    <label for="selectscheme">Select Scheme</label>
    <form method="GET" action="{{ route('scheme.form') }}" class="flex items-center space-x-4">
        <x-scheme-selection-dropdown />
        <input type="hidden" name="scheme_id" value="{{ encrypt($scheme_id ?? '') }}">
        <x-filament::button type="submit">
            Go
        </x-filament::button>
    </form>
</x-filament-panels::page>