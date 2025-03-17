<div>
    <select wire:model="selectedOption" id="dropdown" class="form-select">
        <option value="">--Select--</option>
        @foreach ($options as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>