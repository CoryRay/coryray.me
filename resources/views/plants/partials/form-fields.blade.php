{{ csrf_field() }}
<fieldset>
    <legend>Plant Info</legend>

    <div class="form-row">
        <label for="common_name">Common Name</label>
        <input type="text" name="common_name" id="common_name" value="{{ $plant->common_name }}" maxlength="255">
    </div>

    <div class="form-row">
        <label for="species">Species</label>
        <input type="text" name="species" id="species" value="{{ $plant->species }}" maxlength="255">
    </div>

    <div class="form-row">
        <label for="nickname">Nickname</label>
        <input type="text" name="nickname" id="nickname" value="{{ $plant->nickname }}" maxlength="255">
    </div>

    <div class="form-row">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" value="{{ $plant->location }}" maxlength="255">
    </div>

    <div class="form-row">
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" rows="3">{{ $plant->comment }}</textarea>
    </div>

    <button class="green-button" type="submit">{{ $buttonText }}</button>
</fieldset>
