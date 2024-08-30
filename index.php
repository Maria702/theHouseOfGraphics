<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
   
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Sevillana&display=swap" rel="stylesheet"><link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<title>Maria</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MARIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service/service.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<!-- ================================================= carousel -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/graphicDesigner.jpg" alt="Graphic Design" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="carousel-heading">Graphic Design</h3>
        <p>"Innovative Design for a Dynamic World"</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/videoEditing.jpg" alt="Video Editing" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="carousel-heading">Video Editing</h3>
        <p>"Bringing Your Vision to the Screen"</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/webDevelopment.jpg" alt="Web Development" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="carousel-heading">Web Development</h3>
        <p>"Transforming Ideas into Interactive Websites"</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<!-- ============================================================= About Us -->
<section>
    <div class="pt-5">
      <h2  class="text-center">ABOUT US</h2>
    </div>
    <div class="container-fluid"> 
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 pl-4">
        <img class="img-fluid image  shadow-lg p-3 mb-5 bg-white " src="images/maria.jpg" alt="maria" >
      </div>

      <div class="col-lg-6 col-md-6 col-12">
        <h1 class="display-4 ">I am <span>MARIA </span> </h1>
        <p class="pr-3 text-justify">With over 11 years of professional experience, I specialize in graphic design, video editing, and web development. My extensive background in these areas has equipped me with a deep understanding of visual aesthetics, multimedia production, and interactive design. I have successfully managed a diverse range of projects, delivering high-quality results that meet both creative and technical standards. My expertise encompasses everything from crafting compelling graphics and engaging video content to developing responsive and user-friendly websites.
      <br>
      <a href="about.php">Check More</a>  
      </p>
      
      </div>
    </div>
    </div>
</section>



<!-- ============================================================= Services -->
<section>
    <div class="pt-5">
      <h2  class="text-center">OUR SERVICES</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-12">
        <img src="images/graphicService.jpg" class="card-img-top shadow-lg" alt="graphicDesigner">
          <div class="card-body">
            <h5 class="card-title">Graphic Design</h5>
              <p class="card-text text-justify">
              We offer a diverse range of graphic design services to elevate your brand and communicate your message effectively. Our expertise includes logo design, flyer and brochure creation, poster and banner design, as well as a variety of other design solutions tailored to your specific needs.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        
        <div class="col-md-4 col-lg-4 col-12">
        <img src="images/videoEditing.jpg" class="card-img-top shadow-lg" alt="videoEditing">
        <div class="card-body">
            <h5 class="card-title">Video Editing</h5>
              <p class="card-text text-justify">
                Our video editing services refine your raw footage into professional content. We manage cutting, arranging, and enhancing clips with effects, transitions, and soundtracks to deliver a high-quality final product that captivates your audience and conveys your message effectively.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        
        <div class="col-md-4 col-lg-4 col-12">
        <img src="images/webDevelopment.jpg" class="card-img-top shadow-lg" alt="webDevelopment">
        <div class="card-body">
            <h5 class="card-title ">Web Development</h5>
              <p class="card-text text-justify">
                Our web development services deliver custom, high-performance websites designed to meet your specific needs. We specialize in creating user-friendly, responsive sites that combine intuitive design with robust functionality, ensuring a seamless experience for your visitors and aligning with your business objectives.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

      </div>
    </div>
</section>



<!-- ============================================================= Work -->
<section>
    <div class="pt-5">
      <h2  class="text-center">OUR WORK</h2>
    </div>

    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/logo11.jpg " class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/logo16.png" class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/Design7.png" class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/Design6.png" class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
      </div>
<br>
      <div class="row">
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/logo1.png" class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/logo3.png" class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/logo4.png" class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
        <div class="col-md-3 col-lg-3 col-12 pb-4">
          <img src="images/logo5.png" class="card-img-top shadow-lg" alt="graphicDesigner">
        </div>
      </div>
    </div>
</section>


<!-- ==================================================================== FORM -->
<section>
    <div class="pt-5">
      <h2  class="text-center">SCHEDULE A CALL</h2>
    </div>

    <div class="container-fluid w-50 m-auto">
    <form action="userData.php" method="post">
    <div class="form-group">
    <label >User Name</label>
    <input type="text" name="user" class="form-control"  >
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" >
  </div>

  <div class="form-group">
    <label>Mobile No</label>
    <input type="text" name="phone" class="form-control" >
  </div>
  <div class="form-group">
    <label >Message</label>
   <textarea name="message" class="form-control"></textarea>
  </div>
  <button type="submit"  class="btn btn-success">Send Message</button>
</form>
    </div>
    <br>
</section>

<section>
  <div class="container-fluid bg-dark ">
    <div class="row">
      <div class="col-md-6 text-light pt-3">
        <h1 class="talk">Lets talk</h1>
        <p><small>Every Project start with a chat. We leads our client conversations. <br>
          and we will happy to discuss your project. 
          We will also pull in the right <br> people from the team when needed. </small>
        </p>
        <a href="https://wa.me/message/NDMJDCPTE45TG1" target="_blank" >
        <button class="btn btn-success"> Tell Us About your project</button></a>
      </div>

      <div class="col-md-6 text-light pt-5">
        <div class='row'>
          <div class="col-md-2">
            <h4  class="text">Email: </h4>
          </div>
          <div class="col-md-6 text-left">
            <p>thehouseofgraphics6@gmail.com </p>
          </div>
        </div>

        <div class='row'>
          <div class="col-md-2">
            <h4 class="text">Phone </h4>
          </div>
          <div class="col-md-6 text-left">
            <p>+92 330 2910057 </p>
          </div>
        </div>

        <div class='row'>
          <div class="col-md-12 text-left pl-5">
            <a href="https://www.facebook.com/profile.php?id=61563503850855" target="_blank"> <i class="fa fa-facebook fa-2x" ></i></a>
             <i class="fa fa-instagram fa-2x"></i>
             <a href="https://www.behance.net/thehouseofgraphics" target="_blank"> <i class="fa fa-behance fa-2x" ></i></a>
             <a href="https://www.linkedin.com/in/the-house-of-graphics-560199320/" target="_blank"><i class="fa fa-linkedin fa-2x" ></i></a>
          </div>
        </div>

      </div>
    </div>
  
    <br>

    <div class="row">
      <div class="col-md-12 text-center text-light">
        <p class="para">@ COPYRIGT 2024  THE HOUSE OF GRAPHHICS. ALL RIGHT RESERVED</p>
      </div>
    </div>

  </div>
</section>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>