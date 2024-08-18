@props(['name'])

<div class="image-upload">
    <input type="file" id="file-input" name="{{ $name }}" accept="image/*">
    <label for="file-input" class="custom-file-upload">
    <div class="image-box" id="image-box">
        <span class="upload-icon">&#x1F4F7;</span>
        <img id="image-preview" src="" alt="" style="display: none;">
    </div>
    </label>
</div>

<script>
    $(document).ready(function() {
    // When the image box is clicked, trigger the file input click
    // $('.image-box').click(function() {
    //     $('#file-input').click();
    // });

    // When a file is selected, show the preview
    $('#file-input').change(function(event) {
        var file = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image-preview').attr('src', e.target.result);
            $('#image-preview').show();
            $('#image-box').addClass('uploaded');
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });
});

</script>
