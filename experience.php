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

    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $view = $_POST['view'];
    $sql =  "INSERT INTO `sch`.'sch' (`s.no`, `name`, `grade`, `section`, `email`, `phone`, `view`, `data&time`) VALUES ('$name', '$grade', '$section', '$email', '$phone', '$view', current_timestamp()); ";

    if($con->query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
    }   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter your Experience</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <h2>Welcome to Rainbow CBSE School Nellore travel form </h2>

    <div class="container">
        <button class="button" style="vertical-align:top" onclick="myFunction()"><span><img class="img" src="dark-mode.png" alt=""></span></button>
        <p>
        <h3>Enter your details and submit this form to confirm your participation in the trip </h3>
    </p>
    </div>

    <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see your experience in Rainbow School Summer classes</p>";
        }
    ?>

        <hr class="hr">

        <form action="index.php" method="post">
            
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="grade" id="grade" placeholder="Enter your grade">
            <input type="text" name="section" id="section" placeholder="Enter your section">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your experience in Rainbow School Summer classes"></textarea>
            <button class="btn">Submit</button>
            
        </form>

        <hr class="hr">    

        <h2 style="text-align:center" class="show">Slideshow Gallery</h2>

            <div class="school-img center">
            <div class="mySlides">
            <div class="numbertext">1 / 10</div>
            <img src="school-img/1.jpg" style="width:80%">
            </div>
              
            <div class="mySlides center">
            <div class="numbertext">2 / 10</div>
            <img src="school-img/2.jpg" style="width:80%">
            </div>
              
            <div class="mySlides center">
            <div class="numbertext">3 / 10</div>
            <img src="school-img/3.jpg" style="width:80%">
            </div>
                  
            <div class="mySlides center">
            <div class="numbertext">4 / 10</div>
            <img src="school-img/4.jpg" style="width:80%">
            </div>
              
            <div class="mySlides center">
            <div class="numbertext">5 / 10</div>
            <img src="school-img/5.jpg" style="width:80%">
            </div>

            <div class="mySlides center">
                <div class="numbertext">6 / 10</div>
                <img src="school-classroom/11.jpg" style="width:80%">
            </div>

                  
            <div class="mySlides center">
                <div class="numbertext">7 / 10</div>
                <img src="school-outdoors/6.jpg" style="width:80%">
            </div>
            
            <div class="mySlides center">
                <div class="numbertext">8 / 10</div>
                <img src="school-outdoors/7.jpg" style="width:80%">
            </div>

            <div class="mySlides center">
                <div class="numbertext">9 / 10</div>
                <img src="school-classroom/8.jpg" style="width:80%">
            </div>

            <div class="mySlides center">
                <div class="numbertext">10 / 10</div>
                <img src="school-classroom/10.jpg" style="width:80%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
              
            <div class="caption-container">
            <p id="caption"></p>
            </div>
              
            <div class="row">
            <div class="column center">
            <img class="demo cursor" src="school-classroom/11.jpg" style="width:60%" onclick="currentSlide(11)" alt="Rainbow School Reception">
            </div>    
            <div class="column center">
            <img class="demo cursor" src="school-img/1.jpg" style="width:60%" onclick="currentSlide(1)" alt="Entrance">
            </div>
            <div class="column center">
            <img class="demo cursor" src="school-img/2.jpg" style="width:60%" onclick="currentSlide(2)" alt="School image">
            </div>
            <div class="column center">
            <img class="demo cursor" src="school-img/3.jpg" style="width:60%" onclick="currentSlide(3)" alt="Bus Parking">
            </div>
            <div class="column center">
            <img class="demo cursor" src="school-img/4.jpg" style="width:60%" onclick="currentSlide(4)" alt="Praying area">
            </div>
            <div class="column center">
            <img class="demo cursor" src="school-img/5.jpg" style="width:60%" onclick="currentSlide(5)" alt="Events area">
            </div>   
            <div class="column center">
                <img class="demo cursor" src="school-outdoors/6.jpg" style="width:60%" onclick="currentSlide(6)" alt="Mahatma Gandhi statue">
                </div>
            <div class="column center">
                <img class="demo cursor" src="school-outdoors/7.jpg" style="width:60%" onclick="currentSlide(7)" alt="Famous People to know">
            </div>
            <div class="column center">
                <img class="demo cursor" src="school-classroom/8.jpg" style="width:60%" onclick="currentSlide(8)" alt="Rainbow School library">
            </div>
            <div class="column center">
                <img class="demo cursor" src="school-classroom/10.jpg" style="width:60%" onclick="currentSlide(10)" alt="Rainbow School Computer Lab">
            </div>     
            </div>
            </div>

        <hr class="hr"> 

        
    <script src="index.js"></script>

</body>
</html>