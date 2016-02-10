<!--
<!DOCTYPE html>
<html>
<body>

<form action="../controller/photo-upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
-->
<form action="../controller/create_photo_gallery.php" method="post" enctype="multipart/form-data">
    <table width="100%">
        <tr>
            <td>Select Photo (one or multiple):</td>
            <td><input type="file" name="files[]" onchange="readURL(this)" multiple/></td>
            <td><img id="blah" src="../../public/images/default.jpg" style="border: 1px solid black" alt="your image" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png, .gif</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Create Gallery" id="selectedButton"/></td>
        </tr>
    </table>
</form>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width('50%')
                    .height('50%');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php include'../templates/footer.php';?>