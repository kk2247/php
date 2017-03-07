<?php
$link=mysqli_connect("127.0.0.1","root","855976","t");
session_start();
header("content-Type: text/html; charset=utf-8");
$id=$_POST['id'];
$password= $_POST['password'];
$_SESSION['ID']=$id;
$c=mysqli_query($link,"SELECT * FROM tt WHERE id=$id");
if($c)
{
$d=mysqli_fetch_assoc($c);
if($password==$d['password'])
echo "<script>alert('succeed!');
location.href='liuyan.php';
</script>";
else
echo "<script>alert('your password is wrong!');
location.href='index.php';
</script>";
}
else{
echo "<script>alert('there is no such id!');
location.href='index.php';
</script>";
}

?>
