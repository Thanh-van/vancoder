<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $data['post'][0]['title'] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?= host . '/' . name_project . view_font; ?>css/font-awesome.min.css">

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
 
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= host . '/' . name_project . view_font; ?>images//bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Blog Details</h1>
     </div>
   </div>
 </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
        <h2 class="mb-3 text-center"><?=  $data['post'][0]['title'] ?></h2>
        <div class="blog_content">
          <?php  print_r($data['post'][0]['content'])  ?>
        </div>
        
        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="<?= host . '/' . name_project . view_font; ?>images//person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>George Washington</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>


        <div class="pt-5 mt-5">
          <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">6 Comments</h3>
          <ul class="comment-list">
            <li class="comment">
              <div class="vcard bio">
                <img src="<?= host . '/' . name_project . view_font; ?>images//person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">September 11, 2020 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="<?= host . '/' . name_project . view_font; ?>images//person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">September 11, 2020 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>

              <ul class="children">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?= host . '/' . name_project . view_font; ?>images//person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">September 11, 2020 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>


                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="<?= host . '/' . name_project . view_font; ?>images//person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">September 11, 2020 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="<?= host . '/' . name_project . view_font; ?>images//person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">September 11, 2020 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>
            </li>
          </ul>
          <!-- END comment-list -->
          
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">Leave a comment</h3>
            <form action="#" class="p-5 bg-light">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
              </div>

            </form>
          </div>
        </div>

      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
        <div class="sidebar-box pt-md-5">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Categories</h3>
            <?php if(isset($data['category'])) foreach($data['category'] as $item => $key){
              ?>
              <li><a href="#"><?= $key['name'] ?> </a></li>
              <?php
            } ?>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Recent Blog</h3>
          <?php foreach($data['recent'] as $item => $key){
            ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?= host . '/' . name_project  . 'view/'; ?>upload/<?= $key['img'] ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#"><?= $key['title'] ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> <?= date("M",strtotime($key['date']) )   ?> <?= date("d",strtotime($key['date']) )   ?>, <?= date("Y",strtotime($key['date']) )   ?></a></div>
                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                  </div>
                </div>
              </div>
            <?php
          } ?>
        </div>
      </div>

    </div>
  </div>
</section> <!-- .section -->	

<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image: url(<?= host . '/' . name_project . view_font; ?>images//bg_2.jpg);">
     <div class="overlay"></div>
     <h2>We Are Pacific A Travel Agency</h2>
     <p>We can manage your dream building A small river named Duden flows by their place</p>
     <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
   </div>
 </div>
</div>
</div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(<?= host . '/' . name_project . view_font; ?>images//bg_3.jpg);">
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