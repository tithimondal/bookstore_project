<?php
$con =mysqli_connect("localhost","root","","contact");

$id=$_GET['id'];

$q = mysqli_query($con,"SELECT * FROM `add_book`WHERE`id`='$id' ");
$data = mysqli_fetch_array($q);
?>


<section class ="destinations">
    
    <h3 class="bookname"> <?php echo $data['bookname'] ?> </h3>
    <div class="row">
        <img src="./image/<?php echo $data['bookimg'] ?>"alt="" style="height:400px;">
        <br><br>
        <button ><a href="orders.php">buy</a></button><br>

        <?php echo $data['description'] ?><br><br>
        <button ><a href="index.php">BACK TO LOCATION</a></button>
        </div>
        </section>
        <style>
            body{background:lightblue}
            h3{}

        </style>
        
