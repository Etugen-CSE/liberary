<?php
include('config/dbcon.php');
function getAllactive($table)
{
   global $conn;
   $query = "SELECT * FROM $table ";
   return $query_run = mysqli_query($conn, $query);
}

?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/booksto/php/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:54:42 GMT -->

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Booksto - Responsive Bootstrap 4 Admin Dashboard Template</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
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
                  <span class="text-primary text-uppercase">Booksto</span>
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
                        <li><a href="index-2.php"><i class="las la-house-damage"></i>нүүр хуудас</a></li>
                        <li><a href="category.php"><i class="ri-function-line"></i>номын төрөл</a></li>
                        <li><a href="book-page.php"><i class="ri-book-line"></i>Ном</a></li>
                        <li><a href="book-pdf.php"><i class="ri-file-pdf-line"></i>Ном захиалах</a></li>
                        <li><a href="Checkout.php"><i class="ri-checkbox-multiple-blank-line"></i>захиалах</a></li>
                     </ul>
                  </li>
                  <li class="active active-menu">
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Админ</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li><a href="admin-category.php"><i class="ri-function-line"></i>Ном төрөл</a></li>
                        <li><a href="admin-author.php"><i class="ri-book-line"></i>Зохиолч</a></li>
                        <li class="active"><a href="admin-books.php"><i class="ri-file-pdf-line"></i>номнууд</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
            <div id="sidebar-bottom" class="p-3 position-relative">
               <div class="iq-card">
                  <div class="iq-card-body">
                     <div class="sidebarbottom-content">
                        <div class="image"><img src="images/page-img/side-bkg.png" alt=""></div>
                        <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Гишүүн нэмэх</button>
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
                           <span class="text-primary text-uppercase">Booksto</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Shop</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                     </ul>
                  </nav>
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
                                    <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">1</small></h5>
                                 </div>
                                 <!-- <a href="#" class="iq-sub-card">
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
                                 </a> -->
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
                                    <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">0</small></h5>
                                 </div>
                                 <!-- <a href="#" class="iq-sub-card">
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
                                    </a> -->
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
                                    <a class="btn btn-primary mr-2 iq-sign-btn" href="Checkout.php" role="button">View Cart</a>
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
                                    <a class="bg-primary iq-sign-btn" href="sign-in.php" role="button">login.php<i class="ri-login-box-line ml-2"></i></a>
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
               <div class="col-lg-12">
                  <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
                     <div class="newrealease-contens">
                        <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                           <?php
                           $book = getAllactive("book");
                           if (mysqli_num_rows($book) > 0) {
                              foreach ($book as $item) {
                           ?>
                                 <li class="item">
                                    <a href="#">
                                       <img src="uploads/<?= $item['image'] ?>" class="img-fluid w-200 rounded" alt="w-100">
                                       <h4 class="text-center"><?= $item['b_name'] ?></h4>
                                    </a>
                                 </li>
                                 <li class="item">
                                    <a href="#">
                                       <img src="uploads/<?= $item['image'] ?>" class="img-fluid w-200 rounded" alt="w-100">
                                       <h4 class="text-center"><?= $item['b_name'] ?></h4>
                                    </a>
                                 </li>
                           <?php
                              }
                           } else {
                              echo "мэдээлэл байхгүй";
                           }
                           ?>
                        </ul>
                     </div>
                  </div>
               </div>


               <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                           <h4 class="card-title mb-0">Ном үзэх</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="category.php" class="btn btn-sm btn-primary view-more">View More</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="row">
                           <?php
                           $book = getAllactive("book");
                           if (mysqli_num_rows($book) > 0) {
                              foreach ($book as $item) {
                           ?>
                                 <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                       <div class="iq-card-body p-0">
                                          <div class="d-flex align-items-center">
                                             <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                <a href="#"><img class="img-fluid rounded w-100" src="uploads/<?= $item['image'] ?>" alt=""></a>
                                                <div class="view-book">
                                                   <a href="book-page.php" class="btn btn-sm btn-white">номыг үзэх</a>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-2">
                                                   <h6 class="mb-1"><?= $item['b_name'] ?></h6>
                                                   <p class="font-size-13 line-height mb-1"><?= $item['a_name'] ?></p>
                                                   <div class="d-block line-height">
                                                      <span class="font-size-11 text-warning">
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="price d-flex align-items-center">
                                                   <span class="pr-1 old-price"><?= $item['possible'] ?></span>
                                                   <h6><b><?= $item['possible'] ?></b></h6>
                                                </div>
                                                <div class="iq-product-action">
                                                   <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                   <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           <?php
                              }
                           } else {
                              echo "мэдээлэл байхгүй";
                           }
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between mb-0">
                        <div class="iq-header-title">
                           <h4 class="card-title">Онцлох номууд</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton2" data-toggle="dropdown">
                                 Энэ долоо хоногт<i class="ri-arrow-down-s-fill"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton2">
                                 <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                 <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                 <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                 <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                 <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="row align-items-center">
                           <div class="col-sm-5 pr-0">
                              <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/page-img/featured-book.png" alt=""></a>
                           </div>
                           <div class="col-sm-7 mt-3 mt-sm-0">
                              <h4 class="mb-2">Casey Christie night book into find...</h4>
                              <p class="mb-2">Author: Gheg origin</p>
                              <div class="mb-2 d-block">
                                 <span class="font-size-12 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                 </span>
                              </div>
                              <span class="text-dark mb-3 d-block">Lorem Ipsum is simply dummy test in find a of the
                                 printing and typeset ing industry into end.</span>
                              <button type="submit" class="btn btn-primary learn-more">Үзэх</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between mb-0">
                        <div class="iq-header-title">
                           <h4 class="card-title">Онцлох зохиолч</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton3" data-toggle="dropdown">
                                 Энэ долоо хоногт<i class="ri-arrow-down-s-fill"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton3">
                                 <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                 <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                 <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                 <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                 <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                           <?php
                           $author = getAllactive("author");
                           if (mysqli_num_rows($author) > 0) {
                              foreach ($author as $item) {
                           ?>
                                 <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                       <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="uploads/<?= $item['image'] ?>" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                       <h6><?= $item['a_name'] ?></h6>
                                       <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                    </div>
                                 </li>
                           <?php
                              }
                           } else {
                              echo "мэдээлэл байхгүй";
                           }
                           ?>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                           <h4 class="card-title mb-0">Дуртай уншлага</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="category.php" class="btn btn-sm btn-primary view-more">View More</a>
                        </div>
                     </div>
                     <div class="iq-card-body favorites-contens">
                        <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                           <li class="col-md-4">
                              <div class="d-flex align-items-center">
                                 <div class="col-5 p-0 position-relative">
                                    <a href="javascript:void();">
                                       <img src="images/favorite/01.jpg" class="img-fluid rounded w-100" alt="">
                                    </a>
                                 </div>
                                 <div class="col-7">
                                    <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                    <p class="mb-2">Author : Pedro Araez</p>
                                    <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                       <span>Reading</span>
                                       <span class="mr-4">78%</span>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar iq-bg-primary">
                                          <span class="bg-primary" data-percent="78"></span>
                                       </div>
                                    </div>
                                    <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                 </div>
                              </div>
                           </li>
                           <li class="col-md-4">
                              <div class="d-flex align-items-center">
                                 <div class="col-5 p-0 position-relative">
                                    <a href="javascript:void();">
                                       <img src="images/favorite/02.jpg" class="img-fluid rounded w-100" alt="">
                                    </a>
                                 </div>
                                 <div class="col-7">
                                    <h5 class="mb-2">Casey Christie night book into find...</h5>
                                    <p class="mb-2">Author : Michael klock</p>
                                    <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                       <span>Reading</span>
                                       <span class="mr-4">78%</span>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar iq-bg-danger">
                                          <span class="bg-danger" data-percent="78"></span>
                                       </div>
                                    </div>
                                    <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                 </div>
                              </div>
                           </li>
                           <li class="col-md-4">
                              <div class="d-flex align-items-center">
                                 <div class="col-5 p-0 position-relative">
                                    <a href="javascript:void();">
                                       <img src="images/favorite/03.jpg" class="img-fluid rounded w-100" alt="">
                                    </a>
                                 </div>
                                 <div class="col-7">
                                    <h5 class="mb-2">The Secret to English Busy People..</h5>
                                    <p class="mb-2">Author : Daniel Ace</p>
                                    <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                       <span>Reading</span>
                                       <span class="mr-4">78%</span>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar iq-bg-info">
                                          <span class="bg-info" data-percent="78"></span>
                                       </div>
                                    </div>
                                    <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                 </div>
                              </div>
                           </li>
                           <li class="col-md-4">
                              <div class="d-flex align-items-center">
                                 <div class="col-5 p-0 position-relative">
                                    <a href="javascript:void();">
                                       <img src="images/favorite/04.jpg" class="img-fluid rounded w-100" alt="">
                                    </a>
                                 </div>
                                 <div class="col-7">
                                    <h5 class="mb-2">The adventures of Robins books...</h5>
                                    <p class="mb-2">Author : Luka Afton</p>
                                    <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                       <span>Reading</span>
                                       <span class="mr-4">78%</span>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar iq-bg-success">
                                          <span class="bg-success" data-percent="78"></span>
                                       </div>
                                    </div>
                                    <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                 </div>
                              </div>
                           </li>
                        </ul>
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

<!-- Mirrored from iqonic.design/themes/booksto/php/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:54:42 GMT -->

</html>