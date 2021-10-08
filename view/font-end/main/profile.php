<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?= host . '/' . name_project . view_font; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/animate.css">
    
    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>css/style.css">
</head>
<body>
<?php include_once 'template/header.php'; ?>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= host . '/' . name_project . view_font; ?>images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Profile <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Profile</h1>
     </div>
 </div>
</div>
</section>
<div class="d-flex">
    <div class="container">
        <div class="row">
        <div class="col-md-8">
            
        <div class="table pt-3">
            <h3>Your order list</h3>
        <table class="table-view w-100">
            <thead>
                <tr>
                    <td class="tb_checkbox">STT</td>
                    <td>Title</td>
                    <td>Khởi Hành</td>
                    <td>Kết Thúc</td>
                    <td>Số Lương</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 0; foreach($data['bill'] as $item => $key){
                    ?>
                     <tr>
                        <th>
                            <p><?= ++$stt; ?></p>
                        </th>
                        <th>
                            <p><?= $data['ticket'][$item][0]['name'] ?></p>
                        </th>
                        <th>
                            <p><?= $data['ticket'][$item][0]['delivery_date'] ?></p>
                        </th>
                        <th>
                            <p><?= $data['ticket'][$item][0]['end_date'] ?></p>
                        </th>
                        <th>
                            <p><?= $key['quantity'] ?></p>
                        </th>
                        <th>
                            <p><?php if( $key['status'] ==0){
                                echo 'Chờ xử lý';
                            }else
                            if( $key['status'] == 1){
                                echo 'Đã thanh toán';
                            }else{
                                echo 'Hủy';
                            }
                             ?></p>
                        </th>
                    </tr>
                    <?php
                } ?>
               
            </tbody>
            <tfoot>
                <tr>
                <td class="tb_checkbox">STT</td>
                    <td>Title</td>
                    <td>Khởi Hành</td>
                    <td>Kết Thúc</td>
                    <td>Số Lương</td>
                    <td>Status</td>
                </tr>
            </tfoot>
        </table>
        
        <div id="detail"></div>
    </div>
        </div>
        <div class="card-body col-md-4">
                <p class="login-card-description">My account</p>
                <form method="post" class="colorlib-form">
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" value="<?= $_SESSION['user']['id'] ?>" hidden name="id"  id="">
                                <label for="fname">E-mail Address</label>
                                <input type="mail" id="fname" class="form-control" value="<?= $_SESSION['user']['user'] ?>"  name="user" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Address</label>
                                <input type="text" id="towncity" name="address" value="<?= $_SESSION['user']['address'] ?>" class="form-control" placeholder="Town or City" required>
                             </div>
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Phone">Phone Number</label>
                            <input name="phone" type="text" id="zippostalcode"  value="<?= $_SESSION['user']['phone'] ?>" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="companyname">Sex</label>
                            <select name="sex" class="form-control" required>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="companyname">Pass</label>
                        <input type="password" name="pass" id="towncity" value="<?= $_SESSION['user']['pass'] ?>" name="address" class="form-control" placeholder="Town or City" required>
                        </div>
                        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Edit">
                    </div>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>


<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(<?= host . '/' . name_project . view_font; ?>images/bg_2.jpg);">
             <div class="overlay"></div>
             <h2>We Are Pacific A Travel Agency</h2>
             <p>We can manage your dream building A small river named Duden flows by their place</p>
             <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
         </div>
     </div>
 </div>
</div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(<?= host . '/' . name_project . view_font; ?>images/bg_3.jpg);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>
<div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Infromation</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
        <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
        <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
        <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
        <li><a href="#" class="py-2 d-block">Call Us</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5 border-left">
   <div class="ftco-footer-widget pt-md-5 mb-4">
      <h2 class="ftco-heading-2">Experience</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Adventure</a></li>
        <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
        <li><a href="#" class="py-2 d-block">Beach</a></li>
        <li><a href="#" class="py-2 d-block">Nature</a></li>
        <li><a href="#" class="py-2 d-block">Camping</a></li>
        <li><a href="#" class="py-2 d-block">Party</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
       </ul>
   </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?= host . '/' . name_project . view_font; ?>js/jquery.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/popper.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/bootstrap.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/jquery.easing.1.3.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/jquery.waypoints.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/jquery.stellar.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/owl.carousel.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/bootstrap-datepicker.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/google-map.js"></script>
<script src="<?= host . '/' . name_project . view_font; ?>js/main.js"></script>
</body>
</html>