{{ csrf_field() }}
<fieldset>
    <legend>plant info</legend>

    <div>
        <label for="species">Species</label>
        <input type="text" name="species" id="species" value="{{ $plant->species }}" required>
    </div>

    <div>
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="{{ $plant->name }}">
    </div>

    <div>
        <label for="location">location</label>
        <input type="text" name="location" id="location" value="{{ $plant->location }}">
    </div>

    <div>
        <label for="comment">comment</label>
        <textarea name="comment" id="comment" cols="30" rows="3">{{ $plant->comment }}</textarea>
    </div>

    {{-- <div>
        <label for="image">image - dont use yet</label>
        <input type="file" name="image" id="image">
    </div> --}}

    <button type="submit">{{ $buttonText }}</button>
</fieldset>
