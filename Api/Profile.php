<?php
$file_path = basename( $_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $file_path); 
?>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>