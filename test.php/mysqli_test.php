
<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
?>

</body>
</html>
