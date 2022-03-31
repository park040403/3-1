<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <?php
        $connect = mysqli_connect('localhost','root','','db_board') or die("connect failed");
        $query = "select * from board order by number desc";
        $result = mysqli_query($connect, $query);
        $total = mysqli_num_rows($result);

        session_start();

        if (isset($_SESSION['userid'])) {
        ?><b><?php echo $_SESSION['userid']; ?></b>님 반갑습니다.
            <button onclick="location.href='./logout_action.php'" style="float:right; font-size:15.5px;">로그아웃</button>
            <br />
        <?php
        } else {
        ?>
            <button onclick="location.href='./login.php'" style="float:right; font-size:15.5px;">로그인</button>
            <br />
        <?php
        }
        ?>
        <p><b>게시판</b></p>
        <table align="center">
            <thead algin="center">
                <tr>
                    <td width="50" align="center">번호</td>
                    <td width="500" align="center">제목</td>
                    <td width="100" align="center">작성자</td>
                    <td width="200" align="center">날짜</td>
                    <td width="50" align="center">조회수</td>
                </tr>
            </thaed>
            <tbody>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                    if ($total % 2 == 0) {
                ?>
                    <tr class="even">
                        <?php } else {
                        ?>
                    <tr>
                        <?php } ?>
                    <td width="50" align="center"><?php echo $total ?></td>
                    <td width="500" align="center">
                        <a href="read.php?number=<?php echo $rows['number'] ?>">
                        <?php echo $rows['title'] ?>
                    </td>
                    <td width="100" align="center"><?php echo $rows['id'] ?></td>
                    <td width="200" align="center"><?php echo $rows['date'] ?></td>
                    <td width="50" align="center"><?php echo $rows['hit'] ?></td>
                    </tr>
                    <?php
                    $total--;
                }
                    ?>
            </tbody>
        </table>
        <div class=text>
            <font style="cursor: hand" onclick="location.href='./write.php'">글쓰기</font>
        </div>
    </body>
</html>