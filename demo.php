<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="search_box.css">
  <script src="main.js"></script>
</head>
<body>


<form action="" method="post">
<input type="text" name="search">
<a name="submit"><i class="fas fa-search-location"></i></a>

</form>
<?php
$servername='localhost';
$username='root'; // User mặc định là root
$password='';
$dbname = "data"; // Cơ sở dữ liệu
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('Không thể kết nối Database:' .mysql_error());
}

    if(ISSET($_POST['submit'])){
        $keyword = $_POST['search'];
?>
<div>
    <h2>Kết quả</h2>
    <?php

        $query = mysqli_query($conn, "SELECT * FROM `product` WHERE `name` LIKE '%$keyword%' ORDER BY `name`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
        <?php echo $fetch['name']?>
        <p><?php echo substr($fetch['id'], 0, 100)?>...</p>
    <?php
        }
    ?>
</div>
<?php
    }
?>
</body>
</html>