<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Vu Thi Huong Khoa";

//khoitao (tennguoidung,giatri,thoigian het han sau 24 ngay, cookie co san trong toan bo trang web)
setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/");

?>
<html>

<body>

    <?php
    //isset: ktra cookie dc cai dat ch
if(!isset($_COOKIE[$cookie_name])){
    echo"cookie name:  " .$cookie_name. "chua duoc thiet lap<br>";
}else{
    echo "cookie:  ".$cookie_name." da duoc thiet lap";
    echo "gia tri la: ".$_COOKIE[$cookie_name];
}
    ?>
<p><strong> Note:</strong> You might have to reload the page to see value of the cookie</p>
</body>

</html>