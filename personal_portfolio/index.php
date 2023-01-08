<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'");
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')");
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Zahid Hasan Mozumder | Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#certification">certification</a>
      <a href="#gallery">gallery</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/zahidhasanmozumder/" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/zahid-hasan-mozumder/" class="fab fa-linkedin"></a>
      <a href="https://github.com/Zahid-Hasan-Mozumder" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Zahid Hasan Mozumder</h3>
      <span data-aos="fade-up">Student & Competitive Programmer</span>
      <p data-aos="fade-up">"You want to be a king but you have fear of lossing! Go sit in the soldier's chair and follow the king's command"</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Want to make a creative life where people will remember me because of my creativity till the 100 or 1000 years after my death. 
         Also want to travel the world and want to lead a chill and happy life where party, adventure, thrills and happiness never ends.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Zahid Hasan Mozumder </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> jahidhasanmozumder@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Mohammadpur, Dhaka-1207, Bangladesh </h3>
         <h3 data-aos="zoom-in"> <span>hometown : </span> Cumilla, Bangladesh </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +8801770127059 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>hobbies : </span> Travelling </h3>
         <h3 data-aos="zoom-in"> <span>gender : </span> Male </h3>
         <h3 data-aos="zoom-in"> <span>Nationality : </span> Bangladeshi </h3>
         <h3 data-aos="zoom-in"> <span>Religion : </span> Islam </h3>
         <h3 data-aos="zoom-in"> <span>Ethnicity : </span> Asian </h3>
         <h3 data-aos="zoom-in"> <span> Educational Background </span> <br>
                                 <span>SSC: </span> Mohammadpur Govt. High School <br>
                                 <span>HSC: </span> Mohammadpur Model School and College<br>
                                 <span>BSc: </span> Green University of Bangladesh</h3>
      </div>

      <a href="cv/curriculum_vitae.pdf" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>C / C++</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Problem Solving</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Frontend Knowledge</span> <span>40%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Backend Knowledge</span> <span>30%</span></h3> </div>
      </div>

   </div>

   <div class="edu-award">

      <h1 class="heading" data-aos="fade-up"> <span>education & award</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2006 - 2017 )</span>
               <h3>Mohammadpur Govt. High School</h3>
               <p>Completed Secondary School Certificate(SSC) from here in 2017.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2019 )</span>
               <h3>Mohammadpur Model School and College</h3>
               <p>Completed Higher School Certificate(HSC) from here in 2019.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2024 )</span>
               <h3>Green University of Bangladesh</h3>
               <p>Currently completing Bachelor of Science(BSc) in Computer Science and Engineering from here. And hopefully will graduate in 2024.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">award</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2024 )</span>
               <h3>Vice Chancellor Award</h3>
               <p>Successfully enlisted for Vice Chancellor Award in Fall-2020, Summer-2021 and Fall-2021</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2024 )</span>
               <h3>Dean Award</h3>
               <p>Successfully enlisted for Dean Award in Spring-2021 and Spring-2022</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- certification section starts  -->

<section class="certification" id="certification">

   <h1 class="heading" data-aos="fade-up"> <span>certification</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <a href="https://www.freecodecamp.org/certification/zahidhasanmozumder/responsive-web-design"><h3>Responsive Web Design</h3></a>
         <p>Learned HTML, CSS and a little bit of javascript and completed 5 simple projects such as landing page, contact page etc.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-gears"></i>
         <a href="https://www.facebook.com/codingcompetitions/hacker-cup/2022/certificate/633658351132713"><h3>Meta Hacker Cup-2022</h3></a>
         <p>Successfully qualified for Meta Hacker Cup-2022 which was organized by Meta through their online coding platform.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-gears"></i>
         <a href="https://verification.givemycertificate.com/v/a34d62b5-9b5c-4f9c-8ce6-38590eb0ead8"><h3>Code Sanso-2021</h3></a>
         <p>Successfully qualified for Code Sanso-2021 which was arranged by IIIT, Allahabad through CodeChef platform in online.</p>
      </div>  

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-gears"></i>
         <a href="certificates/c-4.pdf"><h3>Global Snackdown-2021</h3></a>
         <p>Successfully qualified for Global Snackdown-2021 which was organized by CodeChef through their online coding platform.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-handshake"></i>
         <a href="certificates/c-5.pdf"><h3>E-Business & Entreprenuership</h3></a>
         <p>Participated in a 10 days bootcamp arranged by E-Business and Enterpreneurship Club, Jahangirnagar University.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-spinner"></i>
         <h3>Coming Soon...</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- cerification section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <h1 class="heading" data-aos="fade-up"> <span>gallery</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpeg" alt="">
         <h3>Receiving Vice Chancellor Award</h3>
         <span>( 02-11-2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>Became top-30 among 500+ teams in Code Samurai-2022</h3>
         <span>( 20-12-2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>Coming soon...</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>Coming soon...</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>Coming soon...</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.jpg" alt="">
         <h3>coming soon...</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- gallery section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+8801770127059</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>jahidhasanmozumder@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Dhaka, Bangladesh</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Zahid Hasan Mozumder</span> </div>




<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>