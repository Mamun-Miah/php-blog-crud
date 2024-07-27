<?php include("../includes/header.php") ?>
<?php
$id = $_GET["id"];
include("../includes/include.php");
$sqlView = "SELECT * FROM `posts` WHERE id = $id";
$result = mysqli_query($conn, $sqlView);
$data = mysqli_fetch_array($result);

?>

<section>
    <div>Date: <?php echo $data["date"]?></div>
    <div>
        <h1> Title: <?php echo $data["title"]?></h1>
    </div>
    <div><?php echo $data["content"]?></div>
</section>

<?php include("../includes/footer.php") ?>