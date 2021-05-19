<?php include "contact.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">


    <script src="js/main.js"></script>
    <!-- Main stylesheet -->

    <link rel="stylesheet" href="css/style.css">


<!-- Google Captcha -->

 <script src="https://www.google.com/recaptcha/api.js?render=6LdOYyMaAAAAAD0prrAl4_0m0lIWouzgJWAorKVm"></script>
 
    
        <title>Rebekah Shaw | Web Developer</title>

  </head>
  <body id="page-top">
    <!-- Navbar -->
    <header class ="header">
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">

  <div class="container">
  
    <a class="navbar-brand" href="#page-top">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav mr-auto" id="myNavbar">
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>


  <!-- Header -->


  <div class="row h-100 align-items-center justify-content-center text-center">
 
        <div class="col-lg-10 align-self-end">
            <h1 class="title text-uppercase text-white font-weight-bold"><span>Hello, I'm <span id = "name">Rebekah Shaw.</span> I Design Websites.</span></h1>
            <hr class="divider my-3" />
</div>
            
<div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
            <div id="button">
             <a class="btn btn-outline-secondary btn-lg" href="#portfolio">View my work</a>
        </div>
        </div>
</div>
    </header>

    <!-- About -->

    <section class="page-section" id="about">

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-8 text-center">
    <h2 class="text-white mt-0 font-weight-bold" id="aboutTitle">About</h2>
    <hr class="divider my-4" />
    <p class="text-white-50 mb-4">I am a recent Interactive Multimedia Design graduate from Ulster University with skills in Front-end Web Development, Back-end Web Developmen, Wordpress, Google Adwords and Google Analytics. I have a passion for the web and I love creating websites that allow your website to have a higher ranking on Google. While I was at University I spent my placement year working with Google Adwords and am now a registered Google Partner.</p>
    </div>
    </div>
    </div>
    </section>

    <!-- Skills --> 


    <section class="page-section" id="skills">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-8 text-center">
    <h2 class="text-black mt-0 font-weight-bold" id="aboutTitle">Skills</h2>
    <hr class="divider my-3" />

    <div class="row">
       <div class="col-lg-4 col-md-4 text-center">
       <i class="text-primary fa-4x fas fa-code"></i>
       <h3>Front-end Development</h3>
       <p class="mainText">I love being able to bring ideas together in order to not only make a website but to make it user friendly on any device the user might be using.</p>

</div>

       <div class="col-lg-4 col-md-4 text-center">
       <i class="text-primary fa-4x fas fa-cogs"></i>
       <h3>Back-end Development</h3>
       <p class="mainText">I love not only knowing a site looks well but also that it works well. I love being able to work on the back-end and making the site come together.</p>

</div>

<div class="col-lg-4 col-md-4 text-center">
       <i class="text-primary fa-4x fas fa-search"></i></i>
       <h3>Search Engine Optimisation</h3>
       <p class="mainText">Once a site has been made it not only needs to look good and work well, it also needs to be found by potential customer.</p>

</div>
</div>
</div>
</div>
</div>
</section>

<section class="page-section" id="portfolio">
<div class="container p-0">
<div class="row no-gutters">
<div class="col-lg-6 col-sm-3">
  <div class="image">
    <img class="img-fluid" src="images/antrimelim.png" alt="Antrim Elim Website" />
                       <a class="portfolio-box" href="http://antrimelimchurch.com" target="_blank">
                            <div class="overlay">
                            <div class="portfolio-box-caption">
                                <div class="project-name">Antrim Elim Church</div>
                            </div>
                       </a>
                    </div>
                  </div>
                </div>
                    <div class="col-lg-6 col-sm-3">
                      <div class="image">
                    <img class="img-fluid" src="images/greers.png" alt="Greers Travel Website" />
                      <div class="overlay">
                    <a class="portfolio-box" href="http://greerstravel.com" target="_blank">
                             <div class="portfolio-box-caption">
                                <div class="project-name">Greers Travel Office</div>
                            </div>
                       </a>
                    </div>
                    </div>
                    </div>

</div>
</div>
</div>
</section>

<section class="page-section" id="contact">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-8 text-center">
      <h2 class="text-white mt-0 font-weight-bold" id="aboutTitle">Contact</h2>
      <hr class="divider my-4" />
      <form id="contactform" method="post" action="#contact">


        <input type="text" id="contactname" name="name" placeholder="Name" required="required" value="<?php echo htmlspecialchars($_POST['name']); ?>">

                <?php echo "<p class='text-danger'>$errorName</p>";?>

                <input type="email" id="email" name="email" placeholder="Email"required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>">

                <?php echo "<p class='text-danger'>$errorEmail</p>";?>

        <textarea id="message" rows="4" name="message" placeholder="Message" required="required"></textarea>


        <?php echo "<p class='text-danger'>$errorMessage</p>";?>

                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary"/>
                        

                    <?php echo $result; ?>
                
    </form>

  </div>
  </div>
  </div>
</section>
          
  </body>
  <footer>
    <section class="page-section" id="myFooter">
    <div class="container">
      <div id="social">
      <div class="row justify-content-center">
<div class="col-lg-1 col-sm-2">
<a href="https://github.com/rebekahshaw92" target="_blank" >
      <i class="mySocial fab fa-github"></i>
</a>
      </div>

      <div class="col-lg-1 col-sm-2">
        <a href="https://twitter.com/x_beckyboo_x?lang=en-gb" target="_blank" >
      <i class="mySocial fab fa-twitter"></i>
</a>
      </div>

      <div class="col-lg-1 col-sm-2">
      <a href="https://www.instagram.com/x_beckyboo_x/?hl=en" target="_blank" >
      <i class="mySocial fab fa-instagram">
      </i>
</a>
      </div>

      <div class="col-lg-1 col-sm-2">
      <a href="https://www.linkedin.com/in/rebekahshaw92/" target="_blank" >
      <i class="mySocial fab fa-linkedin-in"></i>
</a>
      </div>
</div>

<p class="text-uppercase copyrightText" id="copyright">&copy; <span id="copyright_span"></span> Rebekah Shaw All Rights Reserved</p>

</div>
</div>
      </section>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104402465-1', 'auto');
  ga('send', 'pageview');

</script>


        <!-- Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
</footer>
</html>