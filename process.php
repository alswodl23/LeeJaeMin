<?php

    $conn = mysqli_connect("localhost", "root", "246246", "MySQL"); // ip적는곳(127.0.0.1 / localhost 둘다됨), root는 관리자권한, 비밀번호, 스키마 이름

    $filtered = array(
        'chid'=>mysqli_real_escape_string($conn, $_POST['chid']),
        'password'=>mysqli_real_escape_string($conn, $_POST['password']),
        'name'=>mysqli_real_escape_string($conn, $_POST['name']),
        'birth'=>mysqli_real_escape_string($conn, $_POST['birth'])
    );

    $sql ="
        insert into musiclog (chid, password, name, birth)
        values(
            '{$filtered['chid']}',
            '{$filtered['password']}',
            '{$filtered['name']}',
            '{$filtered['birth']}'
    )";

       $result =  mysqli_query($conn, $sql); //prolan 테이블에 Values 내용
       if($result === false)
       {
            echo '문제가 발생했습니다. 관리자에게 문의하세요.';
            echo mysqli_error($conn); //잘못됬는지 체크해줌
       }
       else{
           echo '회원가입에 성공하셨습니다.
           <p><a href="index.php">로그인 페이지로 돌아가기</a></p>
           ';
       }
?>