<?php include "contact.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

	 <title>Rebekah Shaw | Web Developer</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Main stylesheet -->

  <link rel="stylesheet" href="css/style.css">

 <!-- Bootstrap js files -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script src="js/main.js"></script>

  <!-- Google Fonts plugin -->

    
  <link href="https://fonts.googleapis.com/css?family=Kanit:900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Almendra&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Hammersmith+One&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<!-- navbar -->
  <header class="header">
    <nav class="navbar navbar-inverse navbar-light bg-faded">
  <div class="container-fluid">
    <div class="navbar-header">
        <button 
        type="button" 
        class="navbar-toggle" 
        data-toggle="collapse" 
        data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="#home">Rebekah Shaw</a>

    </div>

 <!-- Links to each section -->

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
         <li>
            <a href="#skills">Skills</a>
        </li>
          <li>
            <a href="#about">About</a>
        </li>
          <li>
            <a href="#portfolio">Portfolio</a>
        </li>

          <li>
            <a href="#contact">Contact</a>
        </li>
          
        </ul>

    </div>
</nav>  

<!-- Header -->
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="description">
            <h1 class="title"><span>Hello, I'm <span id = "name">Rebekah Shaw.</span> I Design Websites.</span></h1>
            
            <div id="button">
             <a class="btn btn-outline-secondary btn-lg" href="#portfolio">View my work</a>
        </div>
    </div>
  </div>
    </header>

    <!-- Skills -->

    <div class="skills" id="skills">
        <h1 class="text-center">Skills</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4
            col-md-4 col-sm-12">
                <img src="images/coding.png" class="img-fluid">
                <h1>Front-end Development</h1>
                <p>I love being able to bring ideas together in order to not only make a website but to make it user friendly on any device the user might be using.</p>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/php.png" class="img-fluid">
                <h1>Back-end Development</h1>
    <p>I love not only knowing a site looks well but also that it works well. I love being able to work on the back-end and making the site come together.</p>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/web.png" class="img-fluid">
                <h1>Search Engine Optimisation</h1>
    <p>Once a site has been made it not only needs to look good and work well, it also needs to be found by potential customer. </p>
            </div>
        </div> 
    </div>
</div>

 <div class="about" id="about">
        <h1 class="text-center">About</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4
            col-md-4 col-sm-12">
            <img src="images/me.png">
        </div>
          <div class="col-lg-7
            col-md-7 col-sm-12">
            <p>I am recent Interactive Multimedia Design graduate from Ulster University with skills in Front-end Web Development, Back-end Web Developmen, Wordpress, Google Adwords and Google Analytics. I have a passion for the web and I love creating websites that allow your website to have a higher ranking on Google. While I was at University I spent my placement year working with Google Adwords and am now a registered Google Partner.</p>

        </div>
            </div>
        </div>
</div>

 <div class="portfolio" id="portfolio">
        <h1 class="text-center">Portfolio</h1>
        <div class="row">
        <div class="container-fluid">
                   <div class="col-lg-2
            col-md-2 col-sm-12"></div>
                <div class="col-lg-4
            col-md-4 col-sm-12">
               <figure id="snip1538"> <img src="images/antrimelim.png" alt="Antrim Elim Church website">
          <figcaption>
    <h3>Antrim <span>Elim Church</span></h3>

    <a href="http://antrimelimchurch.com"target="_blank"></a>
  </figcaption>
           </figure>

        </div>

          <div class="col-lg-4
            col-md-4 col-sm-12">
             <figure id="snip1538"><img src="images/greers.png" alt="Greers Travel Office website">

        <figcaption>
    <h3>Greers <span>Travel Office</span></h3>
 

    <a href="http://greerstravel.com"target="_blank"></a>
  </figcaption>
</figure>
        </div>
    </div>
        </div>
    </div>
</div>
<div class="contact" id="contact">
        <h1 class="text-center">Contact</h1>
        <div class="container-fluid">
              <form id="contactform" method="post" action="#contact">

                <input type="text" class="form-control" id="website" name="website" />

                <input type="text" id="contactname" name="name" placeholder="Name" required="required" value="<?php echo htmlspecialchars($_POST['name']); ?>">

                        <?php echo "<p class='text-danger'>$errorName</p>";?>

                        <input type="email" id="email" name="email" placeholder="Email"required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>">

                        <?php echo "<p class='text-danger'>$errorEmail</p>";?>

                <textarea id="message" rows="4" name="message" placeholder="Message" required="required"></textarea>

                <?php echo htmlspecialchars($_POST['message']);?>


                <?php echo "<p class='text-danger'>$errorMessage</p>";?>


                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            

                            <?php echo $result; ?>
                        
            </form>
         </div>
</div>
</div>

<div id="social">
     <div class="row">
                <div class="
            col-md-2">
        <div id="facebook">
            <a href="https://www.facebook.com/rebekah.shaw.355" target="_blank" >
                <img src="images/facebook-logo-button.png" onmouseover="this.src='images/facebook-logo-in-circular-button-outlined-social-symbol.png'" onmouseout="this.src='images/facebook-logo-button.png'" alt="" /></a>
        </div>
    </div>


                <div class="col-md-2">
        <div id="twitter">
            <a href="https://twitter.com/x_beckyboo_x?lang=en-gb" target="_blank" >
                <img src="images/twitter-logo-button.png" onmouseover="this.src='images/twitter-circular-button.png'" onmouseout="this.src='images/twitter-logo-button.png'" alt="" /></a>
        </div>
    </div>


                <div class="col-md-2">
        <div id="instagram">
            <a href="https://www.instagram.com/x_beckyboo_x/?hl=en" target="_blank" >
                <img src="images/instagram.png" onmouseover="this.src='images/instagram2.png'" onmouseout="this.src='images/instagram.png'" alt="" /></a>
        </div>
    </div>


                <div class="col-md-2">
        <div id="linkedin">
            <a href="https://www.linkedin.com/in/rebekahshaw92/" target="_blank" >
                <img src="images/linkedin.png" onmouseover="this.src='images/social-linkedin-circular-button.png'" onmouseout="this.src='images/linkedin.png'"  alt="" /></a>

        </div>
    </div>
      </div>

    <p class="text-uppercase" id="copyright">&copy; <span id="copyright_span"></span> Rebekah Shaw All Rights Reserved</p>

</div>

 <script src="js/script.js"></script>

<!-- Google Analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104402465-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- End of Google Analytics -->
</footer>
</html>
