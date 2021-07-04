<?php
    $conn = mysqli_connect("localhost", "root", "246246", "test_db"); 
    if (mysqli_connect_error())
    {
        echo "DB 연결에 실패하였습니다." . mysqli_connect_error();
    }

    $article = array(
        'chid'=>'',
        'password'=>'',
        'name'=>'',
        'birth'=>''
    );

    if(isset($_GET['id']))
    {
        $filltered_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "Select * from musiclog where id = {$filltered_id}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article['chid']  = htmlspecialchars($row['chid']);
        $article['password']  = htmlspecialchars($row['password']);
        $article['name']  = htmlspecialchars($row['name']);
        $article['birth']  = htmlspecialchars($row['birth']);
    };

    $update_link = '<a href="myUpdate.php?id='.$_GET['id'].'">Update</a>';
    $delete_link = '
    <form action ="myprocess_delete.php" method = "post">
        <input type = "hidden" name = "id" value = "'.$_GET['id'].'">
        <input type = "submit" value = "delete">
    </form>
    ';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/816d73dec6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/custom.js"></script>
    
    <script src="js/home_slid.js"></script>
    <script src="js/login_pop.js"></script>
    <script src="js/playbox.js"></script>
    <script src="js/menu2.js"></script>
    <script src="js/slid.js"></script>


    <title>World Music</title>

    
</head>
<body>
    <div id="wrap">
        <div id="header">
            <ul class="video_1">
                <li>
                    <div></div>
                </li>
                <li>
                    <div></div>
                </li>
                <li>
                    <div></div>
                </li>
                <li>
                    <div></div>
                </li>
                <li>
                    <div></div>
                </li>
            </ul>
            <div class="bg_1">
            <div class = "pop_up">
                    <h3>[회원정보 수정]</h3>
                    <form action="process_update.php" method = "POST">
                        <input type="hidden" name = "id" value = "<?=$_GET['id']?>">
                        <div>
                            <input type="password" name = "password" placeholder = "Password" value = "<?=$article['password']?>">
                        </div>
                        <div>
                            <input type="name" name = "name" placeholder = "Name" value = "<?=$article['name']?>">
                        </div>
                        <div>
                            <input type="birth" name = "birth" placeholder = "Birth" value = "<?=$article['birth']?>">
                        </div>
                        <div class="submit_btn">
                            <input type="submit">
                        </div>
                    </form>
                </div>
                <div class="bar_1">
                    <input type="search" placeholder="Search">
                    <i class="fas fa-search transform"></i>
                </div>
                <div class="chart_main transform">
                    <ul class="after">
                        <li>
                            <p>Top charts 10</p>
                            <ul class="chart_box">
                                <li>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>1...</li>
                                            <li>에잇(Prod.&Feat. SUGA of BTS)</li>
                                            <li>아이유</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>2...</li>
                                            <li>나비와 고양이 (feat.백현 (BAEKHYUN))</li>
                                            <li>볼빨간사춘기</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>3...</li>
                                            <li>아로하</li>
                                            <li>조정석</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>4...</li>
                                            <li>살짝 설렜어 (Nonstop)</li>
                                            <li>오마이걸</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>5...</li>
                                            <li>ON</li>
                                            <li>방탄소년단</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>6...</li>
                                            <li>MAP OF THE SOUL : PERSONA</li>
                                            <li>방탄소년단</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>7...</li>
                                            <li>Punch</li>
                                            <li>NCT 127</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>8...</li>
                                            <li>00:00 (Zero O’Clock)</li>
                                            <li>방탄소년단</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>9...</li>
                                            <li>좋은 사람 있으면 소개시켜줘</li>
                                            <li>조이 (JOY)</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>10...</li>
                                            <li>덤더럼(Dumhdurum)</li>
                                            <li>Apink (에이핑크)</li>
                                        </ul>
                                    </a>
                                </li>    
                            </ul>
                        </li>
                        <li>
                            <p>POP charts</p>
                            <ul class="chart_box">
                                <li>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>1...</li>
                                            <li>Dance Monkey</li>
                                            <li>Tones And I</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>2...</li>
                                            <li>Don't Start Now</li>
                                            <li>Dua Lipa</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>3...</li>
                                            <li>2002</li>
                                            <li>Anne-Marie</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>4...</li>
                                            <li>Memories</li>
                                            <li>Maroon 5</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>5...</li>
                                            <li>Maniac</li>
                                            <li>Conan Gray</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>6...</li>
                                            <li>Paris In The Rain</li>
                                            <li>Lauv</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>7...</li>
                                            <li>To Die For</li>
                                            <li>Sam Smith</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>8...</li>
                                            <li>Stuck with U</li>
                                            <li>Ariana Grande, Justin Bieber</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>9...</li>
                                            <li>bad guy</li>
                                            <li>Billie Eilish</li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>10...</li>
                                            <li>Painkiller</li>
                                            <li>Ruel</li>
                                        </ul>
                                    </a>
                                </li>    
                            </ul>
                        </li>
                        <li>
                            <p>Artists</p>
                            <ul class="chart_box">
                                <li>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>1...</li>
                                            <li>NCT 127</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>2...</li>
                                            <li>방탄소년단</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>3...</li>
                                            <li>아이유</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>4...</li>
                                            <li>투모로우바이투게더</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>5...</li>
                                            <li>볼빨간사춘기</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>6...</li>
                                            <li>임영웅</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>7...</li>
                                            <li>오마이걸</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>8...</li>
                                            <li>김호중</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>9...</li>
                                            <li>CHEEZE (치즈)</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                    <a href="#">
                                        <ul class="after CM_1">
                                            <li>10...</li>
                                            <li>DAY6 (데이식스)</li>
                                            <li></li>
                                        </ul>
                                    </a>
                                </li>    
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="login">
                    <ul>
                        <li>
                            <a href="#" class="loginA on">
                                안녕하세요. 
                                <?php
                                    echo $article['name'];
                                ?>
                                님
                            <i class="fas fa-chevron-up"></i></a>
                            <a href="#" class="loginB">개인정보<i class="fas fa-chevron-down"></i></a>
                        </li>
                    </ul>
                    <div class="pop1">
                        <p> Id : 
                            <?php
                                echo $article['chid']  = htmlspecialchars($row['chid']);
                            ?>
                        </p>
                        <p> Password : 
                            <?php
                                echo $article['password']  = htmlspecialchars($row['password']);
                            ?>
                        </p>
                        <p> Name : 
                            <?php
                                echo $article['name']  = htmlspecialchars($row['name']);
                            ?>
                        </p>
                        <p> Birth
                            <?php
                                echo $article['birth']  = htmlspecialchars($row['birth']);
                            ?>
                        </p>
                        <p>
                            <a href="#" class="sign_up">회원정보 수정하기</a>
                        </p>
                        <form action ="myprocess_delete.php" method = "post">
                            <input type = "hidden" name = "id" value = "'.$_GET['id'].'">
                            <input type = "submit" name = "회원탈퇴" value = "delete">
                        </form>
                    </div>
                </div>
                <div class="logo transform">
                    <div class="logo_1">
                        <div>
                            <a href="#"><img src="img/logo2.gif." alt=""></a>
                        </div>
                        <div>
                            <a href="#">
                                <i class="fas fa-mouse"></i>
                                <i class="fas fa-angle-double-down"></i>
                            </a>                    
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div id="contents">
            <div class="con">
                <ul>
                    <li class="sidemenu">
                        <div class="logo_2">
                            <a href="#" class="after">
                                <div>
                                    <img src="img/logo.gif" alt="">
                                </div>
                                <p>World Music</p>
                            </a>
                        </div>
                        <div class="bar_2">
                            <input type="search">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="Browse Browse1">
                            <h2>Browse</h2>
                            <ul>
                                <li>
                                    <a href="#" class="after">
                                        <i class="fas fa-microphone"></i>
                                        <p>POP chart</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="after">
                                        <i class="far fa-image"></i>
                                        <p>Albums</p>
                                    </a>
                                </i>
                                <li>
                                    <a href="#" class="after">
                                        <i class="fas fa-user"></i>
                                        <p>Artists</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="after">
                                        <i class="fas fa-video"></i>
                                        <p>Video</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="Browse Browse2">
                            <h2>MY MUSIC</h2>
                            <ul>
                                <li>
                                    <a href="#" class="after">
                                        <i class="fas fa-history"></i>
                                        <p>Recently Played</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="after">
                                        <i class="fas fa-heart"></i>
                                        <p>Favorite Songs</p>
                                    </a>
                                </i>
                                <li>
                                    <a href="#" class="after">
                                        <i class="far fa-file-alt"></i>
                                        <p>Local Files</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="playbox playbox1">
                            <div>
                                <p>Play List</p>
                            </div>
                            <ul>
                                <li class="pb1_1 after">
                                    <a href="#">
                                        <div class="pb1_1_img">
                                            <img src="img/ex2.jpg" alt="">
                                        </div>
                                        <div><h3>에잇(Prod.&Feat. SUGA of BTS)</h3></div>
                                        <div><p>아이유</p></div>
                                    </a>
                                </li>
                                <li class="pb1_1 after">
                                    <a href="#">
                                        <div class="pb1_1_img">
                                            <img src="img/ex1.jpg" alt="">
                                        </div>
                                        <div><h3>나비와 고양이 (feat.백현 (BAEKHYUN))</h3></div>
                                        <div><p>볼빨간 사춘기</p></div>
                                    </a>
                                </li>
                                <li class="pb1_1 after">
                                    <a href="#">
                                        <div class="pb1_1_img">
                                            <img src="img/ex3.jpg" alt="">
                                        </div>
                                        <div><h3>아로하</h3></div>
                                        <div><p>조정석</p></div>
                                    </a>
                                </li>
                                <li class="pb1_1 after">
                                    <a href="#">
                                        <div class="pb1_1_img">
                                            <img src="img/ex4.jpg" alt="">
                                        </div>
                                        <div><h3>Candy</h3></div>
                                        <div><p>백현 (BAEKHYUN)</p></div>
                                    </a>
                                </li>
                                <li class="pb1_1 after">
                                    <a href="#">
                                        <div class="pb1_1_img">
                                            <img src="img/ex5.jpg" alt="">
                                        </div>
                                        <div><h3>사랑하게 될 줄 알았어</h3></div>
                                        <div><p>전미도</p></div>
                                    </a>
                                </li>
                                <li class="pb1_1 after">
                                    <a href="#">
                                        <div class="pb1_1_img">
                                            <img src="img/ex6.jpg" alt="">
                                        </div>
                                        <div><h3>살짝 설렜어 (Nonstop)</h3></div>
                                        <div><p>오 마이 걸</p></div>
                                    </a>
                                </li>
                                <li class="pb1_1 after">
                                    <a href="#">
                                        <div class="pb1_1_img">
                                            <img src="img/ex7.jpg" alt="">
                                        </div>
                                        <div><h3>ON</h3></div>
                                        <div><p>방탄소년단</p></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="playbox playbox2">
                            <ul>
                                <li class="pb2_1">
                                    <p>Play List</p>
                                    <a href="#" class="pb2_1_1 on"><i class="fas fa-angle-up"></i></a>
                                    <a href="#" class="pb2_1_2"><i class="fas fa-angle-down"></i></a>
                                </li>
                                <li class="pb2_2">
                                    <div>
                                        <p>나비와 고양이 (feat.백현 (BAEKHYUN))</p>
                                        <p>볼빨간사춘기</p>
                                    </div>                               
                                </li>
                                <li class="pb2_3">
                                    <div class="pb2_3_1"></div>
                                    <div class="pb2_3_2"></div>
                                </li>
                                <li class="pb2_4">
                                    <a href="#">
                                        <!-- 이부분은 전에 배웠던 누르면 이미지가 비뀌는 그걸 이용하면 됨 임시로 on 넣어놈-->
                                        <i class="far fa-play-circle on"></i>
                                        <i class="far fa-pause-circle"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-random"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-step-backward"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-step-forward"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-sync-alt"></i>
                                    </a>
                                </li>
                                <li class="pb2_time transform after">
                                    <p>00:00</p>
                                    <p>03:24</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mainmenu mainmenu1">
                        <ul class="after">
                            <li class="mam_1 mam_1A after">
                                <div class="mam_1A_1">
                                    <h2>Top charts 5</h2>
                                    <a href="#">
                                        <p><i class="fas fa-plus"></i>show more</p>
                                    </a>
                                    <ul>
                                        <li class="after mam_1A_1A_1 mam_1A_1A_1A">
                                            <div>
                                                <a href="#">
                                                   <i class="far fa-heart"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#">
                                                        <h3 class="text_over">
                                                            에잇(Prod.&Feat. SUGA of BTS)
                                                    </h3>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <p>
                                                            아이유
                                                       </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="transform">
                                                    03:42
                                                </p>
                                            </div>
                                        </li>
                                        <li class="after mam_1A_1A_1 mam_1A_1A_1B">
                                            <div>
                                                <a href="#">
                                                   <i class="far fa-heart"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#">
                                                        <h3 class="text_over">
                                                            나비와 고양이 (feat.백현 (BAEKHYUN))
                                                    </h3>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <p>
                                                            볼빨간사춘기
                                                       </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="transform">
                                                    03:24
                                                </p>
                                            </div>
                                        </li>
                                        <li class="after mam_1A_1A_1 mam_1A_1A_1C">
                                            <div>
                                                <a href="#">
                                                   <i class="far fa-heart"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#">
                                                        <h3 class="text_over">
                                                            아로하
                                                    </h3>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <p>
                                                            조정석
                                                       </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="transform">
                                                    04:11
                                                </p>
                                            </div>
                                        </li>
                                        <li class="after mam_1A_1A_1 mam_1A_1A_1D">
                                            <div>
                                                <a href="#">
                                                   <i class="far fa-heart"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#">
                                                        <h3 class="text_over">
                                                            살짝 설렜어 (Nonstop)
                                                    </h3>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <p>
                                                            오마이걸
                                                       </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="transform">
                                                    03:24
                                                </p>
                                            </div>
                                        </li>
                                        <li class="after mam_1A_1A_1 mam_1A_1A_1E">
                                            <div>
                                                <a href="#">
                                                   <i class="far fa-heart"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#">
                                                        <h3 class="text_over">
                                                            ON
                                                    </h3>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <p>
                                                            방탄소년단
                                                       </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="transform">
                                                    05:55
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mam_1A_2">
                                    <h2>NEWS</h2>
                                    <div>
                                        <a href="#"><i class="fas fa-times"></i></a>
                                        <ul class="panel after">
                                            <li class="mam_AA">
                                                <a href="#"></a>
                                            </li>
                                            <li class="mam_AB">
                                                <a href="#"></a>
                                            </li>
                                            <li class="mam_AC">
                                                <a href="#"></a>
                                            </li>
                                            <li class="mam_AD">
                                                <a href="#"></a>
                                            </li>
                                            <li class="mam_AE">
                                                <a href="#"></a>
                                            </li>
                                            <li class="mam_AB">
                                                <a href="#"></a>
                                            </li>
                                        </ul>
                                    </div>                                  
                                    <a href="#" class="mam_2A_next">
                                        <i class="fas fa-chevron-left slid_left transform"></i>
                                    </a>
                                    <a href="#" class="mam_2A_prev">
                                        <i class="fas fa-chevron-right slid_right transform"></i>
                                    </a>
                                </div>
                                <div class="mam_1A_3 mam_1A_3A">
                                    <a href="#">
                                       <div></div>
                                        <h2 class="transform">CHART</h2>
                                    </a>
                                </div>
                                <div class="mam_1A_4 mam_1A_3A">
                                    <a href="#">
                                       <div></div>
                                        <h2 class="transform">NEW RELEASE</h2>
                                    </a>
                                </div>
                                <div class="mam_1A_5 mam_1A_3A">
                                    <a href="#">
                                       <div></div>
                                        <h2 class="transform">DISCOVER</h2>
                                    </a>
                                </div>
                            </li>
                            <li class="mam_1 mam_1B after">
                                <a href="#" class="mam_1B_1 after">
                                    <h2>Recommended Albums</h2>
                                </a>
                                <a href="#" class="mam_1B_1">
                                    <p><i class="fas fa-plus"></i>show more</p>
                                </a>                              
                                <div class="mam_1B_2">
                                    <a href="#">
                                        <div></div>
                                        <h3 class="transform text_over">
                                            사춘기집Ⅱ 꽃 본 나비
                                        </h3>
                                        <p class="transform text_over">
                                            볼빨간 사춘기
                                        </p>
                                        <ul>
                                            <li class="icon1">
                                                <i class="far fa-play-circle on icon1"></i>
                                            </li>
                                            <li class="icon2">
                                                <i class="fas fa-plus icon2"></i>
                                            </li>
                                        </ul>
                                    </a>                                
                                </div>
                                <div class="mam_1B_3">
                                    <a href="#">
                                        <div></div>
                                        <h3 class="transform text_over">
                                            에잇
                                        </h3>
                                        <p class="transform text_over">아이유</p>
                                        <ul>
                                            <li class="icon1">
                                                <i class="far fa-play-circle on icon1"></i>
                                            </li>
                                            <li class="icon2">
                                                <i class="fas fa-plus icon2"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="mam_1B_4">
                                    <a href="#">
                                        <div></div>
                                        <h3 class="transform text_over">
                                            슬기로운 의사생활 OST Part 12
                                        </h3>
                                        <p class="transform text_over">미도와 파라솔</p>
                                        <ul>
                                            <li class="icon1">
                                                <i class="far fa-play-circle on icon1"></i>
                                            </li>
                                            <li class="icon2">
                                                <i class="fas fa-plus icon2"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="mam_1B_5">
                                    <a href="#">
                                        <div></div>
                                        <h3 class="transform text_over">
                                            영혼수선공 OST Part.3
                                        </h3>
                                        <p class="transform text_over">
                                            SURAN (수란)
                                        </p>
                                        <ul>
                                            <li class="icon1">
                                                <i class="far fa-play-circle on icon1"></i>
                                            </li>
                                            <li class="icon2">
                                                <i class="fas fa-plus icon2"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="mam_1B_6">
                                    <a href="#">
                                        <div></div>
                                        <h3 class="transform text_over">
                                            사랑의 콜센타 PART8    
                                        </h3>
                                        <p class="transform text_over">Various Artists</p>
                                        <ul>
                                            <li class="icon1">
                                                <i class="far fa-play-circle on icon1"></i>
                                            </li>
                                            <li class="icon2">
                                                <i class="fas fa-plus icon2"></i>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mainmenu mainmenu2">
                        <div class="mam_2A">
                            <a href="#">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div>
                        <div class="transform mam_2_0A">
                            <input checked id="nav-chart" name="nav" type="radio"><label class="nav-chart" for="nav-chart">MUSIC</label>
                            <input id="nav-playlist" name="nav" type="radio"><label class="nav-playlist" for="nav-playlist">M.V</label>
                        </div>
                        <ul>
                            <li class="mam_2_0">
                            </li>
                            <li class="mam_2_1">
                                <div class="transform mam_2_1_1"></div>
                            </li>
                            <li class="mam_2_2">
                                <h2>나비와 고양이 (feat.백현 (BAEKHYUN))</h2>
                                <p>볼빨간사춘기</p>
                            </li>
                            <li class="mam_2_3">
                                <div class="transform"></div>
                                <div class="transform"></div>
                            </li>
                            <li class="mam_2_4 after">
                                <p>00:00</p>
                                <p>03:24</p>
                            </li>
                            <li class="mam_2_5">
                                <a href="#">
                                    <!-- 이부분은 전에 배웠던 누르면 이미지가 비뀌는 그걸 이용하면 됨 임시로 on 넣어놈-->
                                    <i class="far fa-play-circle on"></i>
                                    <i class="far fa-pause-circle"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-step-backward"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-step-forward"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    
</body>
</html>