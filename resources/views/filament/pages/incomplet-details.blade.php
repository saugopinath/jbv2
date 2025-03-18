<x-filament-panels::page>

    <style>
        /* Tooltip container */
        [data-tooltip] {
            position: relative;
            cursor: pointer;
        }

        /* Tooltip styling */
        [data-tooltip]:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px;
            background-color: rgba(0, 0, 0, 0.75);
            color: white;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        /* Show tooltip on hover */
        [data-tooltip]:hover::after {
            opacity: 1;
            visibility: visible;
        }
    </style>

    <form method="GET" action="" class="flex items-center space-x-4">
        <div class="flex flex-col space-y-2">
            <label for="selectscheme">Select Scheme</label>
            <x-scheme-selection-dropdown />
        </div>
        <div class="flex flex-col space-y-2">
            <label for="selectcategory">Operation Type</label>
            <select id="selectcodemaster" name="codemaster" class="filament-forms-input">
                <option value="">--Select--</option>
                @foreach ($codemaster as $value => $label)
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
                <th class="px-4 py-2 border">Mobile Number</th>
                <th class="px-4 py-2 border">Block/Municipality</th>
                <th class="px-4 py-2 border">GP/Ward</th>
                <th class="px-4 py-2 border">Bank A/C</th>
                <th class="px-4 py-2 border">Bank IFSC</th>
                <th class="px-4 py-2 border">Incomplete Status</th>
                <th class="px-4 py-2 border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beneficiaryPersonal as $beneficiary)
                <tr>
                    <td class="px-4 py-2 border">{{ $beneficiary->id }}</td>
                    <td class="px-4 py-2 border">{{ $beneficiary->full_name }}</td>
                    <td class="px-4 py-2 border">{{ $beneficiary->mobile_no }}</td>
                    <td class="px-4 py-2 border"></td>
                    <td class="px-4 py-2 border"></td>
                    <td class="px-4 py-2 border"></td>
                    <td class="px-4 py-2 border"></td>

                    <td class="px-4 py-2 border">
                        <x-filament::button data-tooltip="{{ $application->codemaster->name }}"
                            class="bg-blue-500 text-white">
                            View
                        </x-filament::button>
                    </td>

                    <td class="px-4 py-2 border"></td>
                </tr>
            @endforeach
        </tbody>
    </x-filament-tables::table>

</x-filament-panels::page>
