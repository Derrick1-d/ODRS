<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ODR</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
   </head>
   <body>
      <!-- header top section start -->
      <div class="header_top_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="header_top_main">
                     <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 999 </a></div>
                     <div class="call_text_2"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> derrictabiri046@gmail.com</a></div>
                     <div class="call_text_1"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> University Of Cape Coast </a></div>
                     <div class="call_text_1">
                     <li class="nav-item">
                        <a href="{{ route('admin.login') }}" class="btn btn-primary">Go to Admin Login</a>
                    </li>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header top section start -->
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/icon.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        {{-- <a class="nav-link" href="{{ route('welcom') }}">Home</a> --}}
                     </li>
                     <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('services') }}">Services</a> --}}
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                     </li>
                     {{-- <li class="nav-item">
                        <a href="{{ route('admin.login') }}" class="btn btn-primary">Go to Admin Login</a>
                    </li> --}}
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="testimonial.html">Testimonial</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_text">
                        <ul>
                            <li class="quote_btn login_btn">
                                <a href="{{ route('login') }}">LOGIN</a>
                            </li>
                            <li class="quote_btn register_btn">
                                <a href="{{ route('register') }}">REGISTER</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('admin.login') }}" class="btn btn-primary">Go to Admin Login</a>
                            </li> --}}
                        </ul>
                           {{-- <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li> --}}
                        </ul>
                     </div>
                     {{-- <div class="quote_btn"><a href="#">Get A Quote</a></div> --}}
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">ONLINE DISASTER REPORT SYSTEM </h1>
                                 <h2 class="banner_text">Call 999 For fast Report</h2>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#">Contact US</a></div>
                                    <div class="started_text"><a href="#">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">ONLINE DISASTER REPORT SYSTEM</h1>
                                 <h2 class="banner_text">Call 999 For fast Report</h2>
                                <div class="btn_main">
                                    <div class="started_text active"><a href="#">Contact US</a></div>
                                    <div class="started_text"><a href="#">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                <h1 class="banner_taital">ONLINE DISASTER REPORT SYSTEM </h1>
                                <h2 class="banner_text">Call 999 For fast Report</h2>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#">Contact US</a></div>
                                    <div class="started_text"><a href="#">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
        <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Our Services</h1>
                  <p class="services_text_1">ssages of Lorem Ipsum available, but the majority have suffered alteration</p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main active">
                        <div class="service_img"><img src="images/icon-1.png"></div>
                        <h4 class="development_text">Fire Extinguishers</h4>
                        <p class="services_text">Fire extinguishers are primarily used to put out small fires before they escalate into larger, uncontrollable blazes. They are effective for fires that are in their early stages and can be handled without the need for professional firefighters.</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main">
                        <div class="service_img"><img src="images/icon-2.png"></div>
                        <h4 class="development_text">Motorway Services</h4>
                        <p class="services_text">Motorway services, also known as rest areas or service stations, are facilities located along motorways or highways designed to provide travelers with essential services and amenities during their journey. These services are particularly important for long-distance drivers, offering a place to rest, refuel, and refresh. L</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main">
                        <div class="service_img"><img src="images/icon-3.png"></div>
                        <h4 class="development_text">Emergency Lighting</h4>
                        <p class="services_text">Emergency lighting is a critical safety feature designed to provide illumination during power outages or other emergency situations when the main lighting system fails. This lighting ensures the safety of occupants by guiding them to exits and allowing them to navigate through the building safely.</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main">
                        <div class="service_img"><img src="images/icon-4.png"></div>
                        <h4 class="development_text">Management</h4>
                        <p class="services_text">fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using L</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- about sectuion start -->
      {{-- <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_taital">About Us</h1>
                  <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <div class="video_bt">
                        <div class="play_icon"><img src="images/play-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- about sectuion end -->
      <!-- projects section start -->
      {{-- <div class="projects_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="projects_taital">Projects</h1>
                  <div class="nav-tabs-navigation">
                     <div class="nav-tabs-wrapper">
                        <ul class="nav " data-tabs="tabs">
                           <li class="nav-item">
                              <a class="nav-link active" href="#" data-toggle="tab">Category  filter</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">All</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Paintingl</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Reconstructionl</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Repairsl</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Residentall</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="projects_section_2 layout_padding">
            <div class="container">
               <div class="pets_section">
                  <div class="pets_section_2">
                     <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-1.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-2.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-3.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                        <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-1.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-2.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-3.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-1.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-2.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-3.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- projects section end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
         <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="testimonial_taital">Testimonial</h1>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text">Molik <span style="float: right;"><img src="images/quick-icon.png"></span></h2>
                              <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                          </div>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text"><img src="images/quick-icon.png"> <span style="float: right;">jeaanson</span></h2>
                              <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="testimonial_taital">Testimonial</h1>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text">Molik <span style="float: right;"><img src="images/quick-icon.png"></span></h2>
                              <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                          </div>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text"><img src="images/quick-icon.png"> <span style="float: right;">jeaanson</span></h2>
                              <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="testimonial_taital">Testimonial</h1>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text">Molik <span style="float: right;"><img src="images/quick-icon.png"></span></h2>
                              <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                          </div>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text"><img src="images/quick-icon.png"> <span style="float: right;">jeaanson</span></h2>
                              <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                 <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Contact Us</h1>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <form action="">
                        <div class="mail_section_1">
                           <input type="text" class="mail_text" placeholder="Name" name="Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_left_15">
                     <div class="contact_img"><img src="images/back.jpg"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Ghana+Universityofcapecoast" width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><span class="padding_15"><i class="fa fa-mobile" aria-hidden="true"></i></span> <br>Call 999</a>
                        </li>
                        <li class="active">
                           <a href="#"><span class="padding_15"><i class="fa fa-envelope" aria-hidden="true"></i></span> <br>derricktabiri04@gmail.com</a>
                        </li>
                        <li>
                           <a href="#"><span class="padding_15"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <br>Location</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <h2 class="useful_text">QUICK LINKS</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           {{-- <li><a href="projects.html">Projects</a></li> --}}
                           <li><a href="testimonial.html">Testimonial</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <h2 class="useful_text">Work Portfolio</h2>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                  </div>
                  <div class="col-md-4">
                     <h2 class="useful_text">SIGN UP TO OUR NEWSLETTER</h2>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="social_icon">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2024 All Rights Reserved. Design by Khem</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
   </body>
</html>