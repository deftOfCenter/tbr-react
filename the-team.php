<?php
$header['title']="Instructors - The Breathing Room Pilates - Cincinnati";
$header['keywords']="";
$header['description']="Find out about our phenomenal instructors, their skills, their history, their prowess";
include "lib/content/staff.php";
include "lib/php/header.php";
?>
<div class="content">
  <h1 class="title">The Team</h1>
  <div class="bios">
    <!-- <ul class="bios_links"> -->
    <!-- <?php foreach ($staff as $name => $bio) { ?> -->
    <!--   <li><a href="#<?php echo strtolower($name); ?>bio"><?php echo $name; ?></a> -->
    <!-- <?php } ?> -->
    <!-- </ul> -->
    <?php foreach ($staff as $name => $bio) { ?>
    <div class="bio" id="<?php echo strtolower($name); ?>bio">
      <h2 class="bio__name"><?php echo $name; ?></h2>
      <img src="/Images/<?php echo preg_replace("/[\s]+/", "", $name); ?>BioPic.jpg" alt="<?php echo $name; ?>" class="bio__image"/>
      <?php echo $bio; ?>
      <div class="clear"></div>
    </div>
    <?php } ?>
  </div>
</div>
<?php include "lib/php/footer.php"; ?>

