<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar fixed-top bg" style="height: 50px;">         
      <?php
       include 'koneksi.php';
       $query = "SELECT * FROM users";
       $query_sql = mysqli_query($koneksi,$query);
       $tampil = mysqli_fetch_assoc($query_sql);
      ?>
     <div class="container-fluid ps-5">
       <h3 class="navbar-brand ms-5" href="#">
            <?php echo $tampil['name'] ?>
          </h3>
         <ul class="nav pe-5">
           <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#skills">Skills</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#experience">Experience</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#education">Education</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>   
       </div>
    </nav>
  <!-- home   -->
<section class="home" id="home">
  <div class="wrapper-home">
    <div class="container-home">
      <div class="box-text descHome">
        <h3 class="home_name ms-2">Hi I'm <?php echo $tampil['name'] ?></h3>
        <h1 class="home_job"><?php echo $tampil['job'] ?></h1>
        <p class="home_desc mt-4"><?php echo $tampil['description'] ?></p>
        <a class="button_home" href="#contact">Contact me <img src="right-arrow.svg" class="img_button" alt="" style="width:25px;"></a>
      </div>   
      <div class="box-img myProfile">
       <img src="<?php echo $tampil['image_profile'] ?>"  alt="" style="width:22rem">
      </div>
    </div>
  <div class="achievement">

    <div class="box-year z-3 position-absolute yearBox">
      <div class="wrap-box-acievement pt-2">
        <h3 class="number-box"><?php echo $tampil['year_experience'] ?>+</h3>
        <p class="text-box">year experience</p> 
      </div>
    </div>
    <div class="box-project projectBox z-3 position-absolute">
      <div class="wrap-box-acievement pt-2">
        <h3 class="number-box"><?php echo $tampil['complete_project'] ?>+</h3>
        <p class="text-box">complete project</p> 
      </div>
    </div>

   </div>
   <div class="box-sosmed myProfile">
     <div class="social_media">
         <a href="<?php echo $tampil['instagram'] ?>"><img src="instagram.svg" class="icon-sm" alt=""></a>
         <a href="<?php echo $tampil['whatsapp'] ?>"><img src="whatsapp.svg"  class="icon-sm" alt=""></a>
         <a href="<?php echo $tampil['twitter'] ?>"><img src="twitter.svg" class="icon-sm" alt="" style="width:30px;"></a>
     </div>
     </div> 
   </div>
</section>
<!-- Skills -->
<section class="skills" id="skills">
   <h1 class="header-section"id="skills">My Skills</h1>
   <div class="wraper-skills">
         <?php
       include 'koneksi.php';
       $skills_query = "SELECT * FROM skills";
       $query_sql = mysqli_query($koneksi,$skills_query);
       $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
     ?>
 <?php    
 foreach ($ambildata as $tampil) {
 ?>    
       <div class="item-skill myskill">
           <img src="<?php echo $tampil['image_skill'] ?>" alt="" class="img-skill">
           <div class="text-skill">
           <h4 class="name-skill"><?php echo $tampil['name_skill'] ?></h4>
           <p class="level-skill"><?php echo $tampil['level_skill'] ?></p>
           </div>
       </div>           
 <?php
 }
 ?>
   </div> 
</section>
<!-- Experience -->
<section class="experience mb-5" id="experience">
    <h1 class="header-section">Experience</h1>
        <div class="wraper-experience">
           <?php
       include 'koneksi.php';
       $exp_query = "SELECT * FROM experience";
       $query_sql = mysqli_query($koneksi,$exp_query);
       $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
     ?>
 <?php    
 foreach ($ambildata as $tampil) {
 ?>              
        <div class="box-exp expBox">
           <div class="content-exp">         
               <img src="<?php echo $tampil['image_company'] ?>" alt="" class="img_company">
                <div class="text-exp">
                  <h4 class="job_exp"><?php echo $tampil['job_experience'] ?></h4>
                  <p class="desc-exp"><?php echo $tampil['description_experience'] ?></p>
                </div>         
            <div class="time-exp d-flex gap-1">
              <p class="date"><?php echo $tampil['start_experience'] ?></p>
              <p class="date">-</p>
              <p class="date"><?php echo $tampil['end_experience'] ?></p>
            </div>
          </div> 
        </div>
             
   <?php
 }
 ?>         
      </div>
</section>
<!-- education -->
<section class="education" id="education">
  <h1 class="header-section">Education</h1>
   <div class="wraper-edu">
      <?php
         include 'koneksi.php';
         $edu_query = "SELECT * FROM education";
         $query_sql = mysqli_query($koneksi,$edu_query);
         $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
      ?>
     <?php    
         foreach ($ambildata as $tampil) {
     ?>         
    <div class="box-collage myskill">
        <img src="<?php echo $tampil['image_college'] ?>" alt="" class="img-edu">
        <div class="row ms-3 mt-3 text-edu">
        <h3 class="major"><?php echo $tampil['major'] ?></h3>
        <p class="collage"><?php echo $tampil['name_college'] ?></p>
       <div class="time-edu d-flex gap-1">
        <p class="date-edu"><?php echo $tampil['start_education'] ?></p>
        <p class="date-edu">-</p>
        <p class="date-edu"><?php echo $tampil['end_education'] ?></p>
      </div>
      </div>
    </div>
  <?php
 }
 ?>     
   </div>
</section>
<!-- portfolio -->
<section class="portfolio" id="portfolio">
  <h1 class="header-section header-port" style="color: #ebebeb;">My Portfolio</h1> 
         <?php
       include 'koneksi.php';
       $portfolio_query = "SELECT * FROM portfolio";
       $query_sql = mysqli_query($koneksi,$portfolio_query);
       $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
     ?> 
  <div class="wraper-portfolio">
 <div id="carouselExampleDark" class="carousel carousel-dark slide" style="width: 600px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
       </div>    
       <div class="carousel-inner">
     <?php 
   $firstSlide= true;
 foreach ($ambildata as $tampil) {
   $classActive= $firstSlide ? 'active' : '';
   $firstSlide= false;
 ?>        
         <div class="carousel-item <?php echo $classActive; ?>">
           <img src="<?php echo $tampil['image_portfolio'] ?>" class="d-block w-100" alt="...">
           <div class="carousel-caption d-none d-md-block">
           <h5 class="title-port"><?php echo $tampil['title_portfolio'] ?></h5>
           <p class="desc-port"><?php echo $tampil['description_portfolio'] ?></p>
           </div>
         </div>
       <?php
 }
 ?>                
   </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      
    </div>
    </div>
</section>
<!-- contact -->
 <section class="contact" id="contact">
  <h1 class="header-section pt-5">Contact</h1> 
  <div class="wraper-contact">
       <?php
       include 'koneksi.php';
       $query = "SELECT * FROM contact WHERE id_user=1";
       $query_sql = mysqli_query($koneksi,$query);
       $tampil = mysqli_fetch_assoc($query_sql);
     ?> 
    <div class="box-contact">
      <div class="content-contact pb-4 contactBox">
        <img src="<?php echo $tampil['image_message'] ?>" alt="" style="width: 8em;">
        <div class="text-contact" style="width: 15em;">
        <h3 style="font-size: 20px; font-weight: 700;"><?php echo $tampil['title_form'] ?></h3>
        <p style="font-size: 9px;"><?php echo $tampil['description_form'] ?></p>
        </div>
      </div>
          <form action="process.php" method="post" class="form-contact contactBox2">
            <div class="form-contact d-flex gap-4 mb-4" style="width: 400px; height: 35px;">
              <input type="text" name="name" class="form-control" placeholder="enter your name" required="" >
              <input type="email" name="email" class="form-control" placeholder="enter your email" required="" >
            </div>
            <textarea type="text" name="message" style="width: 400px; height: 80px;" class="form-control mb-4" placeholder="enter your message" required="" ></textarea>
            <button class="button-send" type="submit" name="submit">Send Message</button>
          </form>
    </div>
  </div>
  <div class="text-center mt-5" style="font-size: xx-small;">
  <p>&copy; 2024 Karinadr All rights reserved</p>
  <!-- Button trigger modal -->
<a data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: underline; cursor: pointer;">
  Source and atribute
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Source and atribute</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div>
           <a href="https://iconscout.com/icons/instagram-logo" class="text-underline font-size-sm" target="_blank">Instagram</a> by <a href="https://iconscout.com/contributors/godlineart" class="text-underline font-size-sm">GodlineArt</a> on <a href="https://iconscout.com" class="text-underline font-size-sm">IconScout</a>   
         </div>
      <div>
       <a href="https://iconscout.com/icons/whatsapp-logo" class="text-underline font-size-sm" target="_blank">WhatsApp</a> by <a href="https://iconscout.com/contributors/godlineart" class="text-underline font-size-sm">GodlineArt</a> on <a href="https://iconscout.com" class="text-underline font-size-sm">IconScout</a>    
       </div> 
      <div>
         <a href="https://iconscout.com/icons/twitter" class="text-underline font-size-sm" target="_blank">twitter</a> by <a href="https://iconscout.com/contributors/vijay-parihar" class="text-underline font-size-sm" target="_blank">Vj Parihar</a> 
      </div>
      <div>
       <a href="https://iconscout.com/icons/arrow-circle-right" class="text-underline font-size-sm" target="_blank">Arrow Circle Right</a> by <a href="https://iconscout.com/contributors/phosphoricons" class="text-underline font-size-sm" target="_blank">Phosphor Icons</a>    
      </div>
      <div>
          <a href="https://iconscout.com/icons/python" class="text-underline font-size-sm" target="_blank">python</a> by <a href="https://iconscout.com/contributors/maninderkaur" class="text-underline font-size-sm" target="_blank">maninderkaur</a>
      </div>
      <div>
          <a href="https://iconscout.com/icons/mysql" class="text-underline font-size-sm" target="_blank">Mysql</a> by <a href="https://iconscout.com/contributors/icon-mafia" class="text-underline font-size-sm">Icon Mafia</a> on <a href="https://iconscout.com" class="text-underline font-size-sm">IconScout</a>
      </div>
      <div>
          <a href="https://iconscout.com/icons/c" class="text-underline font-size-sm" target="_blank">C</a> by <a href="https://iconscout.com/contributors/icon-mafia" class="text-underline font-size-sm">Icon Mafia</a> on <a href="https://iconscout.com" class="text-underline font-size-sm">IconScout</a>
      </div>
      <div>
       <a href="https://iconscout.com/icons/javascript" class="text-underline font-size-sm" target="_blank">Javascript</a> by <a href="https://iconscout.com/contributors/icon-mafia" class="text-underline font-size-sm">Icon Mafia</a> on <a href="https://iconscout.com" class="text-underline font-size-sm">IconScout</a>   
      </div>
      <div>
          <a href="https://iconscout.com/icons/php" class="text-underline font-size-sm" target="_blank">Php</a> by <a href="https://iconscout.com/contributors/icon-mafia" class="text-underline font-size-sm" target="_blank">Icon Mafia</a>
      </div>
      <div>
          <a href="https://iconscout.com/icons/react" class="text-underline font-size-sm" target="_blank">React</a> by <a href="https://iconscout.com/contributors/icon-mafia" class="text-underline font-size-sm">Icon Mafia</a> on <a href="https://iconscout.com" class="text-underline font-size-sm">IconScout</a>
      </div>
      <div>
          <a href="https://iconscout.com/icons/css" class="text-underline font-size-sm" target="_blank">Css</a> by <a href="https://iconscout.com/contributors/pixel-icons" class="text-underline font-size-sm" target="_blank">Pixel Icons</a>
      </div>
      <div>
          <a href="https://iconscout.com/icons/html" class="text-underline font-size-sm" target="_blank">Html</a> by <a href="https://iconscout.com/contributors/icon-54" class="text-underline font-size-sm" target="_blank">Icon 54</a>
      </div>
      <div>
          <a href="https://iconscout.com/icons/messages" class="text-underline font-size-sm" target="_blank">Messages</a> by <a href="https://iconscout.com/contributors/sullivanproject" class="text-underline font-size-sm">Sullivan Project</a> on <a href="https://iconscout.com" class="text-underline font-size-sm">IconScout</a>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      <div>
          
      </div>
    </div>
  </div>
</div>
  </div>
 </section>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>
