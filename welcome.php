<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Maruthi</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experience.php">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="52" height="52"
viewBox="0 0 171 171"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,171.99519v-171.99519h171.99519v171.99519z" fill="#343a40"></path><g fill="#000000"><path d="M85.5,0c-47.14318,0 -85.5,38.35682 -85.5,85.5c0,47.14318 38.35682,85.5 85.5,85.5c47.14318,0 85.5,-38.35682 85.5,-85.5c0,-47.14318 -38.35682,-85.5 -85.5,-85.5zM85.5,13.15385c40.02675,0 72.34615,32.31941 72.34615,72.34615c0,18.80589 -7.19351,35.86478 -18.90865,48.71034c-4.93269,-9.06896 -19.44817,-16.51938 -34.9399,-19.73077c0,0 -7.39904,-2.0039 -4.11058,-9.2488c4.59871,-5.90895 7.39904,-12.40881 7.39904,-14.38702c0,0 6.52554,-5.26668 7.19351,-13.15385c0.66797,-7.24489 -1.4387,-8.01562 -1.4387,-8.01562c2.6205,-8.55514 3.33985,-40.74609 -17.05889,-36.78966c-3.28846,-6.57692 -24.86899,-11.79222 -34.73437,5.96034c-4.59871,8.55514 -6.654,21.01533 -2.05529,30.21274c0,0.66797 -1.38732,-0.69366 -2.05529,3.90505c0,4.59871 2.13236,11.14994 4.11058,13.77043c0.66797,1.31025 1.97821,2.00391 3.28846,2.67188c0,0 1.28456,7.96425 7.19351,15.20913c1.31025,5.90896 -4.72716,9.2488 -4.72716,9.2488c-16.03125,3.21139 -30.59811,10.66181 -35.55649,19.73077c-11.38116,-12.76848 -18.29207,-29.59615 -18.29207,-48.09375c0,-40.02674 32.31941,-72.34615 72.34615,-72.34615z"></path></g></g></svg> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container3">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr class="hr2">
</div>

<?php

$insert = false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password']; 
$sql = "INSERT INTO `users`.`users` (`username`, `password`, `created_at`) VALUES ('$username', '$password', current_timestamp());";

if($con->query($sql) == true){
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}   
?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
