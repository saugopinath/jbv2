<select name="scheme_id" id="scheme_id" required class="border-gray-300 rounded-lg p-2">
    <option value="">--Select--</option>
    @foreach($options as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
    @endforeach

</select>



