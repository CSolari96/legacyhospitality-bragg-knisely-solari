<?php /* Template Name: Archive Page */

get_header();
?>
<div class="archive-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 no-padding-archive">
        <h2 class="top-title-archive"><?php
          if(is_category()){
            single_cat_title();
          }elseif(is_tag()){
            single_tag_title();
          }elseif(is_year()){
            echo "Yearly Archives: " . get_the_date('Y');
          }else{
            echo "Archives";
          }
         ?>
       </h2>
        <?php if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <div class="row seperate-post-by-color">
              <div class="col-md-3 archive-pictures">
                <?php the_post_thumbnail('thumbnail'); ?>
              </div>
              <div class="col-md-9 individual-posts">
                <div class="padding-archive-posts">
                  <h3 class="archive-title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h3>
                  <p>Published on: <?php the_time('F Y');?></p>
                  <p><?php the_excerpt(); ?></p>
                  <div class="archive-read-more">
                    <a href="<?php the_permalink() ?>">Read More</a>
                  </div>
                </div>
              </div>
          </div>
            <?php
          }// ends while loop
        } //ends if statement
        ?>

      </div>
  </div>
</div>

<?php get_footer(); ?>
