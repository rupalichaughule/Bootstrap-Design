<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    body
    {
      background-image: url(form1.jpg);
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="ashgen.php">ASHGEN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="ashgen.php">Home</a></li>
        <li><a href="contact.php">About</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="c.jpg" alt="Los Angeles" style="width:100%; height:200px">
        <div class="carousel-caption">
          <h3>Ashgen</h3>
          <p>Welcome to Ashgen!</p>
        </div>
      </div>

      <div class="item">
        <img src="gg.jpg" alt="Chicago" style="width:100%; height:200px">
        <div class="carousel-caption">
          <h3>WHO WE ARE</h3>
          <p>Ashgen Enterprises is a professional Digital Marketing, Website Design and
Development company.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="5.jpg" alt="New york" style="width:100%; height:200px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <div class="col-sm-10 text-left"> 
      <h1 class="text-info">Ashgen - Design & Development</h1>
      <p class="text-primary">Ashgen Enterprises is a professional Digital Marketing, Website Design & Web Development company. We take pride in our on-time delivery and ability to meet quick turnaround requests while exceeding customer quality demands. Customer satisfaction continues to be of utmost importance to Ashgen. CMS web design, as do Consistent quality , Constant innovation, Technology enhancement, Process improvement and Customer orientation are our strengths. Hence, We have developed our core competence and aligning objectives at all levels so as to realise synergy in operations. Also, it is our collaborative approach, creative input and emphasis on economical solutions. Therefore, allowed us to develop an impressive and diverse client list.</p>
      <hr>
      
<div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="me.jpg" target="_blank">
          <img src="me.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p class="text-warning">Hassle in making logo and banners ? Do you want creative and innovative web page designs ? Don't worry our creative designing team will make that for you. Ashgen builds custom design tailored to your unique brand identity.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="v.jpg" target="_blank">
          <img src="v.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p class="text-warning">No website is complete without professional written search engine optimized content. Ashgen's writers will win your clients over with rich and engaging content.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="cc.jpg" target="_blank">
          <img src="cc.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p class="text-warning">Do you have a website or web application that is not working the way it's meant to? Emergency debugging services of Ashgen will ensure your site is working to perfection in no time.</p>
          </div>
        </a>
      </div>
    </div>
  </div>

    </div>
    <div class="col-sm-2 sidenav">
      
      <h2 class="text-info">Login</h2>
  <form action="/action_page.php">
    <div class="form-group">
      
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="submit1" class="btn btn-info">Submit</button>
  </form>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright © Ashgen 2018 . All Rights Reserved.</p>
</footer>

</body>
</html>
