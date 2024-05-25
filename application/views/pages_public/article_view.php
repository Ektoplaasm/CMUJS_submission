
<style>
    .abstract > p {
        display: -webkit-box;
    max-width: 800px;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }

    
</style>
<div>
  <img class="carousel_placeholder" src="<?php echo base_url('assets/CMU_pic.jpg')?>">
</div>
<div class="article_container">
<div class="articles">
<h2 style="margin:0px;">Current Volume - <?php echo $volume['volume_name']?></p></h2>
    <?php foreach($pub_articles as $pub_article): ?>
        <h3><?php echo $pub_article['title']?></h3>
        
        <?php echo $pub_article['date_published']?>
        <div class="abstract">
        <?php echo $pub_article['abstract']?>
        </div>
        <a href= "<?php echo site_url('/public_page/'.$pub_article['article_id']);?>" style="text-decoration:none;width:100px"><div style="background:#1c4423;height:30px;width:160px;border-radius:8px;font-family:interbold"><p style="text-decoration:none;color:white;text-align:center;">View Full Article</p></div></a>
        
        <hr>
    <?php endforeach; ?>
</div>
<div class="article_sidebar">
      <h5>Announcements</h5>
      <p><a href="#">-Update on User Registration Email Requirements for CMU Journal of Science</a></p>
      <p><a href="#">-Call for Papers for Volume 28 (2024)</a></p>
      <p><a href="#">-CMU Journal of Science is now transitioning to Open Journal System (OJS)</a></p>
      <p> <a href="#">-Downloadable Files for Volume 22, Issue 1 (2018) and earlier</a></p>



   
</div>
</div>

<div class="wrapper">&nbsp;
    <div class="push">&nbsp;</div>
</div>
<div class="footer">
<div class="footer_bg" style="bottom:0;">
      <img class="cmujs_logo" src="<?php echo base_url('assets/cmujs_trans.png')?>">
    </div>
</div>