<!DOCTYPE html>
<html lang="en">
<head>
  <title>APS Global | Blogs</title>
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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread"> <?php echo $result[0]["title"]?></h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <?php echo $result[0]["content"]?>
        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Life</a>
            <a href="#" class="tag-cloud-link">Sport</a>
            <a href="#" class="tag-cloud-link">Tech</a>
            <a href="#" class="tag-cloud-link">Travel</a>
          </div>
        </div>
        
        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="<?php echo base_url('assets/images/person_1.jpg')?>" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>John Henderson</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>


        <div class="pt-5 mt-5">
          <h3 class="mb-5 font-weight-bold">6 Comments</h3>
          <ul class="comment-list">
            <li class="comment">
              <div class="vcard bio">
                <img src="<?php echo base_url('assets/images/person_1.jpg')?>" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">September 06, 2020 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="<?php echo base_url('assets/images/person_1.jpg')?>" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">September 06, 2020 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>

              <ul class="children">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url('assets/images/person_1.jpg')?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">September 06, 2020 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                </li>
              </ul>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="<?php echo base_url('assets/images/person_1.jpg')?>" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">September 06, 2020 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>
            </li>
          </ul>
          <!-- END comment-list -->
          
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5 font-weight-bold">Leave a comment</h3>
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
      <div class="col-lg-4 sidebar ftco-animate">
        
      <?php

        $query = $blog_builder->where("status", "A")->limit(4)->get();
        $count = $blog_builder->countAllResults();
        if ($count >= 1) {
        ?>
 
      <div class="sidebar-box ftco-animate">
        <h3 class="heading-sidebar">More Blog</h3>
        <?php
            foreach ($query->getResult() as $row) {
            ?>
        <div class="block-21 mb-4 d-flex">
          <a class="blog-img mr-4" style="background-image: url(http://localhost/Projects/Projects/Construction-site/<?php echo $row->img ?>);"></a>
          <div class="text">
            <h3 class="heading"><a href="#"><?php echo $row->title ?></a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span><?php echo $row->added_on ?></a></div>
              <div><a href="#"><span class="icon-person"></span><?php echo $row->author ?></a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
          </div>
        </div>
        <?php } ?>
        
      </div>
      <?php } ?>
     
    </div>

  </div>
</div>
</section> <!-- .section -->
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