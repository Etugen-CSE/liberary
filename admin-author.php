<?php
include('function/myfunction.php');
if (isset($_POST['delete_author_btn'])) {
   $author_id = mysqli_real_escape_string($conn, $_POST['author_id']);
   $author_query = "SELECT * FROM author WHERE id='$author_id'";
   $author_query_run = mysqli_query($conn, $author_query);
   $author_data = mysqli_fetch_array($author_query_run);
   $image = $author_data['image'];
   $delete_query = "DELETE FROM author WHERE id='$author_id'";
   $delete_query_run = mysqli_query($conn, $delete_query);

   if ($delete_query_run) {
      if (file_exists("uploads/" . $image)) {
         unlink("uploads/" . $image);
      }
      redirect('admin-author.php', "Амжилттай устгалаа ");
   } else {
      redirect('admin-author.php', "Алдаа гарлаа");
   }
}
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/booksto/php/admin-author.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:55:20 GMT -->

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
                        <li class="active"><a href="index-2.php"><i class="las la-house-damage"></i>Нүүр хуудас</a>
                        </li>
                        <li><a href="category.php"><i class="ri-function-line"></i>Төрөл</a></li>
                        <li><a href="book-page.php"><i class="ri-book-line"></i>Ном</a></li>
                        <li><a href="book-pdf.php"><i class="ri-file-pdf-line"></i>ном захиалах</a></li>
                        <li><a href="Checkout.php"><i class="ri-checkbox-multiple-blank-line"></i>захиалах</a></li>
                     </ul>
                  </li>
                  <li class="active active-menu">
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Админ</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li><a href="admin-category.php"><i class="ri-function-line"></i>ном төрөл</a></li>
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
                           <span class="text-primary text-uppercase">номын сан</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">зохиолч</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.php">Админ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">зохиолч</li>
                     </ul>
                  </nav>
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

                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="uploads/1662973663.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-1 line-height">Lkhagav</h6>
                              <!-- <p class="mb-0 text-primary">$20.32</p> -->
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <!-- <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                    <span class="text-white font-size-12">Available</span> -->
                                 </div>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="sign-in.php" role="button">Гарах<i class="ri-login-box-line ml-2"></i></a>
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
                           <h4 class="card-title">Зохиолчын жагсаалт</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="admin-add-author.php" class="btn btn-primary">Зохиолч нэмэх</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 5%;">Профайл</th>
                                    <th style="width: 20%;">Зохиол нэр</th>
                                    <th style="width: 60%;">Зохиол тайлбар</th>
                                    <th style="width: 10%;">үйлдэл</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $author = getAll("author");
                                 if (mysqli_num_rows($author) > 0) {
                                    foreach ($author as $item) {
                                 ?>
                                       <tr>
                                          <td> <?= $item['id']; ?></td>
                                          <td>
                                             <img src="uploads/<?= $item['image'] ?>" class="img-fluid avatar-50 rounded" alt="<?= $item['a_name'] ?>">
                                          </td>
                                          <td><?= $item['a_name']; ?></td>
                                          <td>
                                             <p><?= $item['description']; ?></p>
                                          </td>
                                          <td>
                                             <div class="flex align-items-center list-user-action">
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-update-author.php?id=<?= $item['id']; ?>"><i class="ri-pencil-line"></i></a>
                                                <form action="admin-author.php" method="POST">
                                                   <input type="hidden" name="author_id" value="<?= $item['id']; ?>">
                                                   <!-- <a class=""  href="#"></a> -->
                                                   <button type="submit" class="bg-primary" name="delete_author_btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ri-delete-bin-line"></i></button>
                                                </form>
                                             </div>
                                          </td>
                                       </tr>
                                 <?php
                                    }
                                 } else {
                                    echo "no recors found";
                                 }
                                 ?>

                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->
   <!-- Footer -->

   <!-- Footer END -->
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

<!-- Mirrored from iqonic.design/themes/booksto/php/admin-author.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:55:20 GMT -->

</html>