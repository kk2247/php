<?php
$link=mysqli_connect("127.0.0.1","root","855976","t");
header("content-Type:text/html;charset=utf8");
session_start();
$content=$_POST['content'];
$id= $_SESSION['ID'];
$a=mysqli_query($link,"UPDATE tt SET content = $content WHERE id = $id");
if($a)
echo "<script>alert('succeed');
location.href='index.php';
</script>";
else
echo "<script>alert('fail');
location.href='liuyan.php';
</script>";
?>