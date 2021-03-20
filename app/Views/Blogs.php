<!DOCTYPE html>
<html lang="en">
<head>
  <title>APS Global | Blog </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?php include('includes/_css.php'); ?>
</head>
<body>
<?php include('includes/_nav.php'); ?>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/images/bg_2.jpg')?>');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Our Blog <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Our Blog</h1>
     </div>
   </div>
 </div>
</section>

<?php

    $query = $blog_builder->where("status", "A")->get();
    $count = $blog_builder->countAllResults();
    if ($count >= 1) {
    ?>
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row d-flex">

                    <?php
                    foreach ($query->getResult() as $row) {
                    ?>
                        <div class="col-lg-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="http://localhost/Projects/Projects/Construction-site/<?php echo $row->img ?>" class="block-20" style="background-image: url('http://localhost/Projects/Projects/Construction-site/<?php echo $row->img ?>');">
                                </a>
                                <div class="text d-block">
                                    <div class="meta">
                                        <p>
                                            <a href="#"><span class="fa fa-calendar mr-2"></span><?php echo $row->added_on ?></a>
                                            <a href="#"><span class="fa fa-user mr-2"></span><?php echo $row->author ?></a>
                                            <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                        </p>
                                    </div>
                                    <h3 class="heading"><a href="#"><?php echo $row->title ?></a></h3>
                                    <p><a href="<?php echo base_url("Blogs/viewBlog/".$row->id); ?>" class="btn btn-secondary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>
    <?php } ?>  
<section>
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 text-center heading-section ftco-animate">
      <span class="subheading">Our Happy Customers</span>
      
    </div>
  </div>
  <div>

  <marquee hspace="20px" behavior="scroll" direction="left">
  <img src="<?php echo base_url('assets/images/five.jpg')?>" hspace="20px" width="200" height="80" alt="Natural" />
  <img src="<?php echo base_url('assets/images/one.jpg')?>"  hspace="20px" width="200" height="80" alt="Natural" />
  <img src="<?php echo base_url('assets/images/two.jpg')?>"  hspace="20px" width="200" height="80" alt="Natural" />
  <img src="<?php echo base_url('assets/images/three.jpg')?>"  hspace="20px" width="200" height="80" alt="Natural" />
  <img src="<?php echo base_url('assets/images/four.jpg')?>"  hspace="20px" width="200" height="80" alt="Natural" />
  

  </marquee>

  </div>
</section>
<?php include('includes/_footer.php'); ?>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php include('includes/_js.php'); ?>

</body>
</html>