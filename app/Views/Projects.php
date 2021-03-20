<!DOCTYPE html>
<html lang="en">
<head>
	<title>APS-Global</title>
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
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Projects <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Projects</h1>
				</div>
			</div>
		</div>
	</section>

	<?php

    $query = $project_builder->where("status", "A")->get();
    $count = $project_builder->countAllResults();
    if ($count >= 1) {
    ?>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Our Global Work Industries</span>
                        <h2 class="mb-4">Latest Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($query->getResult() as $row) {
                    ?>

                        <div class="col-md-4">
                            <div class="project">
                                <a href="http://localhost/Projects/Projects/Construction-site/<?php echo $row->img ?>" class="img image-popup d-flex align-items-center" style="background-image: url(http://localhost/Projects/Projects/Construction-site/<?php echo $row->img ?>);">
                                    <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                                </a>
                                <div class="text">
                                    <span class="subheading"><?php echo $row->type ?></span>
                                    <h3><?php echo $row->title ?>.</h3>
                                    <p><span class="fa fa-map-marker mr-1"></span><?php echo $row->location ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
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