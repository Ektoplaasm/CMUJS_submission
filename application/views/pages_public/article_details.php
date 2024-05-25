

<div class="article_container">
<div class="articles">

        <h2 style="margin:0px;"><?php echo $pub_article['volume_name']?></h2>
        <h3><?php echo $pub_article['title']?></h3>
        <p>Date Released : <?php echo $pub_article['date_published']?></p>
        <p>Article DOI : <?= $pub_article['doi']?></p>
        <p>&nbsp;</p>
        <div class="none"><?php echo $pub_article['abstract']?></div>
        <a href="<?php echo base_url('assets/cmujs_pdf/'.$pub_article['file_name'])?>" style="text-decoration:none;"><div style="background:red;height:40px;width:160px;border-radius:8px;font-family:interbold"><p style="text-decoration:none;color:white;text-align:center;">View Article PDF</p></div></a>
        <hr>
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

