<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['add_author_btn'])) {
   $name = $_POST['a_name'];
   $description = $_POST['description'];
   $email = $_POST['email'];

   $image = $_FILES['image']['name'];
   $path = "uploads";
   $image_ext = pathinfo($image, PATHINFO_EXTENSION);
   $filename = time() . '.' . $image_ext;

   $author_query = "INSERT INTO author( a_name, description,email,image) VALUES('$name', '$description','$email','$filename')";
   $author_query_run = mysqli_query($conn, $author_query);
   if ($author_query_run) {
      move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
      $_SESSION['message'] = "amjilttai nemlee";
      header('Location: admin-author.php');
   } else {
      $_SESSION['message'] = "ямар нэг зүйл буруу гарлаа, дахин оролдоно уу";
      header('Location: admin-author.php');
   }
}
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/booksto/php/admin-add-author.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:57:01 GMT -->

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Номын сан ном түрээслэх</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index-2.php" class="header-logo">
               <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">Номын сан</span>
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li>
                     <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>дэлгүүр</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="index-2.php"><i class="las la-house-damage"></i>Нүүр хуудас</a></li>
                        <li><a href="category.php"><i class="ri-function-line"></i>Төрөл</a></li>
                        <li><a href="book-page.php"><i class="ri-book-line"></i>Ном</a></li>
                        <li><a href="book-pdf.php"><i class="ri-file-pdf-line"></i>Ном захиалах</a></li>
                        <li><a href="Checkout.php"><i class="ri-checkbox-multiple-blank-line"></i>захиалах</a></li>

                     </ul>
                  </li>
                  <li class="active active-menu">
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Админ</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">

                        <li><a href="admin-category.php"><i class="ri-function-line"></i>номын төрөл</a></li>
                        <li class="active"><a href="admin-author.php"><i class="ri-book-line"></i>зохиолч</a></li>
                        <li><a href="admin-books.php"><i class="ri-file-pdf-line"></i>номнууд</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
            <div id="sidebar-bottom" class="p-3 position-relative">
               <div class="iq-card">
                  <div class="iq-card-body">
                     <div class="sidebarbottom-content">
                        <div class="image"><img src="images/page-img/side-bkg.png" alt=""></div>
                        <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Гишүүн болох</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="index-2.php" class="header-logo">
                        <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                           <span class="text-primary text-uppercase">номын сан</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h4 class="mb-0 text-dark">хянах самбар</h4>
                  <p class="mb-0"><span class="text-primary">Сайн байна уу,</span> зохиолч нэмэх</p>
               </div>
               <div class="iq-search-bar">
                  <form action="#" class="searchbox">
                     <input type="text" class="text search-input" placeholder="Search Here...">
                     <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                  </form>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-search-line"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-notification-2-line"></i>
                           <span class="bg-primary dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Emma Watson Barry</h6>
                                          <small class="float-right font-size-12">Just Now</small>
                                          <p class="mb-0">95 MB</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New customer is join</h6>
                                          <small class="float-right font-size-12">5 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Two customer is left</h6>
                                          <small class="float-right font-size-12">2 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New Mail from Fenny</h6>
                                          <small class="float-right font-size-12">3 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-mail-line"></i>
                           <span class="bg-primary dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Barry Emma Watson</h6>
                                          <small class="float-left font-size-12">13 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                          <small class="float-left font-size-12">20 Apr</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Why do we use it?</h6>
                                          <small class="float-left font-size-12">30 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Variations Passages</h6>
                                          <small class="float-left font-size-12">12 Sep</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                          <small class="float-left font-size-12">5 Dec</small>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-shopping-cart-2-line"></i>
                           <span class="badge badge-danger count-cart rounded-circle">4</span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 toggle-cart-info">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Carts<small class="badge  badge-light float-right pt-1">4</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="rounded" src="images/cart/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Night People book</h6>
                                          <p class="mb-0">$32</p>
                                       </div>
                                       <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="rounded" src="images/cart/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">The Sin Eater Book</h6>
                                          <p class="mb-0">$40</p>
                                       </div>
                                       <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="rounded" src="images/cart/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">the Orange Tree</h6>
                                          <p class="mb-0">$30</p>
                                       </div>
                                       <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="rounded" src="images/cart/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Harsh Reality book</h6>
                                          <p class="mb-0">$25</p>
                                       </div>
                                       <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-flex align-items-center text-center p-3">
                                    <a class="btn btn-primary mr-2 iq-sign-btn" href="#" role="button">View Cart</a>
                                    <a class="btn btn-primary iq-sign-btn" href="#" role="button">Shop now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-1 line-height">Barry Tech</h6>
                              <p class="mb-0 text-primary">$20.32</p>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="sign-in.php" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Зохиолч нэмэх</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form action="admin-add-author.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                              <label>зохиолч нэр:</label>
                              <input type="text" name="a_name" class="form-control">
                           </div>
                           <div class="form-group">
                              <label>зохиолчын зураг:</label>
                              <div class="custom-file">
                                 <input type="file" name="image" class="custom-file-input" id="customFile">
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Зохиолч цахим хаяг:</label>
                              <input type="email" name="email" class="form-control">
                           </div>
                           <div class="form-group">
                              <label>Зохиолчын тайлбар:</label>
                              <textarea class="form-control" name="description" rows="4"></textarea>
                           </div>
                           <button type="submit" name="add_author_btn" class="btn btn-primary">нэмэх</button>
                           <button type="reset" class="btn btn-danger">дахин тохируулах</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->

   <!-- color-customizer -->
   <div class="iq-colorbox color-fix">
      <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
      <div id="right-sidebar-scrollbar" class="iq-colorbox-inner">
         <div class="clearfix color-picker">
            <h3 class="iq-font-black">Booksto Awesome Color</h3>
            <p>This color combo available inside whole template. You can change on your wish, Even you can create your
               own with limitless possibilities! </p>
            <ul class="iq-colorselect clearfix">
               <li class="color-1 iq-colormark" data-style="color-1"></li>
               <li class="color-2" data-style="iq-color-2"></li>
               <li class="color-3" data-style="iq-color-3"></li>
               <li class="color-4" data-style="iq-color-4"></li>
               <li class="color-5" data-style="iq-color-5"></li>
               <li class="color-6" data-style="iq-color-6"></li>
               <li class="color-7" data-style="iq-color-7"></li>
               <li class="color-8" data-style="iq-color-8"></li>
               <li class="color-9" data-style="iq-color-9"></li>
               <li class="color-10" data-style="iq-color-10"></li>
               <li class="color-11" data-style="iq-color-11"></li>
               <li class="color-12" data-style="iq-color-12"></li>
               <li class="color-13" data-style="iq-color-13"></li>
               <li class="color-14" data-style="iq-color-14"></li>
               <li class="color-15" data-style="iq-color-15"></li>
               <li class="color-16" data-style="iq-color-16"></li>
               <li class="color-17" data-style="iq-color-17"></li>
               <li class="color-18" data-style="iq-color-18"></li>
               <li class="color-19" data-style="iq-color-19"></li>
               <li class="color-20" data-style="iq-color-20"></li>
            </ul>
            <a target="_blank" class="btn btn-primary d-block mt-3" href="#">Purchase Now</a>
         </div>
      </div>
   </div>
   <!-- color-customizer END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.dataTables.min.js"></script>
   <script src="js/dataTables.bootstrap4.min.js"></script>
   <!-- Appear JavaScript -->
   <script src="js/jquery.appear.js"></script>
   <!-- Countdown JavaScript -->
   <script src="js/countdown.min.js"></script>
   <!-- Counterup JavaScript -->
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <!-- Wow JavaScript -->
   <script src="js/wow.min.js"></script>
   <!-- Apexcharts JavaScript -->
   <script src="js/apexcharts.js"></script>
   <!-- Slick JavaScript -->
   <script src="js/slick.min.js"></script>
   <!-- Select2 JavaScript -->
   <script src="js/select2.min.js"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="js/smooth-scrollbar.js"></script>
   <!-- lottie JavaScript -->
   <script src="js/lottie.js"></script>
   <!-- am core JavaScript -->
   <script src="js/core.js"></script>
   <!-- am charts JavaScript -->
   <script src="js/charts.js"></script>
   <!-- am animated JavaScript -->
   <script src="js/animated.js"></script>
   <!-- am kelly JavaScript -->
   <script src="js/kelly.js"></script>
   <!-- am maps JavaScript -->
   <script src="js/maps.js"></script>
   <!-- am worldLow JavaScript -->
   <script src="js/worldLow.js"></script>
   <!-- Raphael-min JavaScript -->
   <script src="js/raphael-min.js"></script>
   <!-- Morris JavaScript -->
   <script src="js/morris.js"></script>
   <!-- Morris min JavaScript -->
   <script src="js/morris.min.js"></script>
   <!-- Flatpicker Js -->
   <script src="js/flatpickr.js"></script>
   <!-- Style Customizer -->
   <script src="js/style-customizer.js"></script>
   <!-- Chart Custom JavaScript -->
   <script src="js/chart-custom.js"></script>
   <!-- Custom JavaScript -->
   <script src="js/custom.js"></script>
</body>

<!-- Mirrored from iqonic.design/themes/booksto/php/admin-add-author.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:57:01 GMT -->

</html>