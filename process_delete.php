<?php

    $conn = mysqli_connect("localhost", "root", "246246", "test_db"); // ip적는곳(127.0.0.1 / localhost 둘다됨), root는 관리자권한, 비밀번호, 스키마 이름

    settype($_POST['id'], 'integer'); # 정수값으로 형변환.
    $filtered = array(
        'id'=>mysqli_real_escape_string($conn, $_POST['id'])
    );

    $sql ="
        delete from musiclog
        where id = {$filtered['id']}
        ";

       $result =  mysqli_query($conn, $sql); //prolan 테이블에 Values 내용
       if($result === false)
       {
            echo '문제가 발생했습니다. 관리자에게 문의하세요.';
            echo mysqli_error($conn); //잘못됬는지 체크해줌
       }
       else{
           echo '삭제 성공했습니다.
           <p><a href="index.php">처음으로</a></p>
           ';
       }
?>