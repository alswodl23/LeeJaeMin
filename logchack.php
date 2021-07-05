<?php
        $conn = mysqli_connect("localhost", "root", "246246", "MySQL"); 
        if (mysqli_connect_error())
        {
            echo "DB 연결에 실패하였습니다." . mysqli_connect_error();
        }
        $sql = "Select * from musiclog";
        $result =  mysqli_query($conn, $sql); 
        $chack = 0;
        $list = '';

        $filtered = array(
            'chid'=>mysqli_real_escape_string($conn, $_POST['chid']),
            'password'=>mysqli_real_escape_string($conn, $_POST['password'])
        );
        
        while($row = mysqli_fetch_array($result))
        {
            $escaped_chid = htmlspecialchars($row['chid']);
            $escaped_password = htmlspecialchars($row['password']);

            if($escaped_chid == $filtered['chid'] && $escaped_password == $filtered['password'])
            {
                $list = $list."<h3>로그인 성공하셨습니다.</h3>
                <p><a href=\"index2.php?id={$row['id']}\">접속하기</p>";
                $chack = 1;
                break;
            } 
        }

        if($chack == 0)
        {
            $list = $list."<h3>연결에 실패하였습니다.</h3>
            <p><a href=\"index.php\">돌아가기</p>";
        }
?>

<html lang="en">
<body>
    <?php
        echo $list;
    ?>
</body>
</html>