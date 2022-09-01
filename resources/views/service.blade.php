<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>limelight</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout in_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="/images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <h1 class="display-3"> CV Generator</h1>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1" style="
                  margin: inherit; ">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="{{url('/')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('about')}}">About</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('service')}}">Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('testimonial')}}"> Testimonial </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!--  service -->
      <div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  
               </div>
            </div>
            <div style="float: left;width: 40%;height:1000px;padding-right:20px;">
               
                  <img class="card-img-top" src="/images/resume{{$data}}.png" alt="Card image cap">
                 
                 

            </div>
            <div style="float: right;width: 60%;height:auto;padding:20px;"> 
               <div class="titlepage">
                  <h2>Fill this form to Generate <span class="green">Your Resume</span></h2>
               </div>
               <form class="row g-3" action="/test" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label h3">Full Name</label>
                    <input type="text" class="form-control" name="name">
                    <input type="hidden" name="resid"value="{{$data}}">
                    <br>
                  </div>
                  <div class="col-md-6">
                     <label for="inputEmail4" class="form-label h3">Email</label>
                     <input type="email" class="form-control" name="email">
                   </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label h3">Address</label>
                    <br>
                    <label for="inputAddress" class="form-label h6">House No.</label>
                    <input type="text" class="form-control" name="house" placeholder="Enter Your House No./Colony/Building Here">
                    <br>
                  </div>
                  <div class="col-md-6">
                     <label for="inputCity" class="form-label h6">City</label>
                     <input type="text" class="form-control" name="city">
                   </div>
                   <div class="col-md-4">
                     <label for="inputState" class="form-label h6">State</label>
                     <input type="text" class="form-control" name="state" >
                   </div>
                   <div class="col-md-2">
                     <label for="inputZip" class="form-label h6">Pincode</label>
                     <input type="text" class="form-control" name="pincode">
                     <br>
                   </div>
                   
                   <div class="col-12">
                     <label class="visually-hidden h3" for="autoSizingInputGroup">Social Media</label>
                     <div class="input-group">
                       <div class="input-group-text">@</div>
                       <input type="text" class="form-control" name="social1" placeholder="Username">
                       <input type="text" class="form-control" name="social2" placeholder="Username">
                     </div>
                     <br>
                   </div>
                   <br>
                   <div class="col-6">
                     <label class="visually-hidden h3" for="autoSizingInputGroup">Skills</label>
                     <div class="input-group">
                       <div class="input-group-text">Personal</div>
                       <input type="text" class="form-control" name="pskill1" placeholder="">
                       <input type="text" class="form-control" name="pskill2" placeholder="">
                     </div>
                   </div>
                   <div class="col auto">
                     <label class="visually-hidden h3" for="autoSizingInputGroup">Skills</label>
                     <div class="input-group">
                       <div class="input-group-text">Professional</div>
                       <input type="text" class="form-control" name="prskill1" placeholder="">
                       <input type="text" class="form-control" name="prskill2" placeholder="">
                     </div>
                     <br>
                   </div>
                   <div class="col-6">
                     <label class="visually-hidden h3" for="autoSizingInputGroup">Mobile No</label>
                     <div class="input-group">
                       <div class="input-group-text">+91</div>
                       <input type="text" class="form-control" id="autoSizingInputGroup" name="mobile"placeholder="">
                       
                     </div>
                     <br>
                   </div>
                   <div class="col-md-6">
                      <label for="inputEmail4" class="form-label h3">Website</label>
                      <input type="url" class="form-control" name="website">
                    </div>
                    <div class="col-12">
                     <label class="visually-hidden h3" for="autoSizingInputGroup">Education</label>
                     <div class="input-group">
                       <label class="input-group-text">Graduation</label>
                       <input type="text" class="form-control" name="GC" placeholder="Course Name">
                       <label class="input-group-text">Instituition</label>
                       <input type="text" class="form-control" name="Gins" placeholder="">
                       <label class="input-group-text">Year</label>
                       <input type="text" class="form-control" name="GYear" placeholder="19xx-20xx">
                       <label class="input-group-text">Perc %</label>
                       <input type="text" class="form-control" name="Gper" placeholder="">
                     </div>
                   </div>
                   <div class="col-12">
                     <br>
                     <div class="input-group">
                       <label class="input-group-text">Post Gradu.</label>
                       <input type="text" class="form-control" name="PGC" placeholder="Course Name">
                       <label class="input-group-text">Instituition</label>
                       <input type="text" class="form-control" name="PGIns" placeholder="">
                       <label class="input-group-text">Year</label>
                       <input type="text" class="form-control" name="PGYear" placeholder="19xx-20xx">
                       <label class="input-group-text">Perc. %</label>
                       <input type="text" class="form-control" name="PGPer" placeholder="">
                     </div>
                     <br>
                   </div>
                   <div class="col-12">
                     <label class="visually-hidden h3" for="autoSizingInputGroup">Experience</label>
                     <div class="input-group">
                        <textarea rows="4" style="height:100%;"class="form-control" name="Exp" aria-label="With textarea" placeholder="Infosys.Pvt.Ltd (2000-20xx)
Sr. Engineer
DevOps.........."></textarea>
                     </div>
                   </div>
                  
                  
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
           
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="" >
                    
                     <div class="col-md-12">
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-3 col-sm-6">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                     <p class="variat pad_roght2">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by 
                     </p>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>LET US HELP YOU </h3>
                     <p  class="variat pad_roght2">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by 
                     </p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h3>INFORMATION</h3>
                     <ul class="link_menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html"> About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="testimonial.html">Testimonial</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h3>OUR Design</h3>
                     <p  class="variat">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by 
                     </p>
                  </div>
                  <div class="col-md-6 offset-md-6">
                     <form id="hkh" class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/js/custom.js"></script>
      <script src="https://cdn.tailwindcss.com"></script>
   </body>
</html>