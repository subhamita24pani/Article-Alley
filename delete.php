<?php
if(!isset($_GET['id'])){
    header("location:myaccount.php");
}
$id = $_GET['id'];
require_once "functions.php";
$res = deleteBlog($id);
if($res){
    ?>
    <script>
        alert("Blog deleted");
        window.location="myaccount.php";
     </script>
 <?php
}else{
    ?>
    <script>
            alert("Invalid ID");
            window.location = "myaccount.php";
        </script>
<?php
}
?>