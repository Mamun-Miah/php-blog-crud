<?php include("../includes/header.php") ?>
<section class="creat-post">
<form action="../includes/database.php" method="post">  

    <div class="form">
        <input type="hidden" name="date" id="date" value="<?php echo date('y/m/d')?>">
        <p>Date: <?php echo date('y/m/d')?></p>
    </div>

    <div class="form"><input type="text" name="title" placeholder="Title" value="<?php echo ("empty") ?>"></div>

    <div class="form"><textarea name="content" id="content" placeholder="content"></textarea></div>

    <input type="submit" name="submit">
</form> 
</section>
<?php include("../includes/footer.php") ?>