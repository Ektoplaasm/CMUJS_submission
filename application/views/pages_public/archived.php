
<style>
    .abstract > p {
        display: -webkit-box;
    max-width: 800px;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }
</style>
<div class="article_container">
<div class="articles">
    
    <?php foreach($pub_articles as $pub_article): ?>
        <h2 style="margin:0px;"><?php echo $pub_article['volume_name']?></h2>
        <h3><?php echo $pub_article['title']?></h3>
        <p><?php echo $pub_article['date_published']?></p>
        <div><?php echo $pub_article['abstract']?></div>
        <a href= "<?php echo site_url('/public_page/'.$pub_article['article_id']);?>" style="text-decoration:none;width:100px"><div style="background:#1c4423;height:30px;width:100px;border-radius:5px;"><p style="text-decoration:none;color:white;text-align:center;">View Article</p></div></a>
        <hr>
    <?php endforeach; ?>
</div>
<div class="article_sidebar">
      <h5>Announcements</h5>
      <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>
</div>
</div>
<div class="wrapper">&nbsp;
    <div class="push">&nbsp;</div>
</div>
<div class="footer">
<div class="footer_bg" style="position:absolute;bottom:0;">
      <img class="cmujs_logo" src="<?php echo base_url('assets/cmujs_trans.png')?>">
    </div>
</div>
