<?php
$con =mysqli_connect("localhost","root","","contact");


    
if(isset($_POST['submit']) ) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];

  $q = mysqli_query($con, "INSERT INTO `contactinfo` SET `Name` ='$name',`Email`='$email',`Phone`='$phone' ");

  if($q == true){
      header("location:index.php");
  }



}  
?>


<body>
  <div class="wrapper">
    <h2>CONTACT US</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="Name" id="name" placeholder="First and Last" required minlength="3" maxlength="25" />
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="Email" id="email" placeholder="email@domain.tld" required />
      </div>
      <div class="form-group">
        <label for="phone number">Phone Number</label>
        <input type="phone" name="Phone" id="phone number" placeholder="phone number" required />
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="Message" id="message" rows="5" placeholder="Type your message here...."></textarea>
      </div>
      <div class="form-group">
      <button type="submit"name= "submit">CONTACT US</button>
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
  margin: 0;
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

