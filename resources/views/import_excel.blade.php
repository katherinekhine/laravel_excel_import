<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <br>
    <br>
    <br>
    <h2>Upload a File</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="file">File</label>
        <input type="file" name="excel_file" id="file">
        <button type="submit">Upload</button>
    </form>
</body>

</html>
