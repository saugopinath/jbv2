<x-filament-panels::page>
    <form method="GET" action="" class="flex items-center space-x-4">
        <div class="flex flex-col space-y-2">
            <label for="selectscheme">Select Scheme</label>
            <x-scheme-selection-dropdown />
        </div>
        <div class="flex flex-col space-y-2">
            <label for="selectcategory">Operation Type</label>
            <select id="selectcodemaster" name="codemaster" class="filament-forms-input">
                <option value="">--Select--</option>
                @foreach($codemaster as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
    </form>

    <x-filament-tables::table>
        <thead>
            <tr>
                <th class="px-4 py-2 border">Application ID</th>
                <th class="px-4 py-2 border">Application Name</th>
                <th class="px-4 py-2 border">Block/Municipality</th>
                <th class="px-4 py-2 border">GP/Ward</th>
                <th class="px-4 py-2 border">Bank A/C</th>
                <th class="px-4 py-2 border">Bank IFSC</th>
                <th class="px-4 py-2 border">Incomplete Status</th>
                <th class="px-4 py-2 border">Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </x-filament-tables::table>

</x-filament-panels::page>
