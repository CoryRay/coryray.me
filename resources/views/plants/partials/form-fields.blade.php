{{ csrf_field() }}
<fieldset>
    <legend>plant info</legend>

    <div class="form-row">
        <label for="species">Species</label>
        <input type="text" name="species" id="species" value="{{ $plant->species }}" maxlength="255" required>
    </div>

    <div class="form-row">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $plant->name }}" maxlength="255">
    </div>

    <div class="form-row">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" value="{{ $plant->location }}" maxlength="255">
    </div>

    <div class="form-row">
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" cols="30" rows="3">{{ $plant->comment }}</textarea>
    </div>

    {{-- <div>
        <label for="image">image - dont use yet</label>
        <input type="file" name="image" id="image">
    </div> --}}

    <button type="submit">{{ $buttonText }}</button>
</fieldset>
