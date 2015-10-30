<?php
$header['title']="Classes - The Breathing Room Pilates - Cincinnati";
$header['keywords']="";
$header['description']="Check out our class offerings.";
include "lib/content/classes.php";
include "lib/php/header.php";
?>
<div class="content">
  <h1 class="title">Classes</h1>
  <div class="classes">
    <img src="/Images/PilatesRoom2.jpg" alt="Pilates Room at The Breathing Room" class="image-md-up" />
    <?php foreach ($classes as $class => $info) { ?>
    <div class="class-description">
      <h4><?php echo $info["style"]; ?></h4>
      <h2><?php echo $class; ?></h2>
      <h3><?php echo $info["tagline"]; ?></h3>
      <p>
      <?php echo $info["description"]; ?>
      </p>
      <h4>Cost: <?php echo $info["points"]; ?></h4>
    </div>
    <?php } ?>
  </div> <!-- end classes div-->
</div> <!-- end content div-->
<?php include "lib/php/footer.php"; ?>

