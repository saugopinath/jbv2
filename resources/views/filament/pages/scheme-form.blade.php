<x-filament::page>
    {{-- <h2 class="text-xl font-bold mb-4">
        Selected Scheme: {{ $scheme?->name ?? 'No Scheme Selected' }}
    </h2> --}}

    <form method="POST" action="">
        @csrf
        <input type="hidden" name="scheme_id" value="{{ request()->scheme_id }}">

        <div class="mb-4">
            <label class="block text-gray-700">Enter Your Name:</label>
            <input type="text" name="name" class="w-full p-2 border rounded-lg">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Enter Description:</label>
            <textarea name="description" class="w-full p-2 border rounded-lg"></textarea>
        </div>

        <x-filament::button type="submit">Submit</x-filament::button>
    </form>
</x-filament::page>
