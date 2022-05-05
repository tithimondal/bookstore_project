<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all books</title>
</head>
<body>
 <h1>ALL BOOKS</h1>
 <button ><a href="index.php">BACK TO LOCATION</a></button>
 
</body>
</html>
<style>
  body {
  background-color: lightblue;
}

h1 {
  color: black;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 15px;
}
.col-md-3{
  margin:10px;
 
  float:left;
  width:300px;
  overflow:hidden;

}
.row .co-md-3{
  margin:50px;
  background:lightblue;
}
.row{
  display:inline-block;
}
   
</style>
<br>
<?php
$con =mysqli_connect("localhost","root","","contact");?>
<session class="destination">
  <!-- <h3 class="bookname">add_book</h3> -->

<?php
$q = mysqli_query($con,"SELECT * FROM `add_book` ");
while($data = mysqli_fetch_array($q) ){
    ?>
    <a href="./singelbooks.php ?id= <?=$data['id']?>">
    <div class= "col-md-3">

        <br><img src ="./image/<?php echo $data['bookimg']?>" alt=""style="max-height:250px;">
          <h3>  <?php echo $data['bookname']?></h3>
          <button ><a href="orders.php">buy</a></button>
          <p>
          <?php echo substr ($data['description'],0,80)?>..

        </p>
</div>
<?php
}
?>
