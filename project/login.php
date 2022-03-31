<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login">
        <span>
            <p style="font-size: 25px;"><b>로그인</b></p>
        </span>

        <form method='post' action='login_action.php'>
            <p><b>I &nbsp;D &nbsp;</b><input name="id" type="text"></p>
            <p><b>PW &nbsp;</b><input name="pw" type="password"></p>
            <button class="login_button" onclick="location.href='./login_action.php'">로그인</button>
            <button class="register_button" id="register" onclick="location.href='./register.php'">회원가입</button>
            <br><br>
        </form>
    </div>
</body>

</html>