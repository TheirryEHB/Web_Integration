<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titel">Titel:</label>
        <input type="text" class="form-control" name="titel">
    </div>
    <div class="form-group">
        <label for="volledige bestandsnaam">Volledige bestandsnaam:</label>
        <input type="text" class="form-control" name="volledige bestandsnaam">
    </div>
    <div class="form-group">
        <label for="profielfoto">Profielfoto:</label>
        <input type="file" class="form-control" name="profielfoto" id="profielfoto">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>


</body>
</html>
