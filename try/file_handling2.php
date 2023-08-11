<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploading file</title>
</head>
<body>
<form action="file_upload.php" method="post" enctype="multipart/data-form">
    <!-- <label for=""><input type="file"></label> -->
    <label for="upfile"><input type="file" name="upfile" id="upfile"></label>
    <button type="submit">upload</button>
</form>
</body>
</html>