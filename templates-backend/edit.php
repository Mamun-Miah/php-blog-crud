<?php include("../includes/header.php") ?>
<?php 

    $id =$_GET["id"];
    include("../includes/include.php");
    $sqldata = "SELECT * FROM posts WHERE id =$id";
    $result = mysqli_query($conn, $sqldata);
 ?>  
        <div class="content">
            <form action="../includes/database.php" method="post">
            <?php
            while ($data = mysqli_fetch_array ($result)) {
            ?>
                <div>
                    <input type="text" placeholder="TITLE" name="title" id="title" value="<?php echo $data['title']; ?>" >
                </div>
                <div>
                <textarea name="content" id="content" value=""><?php echo $data['content']; ?></textarea>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                <div>
                    <P>Current Date:  <?php echo date('y/m/d'); ?></P>
                    <input type="text" name="date" value="<?php echo $data ['date']; ?>">
                </div>
                <div>
                    <input type="submit" placeholder="update" name="update" id="update" value="Update">
                </div>
                <?php
            }
            ?>
            </form>
        </div>
<?php include("../includes/footer.php") ?>



