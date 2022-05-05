<?php
$con =mysqli_connect("localhost","root","","contact");

if(isset($_POST['submit']) ) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $houseadd = $_POST['houseadd'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $postcode= $_POST['postcode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    

  $q = mysqli_query($con, "INSERT INTO `order` SET `firstname` ='$firstname',`lastname`='$lastname',`houseadd`='$houseadd',`city`='$city',`state`='$state',`postcode`='$postcode',`phone`='$phone',`email`='$email' ");

  if($q == true){
    echo "<script>alert('THANK YOU ')</script>"; 
      // header("location:index.php");
  }



}  

?>


<body>
  <div class="wrapper">
    <h2>Shipping Order Form</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="name" placeholder="firstname" required minlength="3" maxlength="25" />
      </div>
      <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" placeholder="lastname" required />
      </div>
      <div class="form-group">
        <label for="houseadd">Houseadd</label>
        <input type="text" name="houseadd" id="houseadd" placeholder="houseadd" required />
      </div>
      <div class="form-group">
        <label for="city">city</label>
         <input type="text" name="city" id="city" placeholder="city" required />
      </div>
      <div class="form-group">
        <label for="state">states</label>
        <input type="text" name="state" id="state" placeholder="your state" required />
      </div>
      <div class="form-group">
        <label for="postcode">postcode</label>
        <input type="number" name="postcode" id="postcode" placeholder="postcode" required />
      </div>
      
        <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="email@domain.tld" required />
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="phone" name="phone" id="phone" placeholder="your phone number" required />
      </div>
      <div class="form-group"><br>
      <button type="submit"name= "submit">ORDER IT</button>
        <button ><a href="index.php">BACK TO LOCATION</a></button>
      </div>
    </form>
  </div>
</body>
<style>
    *,
*::before,
*::after {
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
}
body {
  margin: 10;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  line-height: 1.5;
  background: lightblue;
  display: flex;
  height: 100vh;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
h2::selection,
label::selection,
button::selection {
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.wrapper {
  width: 90%;
  padding: 2rem;
  background: #fff;
  box-shadow: 0 0px 2.2px rgba(0, 0, 0, 0.028), 0 0px 5.3px rgba(0, 0, 0, 0.04),
    0 0px 10px rgba(0, 0, 0, 0.05), 0 0px 17.9px rgba(0, 0, 0, 0.06),
    0 0px 33.4px rgba(0, 0, 0, 0.072), 0 0px 80px rgba(0, 0, 0, 0.1);
}
h2 {
  background: rgba(173, 216, 230, 0.7);
  letter-spacing: 0.1rem;
  padding: 1rem;
  cursor: default;
 text-align: center;
}
form,
input,
textarea,
button {
  font-family: inherit;
  font-size: initial;
}
.form-group label {
  display: block;
  margin: 2rem 0 0.5rem 0;
}
.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
  width: 100%;
  padding: 1rem 0.8rem;
  border: 1px solid rgba(0, 0, 0, 0.2);
  outline: 0;
  transition: border 0.15s;
}
.form-group input[type="text"],
.form-group input[type="email"] {
  height: 4.6rem;
}
.form-group textarea {
  resize: vertical;
}
.submit {
  font-weight: bold;
  margin-top: 1rem;
  padding: 1rem 1.5rem;
  border: none;
  background: rgba(173, 216, 230, 0.7);
  cursor: pointer;
  transition: background 0.15s;
}
i {
  margin-right: 0.5rem;
}
.submit:hover {
  background: rgba(173, 216, 230, 1);
}
.form-group input[type="text"]:focus,
.form-group input[type="email"]:focus,
.form-group textarea:focus {
  border: 1px solid #222;
}

@media screen and (min-width: 576px) {
  .wrapper {
    width: 70%;
  }
}
@media screen and (min-width: 768px) {
  .wrapper {
    width: 55%;
  }
}
@media screen and (min-width: 992px) {
  .wrapper {
    width: 45%;
  }
}
@media screen and (min-width: 1200px) {
  .wrapper {
    width: 35%;
  }
}


</style>

