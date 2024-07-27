<?php include("../includes/header.php") ?>
<table>
    <thead>
        <tr>
            <th style="padding-right: 10px;">ID</th>
            <th style="padding-right: 10px;">Date</th>
            <th style="padding-right: 10px;">Title</th>
            <th style="padding-right: 10px;">Actions</th>
        </tr>
    </thead>
    <tbody>
        
            <?php 
                 include("../includes/include.php");
                 $sqlshow = "SELECT * FROM posts";
                 $result = mysqli_query($conn, $sqlshow);
                 while ($data = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                    <td style="padding-right: 10px;"><?php echo $data["id"]?></td>
                    <td style="padding-right: 10px;"><?php echo $data["date"]?></td>
                    <td style="padding-right: 10px;"><?php echo $data["title"]?></td>
                    <td style="padding-right: 10px;">
                        <a href="./view.php?id=<?php echo $data["id"]?>">View</a>
                        <a href="./delete.php?id=<?php echo $data["id"]?>">Delete</a>
                        <a href="./edit.php?id=<?php echo $data["id"]?>">Update</a>
                    </td>
                    <?php
                 }
            ?>
        
        </tr>
    </tbody>
</table>

<?php include("../includes/footer.php") ?>