<?php   
session_start();
?>
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
    <title>bitcypo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="index.html">Home</a>
        <a class="active" href="Dashboard.html">Dashboard</a>
        <a href="about.html">About</a>
        <a href="services.html">Services</a>
        <a href="testimonial.html">Testimonial</a>
        <a href="works.html">Works</a>
        <a href="contact.html">Contact</a>
    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.html">BitCYPO</a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                            <li>
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div style="margin-top: 6rem;" class="mb-4">
            <h2  style="font-size: 40px; border-bottom: 1px solid goldenrod; margin-bottom: 3rem;">
            <?php echo $_SESSION['uname'];  ?> Earnings
            </h2>

            <div class="d-flex mb-4">
                <div style="background-color: rgb(156, 116, 14); padding: .5rem; border-radius: 10px; width: 17rem;" class="deposit px-3 ">
                    <h4 style="color: black; border-bottom: 2px solid black;  font-size: 25px;" >Deposit</h4>
                    <p class="fw-bold text-white">
                        &dollar;200
                    </p>
                </div>
                <div style="background-color: rgb(156, 116, 14); padding: .5rem; border-radius: 10px; width: 17rem;"class="mx-4 earnings px-3 ">
                    <h4  style="color: black; border-bottom: 2px solid black;  font-size: 25px;" >Earnings</h4>
                    <p class="fw-bold text-white">
                        &dollar;200
                    </p>
                </div>
                <div style="background-color: rgb(156, 116, 14); padding: .5rem; border-radius: 10px; width: 17rem;"class="mx-4 balance px-3 ">
                    <h4  style="color: black; border-bottom: 2px solid black;  font-size: 25px;" >Current Balance</h4>
                    <p class="fw-bold text-white">
                        &dollar;200
                    </p>
                </div>
    
            </div>
           
            <button class="" style="background-color: goldenrod; color:white; padding: .8rem; width: 6rem; border-radius: 8px; border: none;">
                Deposit
            </button>
            <button class="mx-5" style="background-color: goldenrod; color:white; padding: .8rem; width: 6rem; border-radius: 8px; border: none;">
                Withdraw
            </button>

            
        </div>

        <!-- graph -->
        <div class="col-md-12">
            <ul class="nav nav-tabs md-tabs graf_tab" id="myTabMD" role="tablist">
                <li>
                    <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#tab1" role="tab" aria-controls="home-md" aria-selected="true">Bitcoin(BTC)</a>
                </li>
                <li>
                    <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile-md" aria-selected="false">Bitcoin Cash(BCH)</a>
                </li>
                <li>
                    <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Lite(LTC)</a>
                </li>
                <li>
                    <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab4" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Ethereum(ETH)</a>
                </li>
                <li>
                    <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab5" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Ripple(XRP)</a>
                </li>
            </ul>
            <div class="tab-content card  graf_content" id="myTabContentMD">
                <div class="tab-pane fade show active padi" id="tab1" role="tabpanel" aria-labelledby="home-tab-md">
                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <div class="usd text_align_center">
                                <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Daily Change </h4>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour Low </h4>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour High </h4>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Today Open </h4>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="usd text_align_center">
                                <h4>BTC 09876 <br> 24 hour volume </h4>
                            </div>
                        </div>
                    </div>
                    <div class="graf_bootom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <figure>
                                        <h3 class="h3tota">Total Growth</h3>
                                        <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade padi" id="tab2" role="tabpanel" aria-labelledby="profile-tab-md">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Daily Change </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour Low </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour High </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Today Open </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>BTC 09876 <br> 24 hour volume </h4>
                            </div>
                        </div>
                    </div>
                    <div class="graf_bootom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <figure>
                                        <h3 class="h3tota">Total Growth</h3>
                                        <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade padi" id="tab3" role="tabpanel" aria-labelledby="contact-tab-md">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Daily Change </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour Low </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour High </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Today Open </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>BTC 09876 <br> 24 hour volume </h4>
                            </div>
                        </div>
                    </div>
                    <div class="graf_bootom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <figure>
                                        <h3 class="h3tota">Total Growth</h3>
                                        <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade padi" id="tab4" role="tabpanel" aria-labelledby="contact-tab-md">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Daily Change </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour Low </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour High </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Today Open </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>BTC 09876 <br> 24 hour volume </h4>
                            </div>
                        </div>
                    </div>
                    <div class="graf_bootom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <figure>
                                        <h3 class="h3tota">Total Growth</h3>
                                        <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade padi" id="tab5" role="tabpanel" aria-labelledby="contact-tab-md">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Daily Change </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour Low </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> 24 Hour High </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>USD 123456.09 <br> Today Open </h4>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="usd text_align_center">
                                <h4>BTC 09876 <br> 24 hour volume </h4>
                            </div>
                        </div>
                    </div>
                    <div class="graf_bootom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <figure>
                                        <h3 class="h3tota">Total Growth</h3>
                                        <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="growth text_align_center">
                                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->

        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="logo_bottom" href="index.html">BitCYPO</a>
                        </div>
                        <div class="col-md-3 col-sm-6" ">
                      <div class="Informa conta ">
                         <h3>Contact Us</h3>
                         <ul>
                            <li> <a href="Javascript:void(0) "> <i class="fa fa-map-marker " aria-hidden="true "></i> Location
                               </a>
                            </li>
                            <li> <a href="Javascript:void(0) "><i class="fa fa-phone " aria-hidden="true "></i> Call +01 1234567890
                               </a>
                            </li>
                            <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope " aria-hidden="true "></i> demo@gmail.com
                               </a>
                            </li>
                         </ul>
                         <ul>
                            <li>Readable content of                              
                            </li>
                            <li>a page when looking                           
                            </li>
                            <li>at its layoutreadable                          
                            </li>
                            <li>content of a page                             
                            </li>
                            <li>when looking at its                         
                            </li>
                            <li>layout                          
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="col-md-3 col-sm-6 "">
                            <div class="Informa helpful">
                                <h3>Useful Link</h3>
                                <ul>
                                    <li>Readable content of
                                    </li>
                                    <li>a page when looking
                                    </li>
                                    <li>at its layoutreadable
                                    </li>
                                    <li>content of a page
                                    </li>
                                    <li>when looking at its
                                    </li>
                                    <li>layout
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" ">
                      <div class="Informa ">
                         <h3>Offices</h3>
                         <ul>
                            <li>Readable content of                              
                            </li>
                            <li>a page when looking                           
                            </li>
                            <li>at its layoutreadable                          
                            </li>
                            <li>content of a page                             
                            </li>
                            <li>when looking at its                         
                            </li>
                            <li>layout                          
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="col-md-3 col-sm-6 ">
                      <div class="Informa ">
                         <h3>Newsletter</h3>
                         <form class="newslatter_form ">
                            <input class="ente " placeholder="Enter your email " type="text " name="Enter your email ">
                            <button class="subs_btn ">Subscribe</button>
                         </form>
                      </div>
                   </div>
                </div>
                <div class="copyright text_align_center ">
                   <div class="container ">
                      <div class="row ">
                         <div class="col-md-12 ">
                            <p>© 2020 All Rights Reserved. Design by ZEEC</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          </footer>
     
    </div>


    <!-- Javascript files-->
    <script src="js/jquery.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/jquery-3.0.0.min.js "></script>
    <script src="js/custom.js "></script>
</body>
</html>