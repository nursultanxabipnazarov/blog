
<?php  

require __DIR__.'/app/controllers/posts.php';
?>



<section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">BLOG</h2>
            <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
            <hr class="bottom-line">
          </div>
          <?php foreach ($posts as $key => $post) :?>
         
          <div class="col-md-4 col-sm-6 col-xs-12">
          
            
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/post/<?=$post['img']?>" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2><?=$post['title'];?></h2>
                <div class="blog-comment">
                  <p>Posted In: <span>Legal Advice</span></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 15</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p><?=$post['text'];?></p>
                <a href="single.php?single_id=<?=$post['id'];?>" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
          <?endforeach;?>

        </div>
      </div>
    </section>