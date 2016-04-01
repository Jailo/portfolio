<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tester</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper home">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
            <!--Think about changing font and color of name. ex, skillcrush -->
              <h3 class="masthead-brand">Jaiela London</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#" onclick="$('.home').animatescroll();">Home</a></li>
                  <li><a href="#" onclick="$('.projects').animatescroll();">Projects</a></li>
                  <li><a href="#" onclick="$('.contact').animatescroll();">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Hi! I'm Jaiela</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
          </div>


        </div>

      </div>

    </div>

    

    <!-- The next thing i want to do is to make it so that the user can scroll down, and see projects i've worked on in collums (rows of three) -->
    <!--Then a contact me page at the bottom -->

    <div class="projects">

    <h1>Projects</h1>

  <div class="container">
    <div class="row work-row">
      <div class="col-md-4 row-space">
        
       <img class="img-rounded" src="http://s13.postimg.org/9fr7jf9tz/RR_image.png " alt="image">
        
        <h2>Header two</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nulla id mattis luctus. Integer venenatis augue id quam viverra mattis. Nam quis lectus non diam blandit tincidunt. Nam consequat, nisi quis fringilla pulvinar, dui orci pharetra nulla, eget vehicula libero ante sit amet nulla.</p>
      </div>
      
      <div class="col-md-4 row-space">
        
        <img class="img-rounded" src="http://s8.postimg.org/4y99efut1/blog.png" alt="image">
  
        <h2>Header two</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nulla id mattis luctus. Integer venenatis augue id quam viverra mattis. Nam quis lectus non diam blandit tincidunt. Nam consequat, nisi quis fringilla pulvinar, dui orci pharetra nulla, eget vehicula libero ante sit amet nulla. </p>
      </div>
      
      <div class="col-md-4 row-space">
        
        <img class="img-rounded" src="http://s8.postimg.org/dmquhuaph/tech_image.png" alt="image">
        
        <h2>Header two</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nulla id mattis luctus. Integer venenatis augue id quam viverra mattis. Nam quis lectus non diam blandit tincidunt. Nam consequat, nisi quis fringilla pulvinar, dui orci pharetra nulla, eget vehicula libero ante sit amet nulla. </p>
      </div>   
    </div>
   </div> 




   <hr>
       
      <div class="contact">
        <h1 class="center-text">Connect with me</h1>

    <div class="container">
    
    <div class="row">

      <div class="col-md-5">
         
        <img src="https://scontent-lga3-1.xx.fbcdn.net/hprofile-ash2/v/t1.0-1/p160x160/482616_4584597296255_873839107_n.jpg?oh=980b009d019c042bf5e9367539e2c64a&amp;oe=5793AEB9" alt="image" class="photo-me img-circle" width="150" height="150">

        <a href="#"><img src="twitter.png" class="social-buttons"></a>
        <a href="#"><img src="facebook.png" class="social-buttons"></a>
        <a href="#"><img src="linkedin.png" class="social-buttons"></a>
      </div>

    <!-- The tut on youtube seem to work, It's just MY code thats not working at this moment. So I'm gonna sleep on it. Remember girl, YOU are super smart and will figure this out in no time! Don't forget to be mindful of how you're spending your time tomorrow. And play assassins creed for pete's sake!-->

      <div class="col-md-7">

       <?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $missingName = '<p><strong>Please enter your name!</strong></p>';
      $missingEmail = '<p><strong>Please enter your email address!</strong></p>';
      $missingMessage = '<p><strong>Please enter a message!</strong></p>';
      $invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';


      if($_POST["submit"]){
        if(!$name){
          $errors .= $missingName;
        }else{
          $name = filter_var($name,FILTER_SANITIZE_STRING);
        }


      if(!$email){
        $errors .= $missingEmail;
        }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $errors .= $invalidEmail;
        }
      }


      if(!$message){
        $errors .= $missingMessage;
      }else{
        $message = filter_var($message,FILTER_SANITIZE_STRING);
      }


      if($errors){
        $resultsMessage = $errors;
      }

     echo $resultMessage;

      }
      ?>

        <div class="alert alert-danger">
        <p><strong>Please enter your name!</strong></p>
        <p><strong>Please enter your email!</strong></p>
        <p><strong>Please enter a message!</strong></p>
        </div>




         <form action="contact.php" method="post" class="form-horizontal">

             <div class="form-group">
             <label for="name" class="col-xs-2 control-label">Name</label>
                         
             <div class="col-xs-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">                      
              </div>
            </div>


            <div class="form-group">
            <label for="email" class="col-xs-2 control-label">Email</label>
            <div class="col-xs-12">
            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            </div>
         </div>

            
           <div class="form-group">
           <label for="message" class="col-xs-2 control-label">Message</label>    
          
          <textarea class="form-control col-xs-12" id="message" name="message" rows="8"></textarea>          
         </div>
      

           <div class="form-footer col-xs-12">
           <button class="btn btn-primary pull-right" type="submit" name="submit">Send</button>
              <a href="#" class="pull-left" onclick="$('.home').animatescroll();">Back to top</a>
                                                  
                 </form>
           </div>       
      </div>
  </div>

<div class="navbar navbar-inverse navbar-fixed-bottom">

      <div class="container">
        <p class="navbar-text pull-left">Site Built By Jaiela London</p>
         <a href="#" class="navbar-text pull-right" onclick="$('.home').animatescroll();">Back to top</a>

      </div>
     </div>
      </div>



  </div><!--projects-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.js"></script>
    <script src="animatescroll.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body>
</html>
