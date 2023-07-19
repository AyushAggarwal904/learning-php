<?php

$submit = false;

if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($server, $username, $password);

if(!$conn) {
  die("connection failed" . mysqli_connect_error());
}

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

if($conn->query($sql) == true) {
  // echo "success";
  $submit = true;
}
else 
{
   echo "Error: $sql <br> $conn->error";
}

$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Welcome to travel form</title>
  </head>
  <body>
    <div class="container">
      <h1>Welcome to US Travel form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <?php

      if($submit == true)
      {
        echo "<p id='thanks'>Thanks for submitting the form</p>";
      }

      ?>

      <form action="travel.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter Your Name"
        />

        <input type="text" name="age" id="age" placeholder="Enter Your Age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter Your Gender"
        />

        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter Your Email"
        />

        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter Your Phone"
        />

        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter other Info"
        ></textarea>

        <button class="btn">Submit</button>
      </form>
    </div>
    <script src="index.js"></script>

    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('1', 'testname', '23', 'Male', 'testcs@gmail.com', '3333333333', 'gughjghj', current_timestamp()); -->
  </body>
</html>
