<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        $type = $_FILES['photo']['type'];
        if($type == "image/jpeg" || $type == "image/png" || $type == "image/gif"){
            move_uploaded_file($tmp, "photo/$name");
        }
        header('location: index.php')
    ?>
    
</body>
</html>