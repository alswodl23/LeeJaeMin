import pygame
import random
from time import sleep

WHITE = (255, 255, 255)
RED = (255, 0, 0)
pad_width = 1280
pad_height = 720
background_width = 1280
mainchar_width = 65
mainchar_height = 100

#적 히트박스(원본 이미지보다 작게함)
enemy_side_width = 100
enemy_side_height = 100

#하트 히트박스
hart_width = 50
hart_height = 45


def drawScore(count):
    global gamepad
    font = pygame.font.SysFont(None, 25)
    text = font.render("SCORE: " + str(count), True, WHITE)
    gamepad.blit(text, (10, 10))

def gameOver():
    global gamepad
    pygame.mixer.music.stop()
    dispMessage('GAME OVER')

def textObj(text, font):
    textSurface = font.render(text, True, RED)
    return textSurface, textSurface.get_rect() # get_rect 크기정보와 좌표정보가 들어있음

def dispMessage(text):
    global gamepad
    largeText = pygame.font.Font('freesansbold.ttf', 115)
    TextSurf, TextRect = textObj(text, largeText)
    TextRect.center = ((pad_width/2), (pad_height/2))
    gamepad.blit(TextSurf, TextRect)
    pygame.display.update()
    sleep(2)
    runGame()

def drawObject(obj, x, y): # 게임판에 그려지는 모든 객체들을 이 함수로 통일
    global gamepad
    gamepad.blit(obj, (x, y))

def gameOver():
    global gamepad
    BGM_sound.stop()
    dispMessage('GAME OVER')

def runGame():
    global gamepad, mainchar, clock, background1, hart, BGM_sound # 전역변수
    global enemy_Lside, enemy_Rside, enemy_point, enemy_point_1

    # 최초 캐릭 위치
    x = pad_width/2
    y = pad_height/2

    #적 최초 위치
    enemy_Lside_x = pad_width # 적이 나타날 x좌표 게임판 오른쪽 끝
    enemy_Lside_y = random.randrange(0, pad_height) # y좌표 랜덤
    enemy_Rside_x = 0 # 적이 나타날 x좌표 게임판 왼쪽 끝
    enemy_Rside_y = random.randrange(0, pad_height) # y좌표 랜덤

    enemy_point_x = 0
    enemy_point_y = 0
    enemy1_point_x = 0
    enemy1_point_y = 0

    #점수
    score = 0

    # 케릭터 위치 이동
    x_change = 0
    y_change = 0

    # 하트 오브젝트 이동
    hart_x = 0
    hart_y = 0

    # 하트가 생성 돼있는지 안돼있는지 확인 하기윈한 함수
    hchack = 0

    #배경음악 소리 및 플레이
    BGM_sound.set_volume(0.3)
    BGM_sound.play(-1)# -1하면 무한 반복


    crashed = False  # 게임 종료를 위한 플래그
    while not crashed:  # crashed가 False면 반복하라.(while에 not이 안붙으면 True일때 반복하라는 뜻)
        for event in pygame.event.get():  # pygame.event.get() 게임판에서 발생하는 다양한 type의 이벤트를 리턴하는 함수.
            if event.type == pygame.QUIT:  # 여러다양한 type중 pygame.QUIT(마우스로 창을 닫는 이벤트)가 발생.
                crashed = True  # 밑에 함수들을 실행 후 while문을 나가게 된다.

            if event.type == pygame.KEYDOWN:
                if event.key == pygame.K_UP:
                    y_change = -5
                elif event.key == pygame.K_DOWN:
                    y_change = 5
                elif event.key == pygame.K_LEFT:
                    x_change = -5
                elif event.key == pygame.K_RIGHT:
                    x_change = 5

            if event.type == pygame.KEYUP:
                if event.key == pygame.K_UP or event.key == pygame.K_DOWN:
                    y_change = 0
                elif event.key == pygame.K_LEFT or event.key == pygame.K_RIGHT:
                    x_change = 0


        #=================== mainchar Position
        y += y_change
        if y < 0:
            y = 0
        elif y > pad_height - mainchar_height:
            y = pad_height - mainchar_height

        x += x_change
        if x < 0:
            x = 0
        elif x > pad_width - mainchar_width:
            x = pad_width - mainchar_width

        # =================== enemy_side Position
        enemy_Lside_x -= 7
        if enemy_Lside_x <= 0:
            enemy_Lside_x = pad_width
            enemy_Lside_y = random.randrange(0, pad_height - 300) # 적 아이콘이 화면 밖으로 안넘어가게 설정
            hchack = 0

        enemy_Rside_x += 7
        if enemy_Rside_x >= pad_width:
            enemy_Rside_x = 0
            enemy_Rside_y = random.randrange(0, pad_height - 300)
            hchack = 0

        if hchack == 0: #하트를 먹었을때 자동으로 변함
            enemy_point_x = random.uniform(100, 1100)
            enemy_point_y = random.uniform(100, 650)
            enemy1_point_x = random.uniform(100, 1100)
            enemy1_point_y = random.uniform(100, 650)
            # 적의 이미자가 자리를 이동하자하마 겹쳤을 경우 다시 위치를 조정해주는 함수
            while (x < enemy_point_x + 20 < x + mainchar_width) or (x < enemy_point_x + enemy_side_width - 20 < x + mainchar_width):
                if (y < enemy_point_y + 10 < y + mainchar_height) or (y < enemy_point_y + enemy_side_height - 10 < y + mainchar_height):
                    enemy_point_x = random.uniform(100, 1100)
                    enemy_point_y = random.uniform(100, 650)
                break
            while (x < enemy1_point_x + 20 < x + mainchar_width) or (x < enemy1_point_x + enemy_side_width - 20 < x + mainchar_width):
                if (y < enemy1_point_y + 10 < y + mainchar_height) or (y < enemy1_point_y + enemy_side_height - 10 < y + mainchar_height):
                    enemy1_point_x = random.uniform(100, 1100)
                    enemy1_point_y = random.uniform(100, 650)
                break
        # =================== hart Position
        if hchack == 0:
            hart_x = random.uniform(100, 1100)
            hart_y = random.uniform(100, 650)
            hchack = 1

        # 캐릭과 적이 겹쳤을때(side)
        if (x < enemy_Lside_x + 20 < x + mainchar_width) or (x < enemy_Lside_x + enemy_side_width - 20 < x + mainchar_width):
            if (y < enemy_Lside_y + 10 < y + mainchar_height)  or (y < enemy_Lside_y + enemy_side_height - 10 < y + mainchar_height):
                gameOver()
        elif (x < enemy_Rside_x + 20 < x + mainchar_width) or (x < enemy_Rside_x + enemy_side_width - 20 < x + mainchar_width):
            if (y < enemy_Rside_y + 10 < y + mainchar_height)  or (y < enemy_Rside_y + enemy_side_height - 10 < y + mainchar_height):
                gameOver()
        # 캐릭이 적과 겹쳤을때(랜덤 위치)
        elif (x < enemy_point_x + 20 < x + mainchar_width) or (x < enemy_point_x + enemy_side_width - 20 < x + mainchar_width):
            if (y < enemy_point_y + 10 < y + mainchar_height)  or (y < enemy_point_y + enemy_side_height - 10 < y + mainchar_height):
                gameOver()
        elif (x < enemy1_point_x + 20 < x + mainchar_width) or (x < enemy1_point_x + enemy_side_width - 20 < x + mainchar_width):
            if (y < enemy1_point_y + 10 < y + mainchar_height)  or (y < enemy1_point_y + enemy_side_height - 10 < y + mainchar_height):
                gameOver()

        # 캐릭이 하트와 겹쳤을때
        if (x < hart_x < x + mainchar_width) or (x < hart_x + hart_width < x + mainchar_width):
            if (y < hart_y < y + mainchar_height)  or (y < hart_y + hart_height < y + mainchar_height):
                score += 100
                hchack = 0
        # =================== Clear gamepad
        gamepad.fill(WHITE)  # 화면 초기화 while문 반복
        # 최초 배경 위치
        drawObject(background1, 0, 0)
        # 점수
        drawScore(score)
        
        drawObject(mainchar, x, y)
        drawObject(hart, hart_x, hart_y)
        drawObject(enemy_Rside, enemy_Rside_x, enemy_Rside_y)
        drawObject(enemy_Lside, enemy_Lside_x, enemy_Lside_y)

        drawObject(enemy_point, enemy_point_x, enemy_point_y)
        drawObject(enemy_point_1, enemy1_point_x, enemy1_point_y)

        pygame.display.update()
        clock.tick(30)


    justOne = False
    pygame.quit()
    quit()



def initGame():
    global gamepad, mainchar, clock, background1, hart, BGM_sound  # 전역변수
    global enemy_Lside, enemy_Rside, enemy_point, enemy_point_1

    pygame.init()

    gamepad = pygame.display.set_mode((pad_width, pad_height))
    pygame.display.set_caption('Give love')  # 게임 타이틀을 지정해주는 함수.
    mainchar_O = pygame.image.load('img/N_CONY2.png')
    mainchar = pygame.transform.scale(mainchar_O, (65, 100))

    background1 = pygame.transform.smoothscale(pygame.image.load('img/Main_BG1.png'), (pad_width, pad_height))

    hart = pygame.image.load('img/hart.png')
    hart = pygame.transform.scale(hart, (50, 45))

    # 적
    enemy_Lside_O = pygame.image.load('img/K_JayG.png')
    enemy_Lside = pygame.transform.scale(enemy_Lside_O, (100, 100))

    enemy_Rside_O = pygame.image.load('img/K_neo1.png')
    enemy_Rside = pygame.transform.scale(enemy_Rside_O, (100, 100))

    enemy_point_0 = pygame.image.load('img/K_ryan2.png')
    enemy_point = pygame.transform.scale(enemy_point_0, (100, 100))

    enemy_point_1 = pygame.image.load('img/P.png')
    enemy_point_1 = pygame.transform.scale(enemy_point_1, (100, 100))

    # 사운드
    BGM_sound = pygame.mixer.Sound('bgm/MainBgm.mp3')


    clock = pygame.time.Clock()  # runGame()에서 프레임 설정 clock.tick(60)
    runGame()  # 초기화 끝 runGame 함수 호출

initGame()
