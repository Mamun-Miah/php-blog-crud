<?php
if (isset($_POST ["submit"])) {
    include("../includes/include.php");
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $title = mysqli_real_escape_string($conn,$_POST["title"]);
    $content = mysqli_real_escape_string($conn,$_POST["content"]);
    $splInsert = "INSERT INTO posts(`date`, `title`, `content`) VALUES ('$date','$title','$content')";
    if (mysqli_query ($conn, $splInsert)) {
        echo ("Send Done");
        header ("Location: ../templates-backend/index.php");
    } else {
        echo ("not Send");
    }
    

}
?>

<?php
if (isset($_POST["update"])) {
    include("../includes/include.php");
    $title = mysqli_real_escape_string ($conn, $_POST["title"]);
    $content = mysqli_real_escape_string ($conn, $_POST["content"]);
    $id = mysqli_real_escape_string ($conn, $_POST["id"]);
    $date = mysqli_real_escape_string ($conn, $_POST["date"]);
   // $sqlInsert = "INSERT INTO posts(title, content) VALUES ('$title','$content')";
    $sqlUpdate = "UPDATE posts SET date = '$date', title= '$title', content= '$content' WHERE id = $id";

    if (mysqli_query($conn, $sqlUpdate)) {
        header ("Location: ../templates-backend/index.php");
    } else {
        die("data not insert");
    }
}
?>