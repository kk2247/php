<?php
$link=mysqli_connect("127.0.0.1","root","855976","t");
header("content-Type:text/html;charset=utf8");
$content=$_POST['content'];
$b=mysqli_query($link,"insert tt set content=$content");
if($b)
echo "<script>alert('succeed');
location.href='index.php';
</script>";
else
echo "<script>alert('fail');
location.href='liuyan.php';
</script>";
?>