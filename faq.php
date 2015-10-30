<?php
$header['title']="FAQs - The Breathing Room Pilates - Cincinnati";
$header['keywords']="";
$header['description']="Check out these faqs to answer your deepest questions";
include "lib/content/faqs.php";
include "lib/php/header.php";
?>
<div class="content">
  <h1 class="title">FAQs</h1>
  <div class="faqs">
    <img src="Images/jPilates-58.jpg" alt="Joseph Pilates at 58 years old" class="image-md-up" />
    <?php foreach ($faqs as $question => $answer) { ?>
    <div class="faq">
      <h2><?php echo $question; ?></h2>
      <?php echo $answer; ?>
    </div>
    <?php } ?>
  </div>
</div>
<?php include "lib/php/footer.php"; ?> 
