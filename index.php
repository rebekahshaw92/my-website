<?php include "contact.php" ?>

<!Doctype html>

<html lang="en">

    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main Stylesheet -->
    <Link rel="stylesheet" href="css/main.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


   <!-- Google Captcha -->

   <script src="https://www.google.com/recaptcha/api.js?render=6LcCP1EaAAAAAJ3Y4IWGDqQH-FFmUnrIcLgy2AyG"></script>

<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

<script type="text/javascript" src="js/script.js"></script>

    <title>Rebekah Shaw | Web Developer</title>
</head>
<body id="page-top">
    <!-- Navbar -->
    <header id="header">
  <div class="container-fluid">
        <div id="hamburger" class="visible">
  <span></span>
  <span></span>
  <span></span>  
</div>

<div id="nav" class="close">
  <ul>
    <li><a href="#about">About</a></li>
    <li><a href="#skills">What I Do</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</div> 

        
        <!-- Header -->
        <div class="container-fluid header justify-content-center">
            <h1 class="name text-uppercase animate-reveal animate-first"> Rebekah Shaw </h1>
            <h1 class="title font-weight-bold animate-reveal animate-second"> Full Stack Web Developer<span>.<spoan></h1>
            <p class="mainText animate-reveal animate-third">I make websites and have a passion for all things web design.</p>

            <div class="scroll">
            <a href="#portfolio"><span></span></a>
</div>
</div>
</header>

<!-- About Me -->
<section class="container-fluid" id="about">
    <div class="row">
<div class="col-lg-6 reveal">
<h1 class="aboutTitle">Hello I'm Rebekah Shaw<span>.</span></h1>

<p class="aboutText">I am a full-time web developer who specialises in <span>Front-end Web Development</span>, <span>Back-end Web Development</span> and <span>WordPress</span>. With a BSc (Hons) in Interactive Multimedia Design. </p>
<p class="aboutText2">I love creating dynamic and beautiful websites. I have been a designer for almost five years and have enjoyed every moment of it. I create custom made, <span>responsive websites</span> designed to meet all your requirements. I understand the importance of a well-designed website and the impact it makes online and how it can help grow your business.</p>

</div>
<div class="col-lg-5 align-items-center mx-auto d-block justify-content-center reveal me">
    <img class="myImage" src="images/IMG_2197.jpg" alt="me" />
</div>
</div>
</section>

<!-- Skills -->

<section class="container-fluid" id="skills">
    <h1 class="skilsTitle">What I Do<span>.</span></h1>

    <div class="row justify-content-center reveal">
    <div class="col-lg-3 col-md-4 text-center">
       <i class="text-primary fa-3x fas fa-laptop"></i>
      
       <h3 class="mainTitle">Responsive Web Design</h3>
       <p class="myMainText">I build responsive websites which can adapt to any device.</p>

</div>

<div class="col-lg-3 col-md-4 text-center">
       <i class="text-primary fa-3x fas fa-chart-line"></i>
       <h3 class="mainTitle">Digital Marketing</h3>
       <p class="myMainText">I can help with your online marketing needs. Applying digital marketing tools to target more specific audiences.</p>

</div>

<div class="col-lg-3 col-md-4 text-center">
       <i class="text-primary fa-3x fab fa-google"></i>
       <h3 class="mainTitle">Search Engine Optimisation</h3>
       <p class="myMainText">I can help improve the visibility of your site and drive sales. </p>

</div>
</div>
</section>

<!-- My Work -->
<section class="container-fluid" id="portfolio">
<h1 class="portfolioTitle">Portfolio<span>.</span></h1>
    <div class="row no-gutters">
        <div class="col-lg-4 p-0">
            <div class="image firstImage">
            <img class="img-fluid" src="images/antrimelim.png" alt="Antrim Elim Website">
               <div class="middle">
                   <a href="http://antrimelimchurch.com" target="_blank" class="middleText">Antrim Elim Website</a>
            
            </div>
            </div>
            </div>

          <div class="col-lg-4 p-0">
            <div class="image">
            <img class="img-fluid" src="images/greers.png" alt="Greers Travel Website">
            <div class="middle">
                   <a href="https://greerstravel.com" target="_blank" class="middleText">Greers Travel Website</a>
            </div>
            </div>
            </div>

            <div class="col-lg-4 p-0">
            <div class="image">
            <img class="img-fluid" src="images/3Columm.png" alt="3-Column Preview Card Component">
            <div class="middle">
                   <a href="https://rebekahshaw92.github.io/3-column-preview-card-component/" target="_blank" class="middleText">3-Column Preview Card Component</a>
            </div>
            </div>
            </div>
     </div>

     <div class="row no-gutters">
        <div class="col-lg-4 p-0">
            <div class="image firstImage">
            <img class="img-fluid" src="images/socialProof.png" alt="Social Proof Section">
               <div class="middle">
                   <a href="https://rebekahshaw92.github.io/social-proof-section-master/" target="_blank" class="middleText">Social Proof Section</a>
            </div>
            </div>
            </div>

          <div class="col-lg-4 p-0">
            <div class="image">
            <img class="img-fluid" src="images/order.png" alt="Order Summary Component">
            <div class="middle">
                   <a href="https://rebekahshaw92.github.io/order-summary-component-main/" target="_blank" class="middleText">Order Summary Component</a>
            </div>
            </div>
            </div>

            <div class="col-lg-4 p-0">
            <div class="image">
            <img class="img-fluid" src="images/article.png" alt="Article Preview Component">
            <div class="middle">
                   <a href="https://rebekahshaw92.github.io/article-preview-component/" target="_blank" class="middleText">Article Preview Component</a>
            </div>
            </div>
            </div>
     </div>
    

</section>

<!-- Contact Form -->

<section class="container-fluid" id="contact" action="contact.php">
<h1 class="contactTitle">Contact<span>.</span></h1>

<form id="contactform" class="reveal" method="post">

<div class="row g-3 justify-content-center">

<div class="col-12">
        <input type="text" id="contactName" name="name" placeholder="Name" required="required" value="<?php echo htmlspecialchars($_POST['name']); ?>">

        <?php echo "<p class='text-danger'>$errorName</p>";?>
</div>
</div>

<div class="row g-3 justify-content-center">
<div class="col-12">
                <input type="email" id="email" name="email" placeholder="Email" required="required" alue="<?php echo htmlspecialchars($_POST['email']); ?>">

                <?php echo "<p class='text-danger'>$errorEmail</p>";?>
                </div>
                </div>

                <div class="row g-3 justify-content-center">
                
                <div class="col-12">
                <input type="text" id="number" name="number" placeholder="Your Phone Number" required="required" alue="<?php echo htmlspecialchars($_POST['number']); ?>">

                <?php echo "<p class='text-danger'>$errorNumber</p>";?>
                </div>
                </div>
             
                
                <div class="row g-3 justify-content-center">
                <div class="col-12">
                <input type="text" id="website" name="website" placeholder="Website" required="required" alue="<?php echo htmlspecialchars($_POST['website']);?>">
                </div>
                </div>

                <div class="row justify-content-center">
                <div class="col-12">
                
        <textarea id="message" rows="4" name="message" placeholder="Message" required="required"></textarea>
        <?php echo "<p class='text-danger'>$errorMessage</p>";?>

</div>
</div>
        
        <div class="row justify-content-center">
        <div class="col-12">

        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">

                        <?php echo $result; ?>
</div>       
</div>
                                    
    </form>

</section>

<!-- Footer -->
<footer>
<section class="page-section" id="myFooter">
    <div class="container">
      <div id="social">
      <div class="row justify-content-center">
<div class="col-2 col-lg-1">
<a href="https://github.com/rebekahshaw92" target="_blank">
      <i class="mySocial fab fa-github"></i>
</a>
      </div>

      <div class="col-2 col-lg-1">
        <a href="https://twitter.com/x_beckyboo_x?lang=en-gb" target="_blank">
      <i class="mySocial fab fa-twitter"></i>
</a>
      </div>

      <div class="col-2 col-lg-1">
      <a href="https://www.instagram.com/x_beckyboo_x/?hl=en" target="_blank">
      <i class="mySocial fab fa-instagram"></i>
</a>
      </div>

      <div class="col-2 col-lg-1">
      <a href="https://www.linkedin.com/in/rebekahshaw92/" target="_blank">
      <i class="mySocial fab fa-linkedin-in"></i>
</a>
      </div>
</div>

<p class="text-uppercase copyrightText" id="copyright">&copy; <span id="copyright_span"></span> Rebekah Shaw All Rights Reserved</p>

</div>
</div>
      </section>

<!-- Google Analytics -->
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104402465-1', 'auto');
  ga('send', 'pageview');

</script>


<script type="text/javascript" src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</footer>
</html>