<?php
$link=mysqli_connect("127.0.0.1","root","855976","t");
$c=mysqli_query($link,"select * from tt");
$d=mysqli_row