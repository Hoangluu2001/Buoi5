<style>
    body{
        background-color: burlywood;
        text-align: center;
    }
    fieldset {
        width: 400px;
        margin: 0px auto;
    text-align: center;
    }
    button{
        width: 80px;
        height: 30px;
    }
    input{
        width: 300px;
        height: 30px;
    }
    form{
        position: absolute;
        left: 40%;
        top : 30%;
        width: 50px;
        height: 70px;
    }

</style>
<form method="post">
    <fieldset>
        <legend>DANG NHAP</legend>
        <span>Đăng nhập</span><br><br>
    <input type="text" name="User" placeholder="Tài khoản" style="background: darkkhaki"> <br><br>
    <input type="password" name="Password" placeholder="Mật khẩu" style="background: darkkhaki"> <br><br>
    <button type="submit" name="btn" id="submit" style="background: #ff9900">Logn in</button>
    </fieldset>
</form>

<?php
$arr = array(["admin","admin"],["luu",'2001']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['User']) && (!empty($_POST['Password']))) {
        $user = $_POST["User"];
        $pass = $_POST["Password"];
        $login = false;
            if ($user == $arr[0][0] && $pass == $arr[0][1]) {
                header("location:https://github.com/Hoangluu2001/Buoi4/blob/master/login.php");
                $login = true;
            }
        }
        if ($login ) {
            echo "dang nhap thanh cong";
        } else {
            echo "dang nhap sai";
        }

    }

?>