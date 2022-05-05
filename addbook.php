
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
</head>
<body class="bg-dark">
    <div class="container bg-light">
        <h1>Add BOOK</h1>
        <form action="" method="post"enctype="multipart/form-data">
            <p>BOOK NAME </p>
            <input type="text" name="bookname" id="BOOK NAME" class="form-control" >
            <p>BOOK IMAGE </p>
            <input type="file" name="bookimg" id="bookimg" class="form-control" accept="image/*">
            <p>BOOK DESCRIPTION </p>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>

        <input type="submit"name="addbook" value="add book" class="btn btn-primary">
        <button ><a href="index.php">BACK TO LOCATION</a></button>
        

        </form>
    </div>
</body>
</html>
<?php
$con =mysqli_connect("localhost","root","","contact");
 
session_start(); 

if(isset($_POST['addbook']) ) { 
    $bookname= $_POST['bookname'];
    $description = $_POST['description'];
    // file
    $piname = $_FILES['bookimg']['name'];
    $tmp = $_FILES['bookimg']['tmp_name'];
    move_uploaded_file($tmp ,"image/$piname");
  

    $q = mysqli_query($con, "INSERT INTO `add_book` SET `bookname` ='$bookname',`description`='$description',`bookimg`='$piname' ");
    if($q== true) {
        header("location:index.php");
    }
}  




?>
