# 디스코드 서버 유틸리티 봇

## 프로젝트 참여자(팀 꿀벌)

| 학과         | 학번     | 이름   | 역할분담 |
| ------------ | -------- | ------ | -----|
| 컴퓨터공학과 | 18101229 | 신현규 | 프로젝트 기획, 디버깅, 웹크롤링, 기능 구현 |
| 컴퓨터공학과 | 18101281 | 최해솔 | 프로젝트 기획, 환경 세팅, 디자인, 기능 구현 |

## 프로젝트 설명
게임 **"리그오브레전드(LOL, 이하 롤)"** 와 인스턴트 메신저 **"디스코드"** 는 요즘들어 뗄레야 뗄 수 없는 관계입니다.
롤에서 자체 팀 보이스를 지원하기 시작했지만 디스코드의 음성채팅 음질을 따라오지 못하고, 확장성 또한 디스코드가 훨씬 앞섭니다.
때문에 친구와 함께 플레이하는 유저들은 거의 항상 디스코드를 사용하며 게임을 즐깁니다.

저희는 여기서 프로젝트 아이디어를 떠올렸습니다.
*"롤 정보 사이트를 항상 띄워놓진 않겠지만, 디스코드는 항상 띄워져 있을텐데. 그렇다면 디스코드에서 게임 정보를 얻을 수 있다면 어떨까?"*
즉, 디스코드에서 명령어를 입력하는 것으로 저희에게 필요한 정보를 제공하는 봇을 만들기로 한 것입니다.
그렇게 제작된 롤 유저를 위한 **"꿀벌봇"** 프로그램은 다음과 같은 기능을 제공합니다.

- 꿀벌봇을 디스코드 서버에 초대하면 채팅방에 안내 메세지를 띄웁니다. 서버에 새로운 멤버가 입장하거나 퇴장 시에도 환영 문구 또는 퇴장 알림 메세지를 출력합니다.

- 꿀벌봇을 서버에 초대할 때 관리자 역할 승인을 받았다면, 채팅방 유저들의 심한 욕설을 검열하여 삭제할 수 있는 기능이 존재합니다.

- `!명령어` 를 입력하여 꿀벌봇이 수행 가능한 명령어들을 조회할 수 있습니다.

- 명령어 `!유저 닉네임` (예시: `!유저 적분한계`)을 입력하면 해당 유저의 정보를 이미지로 가공하여 디스코드 채팅방에 출력합니다.
꿀벌봇을 이용하면 챔피언 선택창에서 매우 간편하게 우리팀 유저들의 플레이 전적을 확인할 수 있습니다.
이에, 게임을 시작하기 전에 우리팀 유저들의 실력이 어떤지 쉽게 가늠할 수 있습니다. 만약 유저 이름을 잘못 입력한 경우 채팅방에 오류 알림 메세지를 출력합니다.

- `!챔피언 포지션 챔피언이름` (예시: `!챔피언 탑 가렌`)을 입력하면 해당 챔피언으로 해당 포지션을 플레이한 데이터, 추천 아이템 순서를 이미지로 가공하여 출력해줍니다.
챔피언이름에는 공백이 허용되지 않으나, 롤 유저들이 자주 쓰는 줄임말 형태로는 검색이 가능합니다. 만일 포지션 또는 챔피언명을 잘못 입력할 경우 채팅방에 오류 알림 메세지를 반환합니다.

- 그 외에도 소소한 기능으로 꿀벌봇과 간단한 인사를 나눌 수 있는 `!안녕` 명령어와 식사 메뉴를 추천받을 수 있는 `!밥`또는 `!메뉴` 명령어가 존재하며,
롤 유저들이 좋아할만한 자잘한 이스터에그 몇가지가 있습니다.


## 프로젝트 실행 방법
>꿀벌봇은 [Heroku](https://dashboard.heroku.com/) 에 의하여 배포되며 상시 작동 중입니다. 
>디스코드 계정이 있어야만 사용 가능합니다.

>아래 두 가지 방법으로 꿀벌봇을 직접 사용해 볼 수 있습니다.
>
---

- 꿀벌봇을 디스코드 서버에 초대하여 이용하는 경우

    - 봇은 서버 주인만 초대할 수 있습니다
    - 디스코드에서 서버를 신규 생성한 후, 아래 링크에 접속하여 봇을 초대해주세요.
    - 기존에 참가하고 있는 서버의 주인이라면 해당 서버에 초대하는 것도 가능합니다.
    - [초대 링크](https://discord.com/api/oauth2/authorize?client_id=921970660669005854&permissions=8&scope=bot)
    
        - 초대 링크 접속 후 화면 예시입니다.

          <img src="https://user-images.githubusercontent.com/81071456/146889985-fbc70009-f405-4845-a1ff-1171cec58194.png" width="200" height="240"/>

        - 초대할 서버를 선택한 후 관리자 권한 사용을 허용해 주셔야 모든 기능을 사용 가능합니다.
        - 관리자 권한 사용 체크 해제 시 욕설 필터링 기능 사용이 불가합니다.
         
          <img src="https://user-images.githubusercontent.com/81071456/146891035-eabc29e3-be4c-4217-b08c-62d3a14536a6.PNG" width="200" height="280"/>

---

- 소스코드를 이용하여 직접 봇을 운영하는 경우

    - 이 방법은 파이썬 개발 환경 및 문서 하단 **"[그 외 정보](#info)"** 에 명시된 패키지가 이미 준비되었다고 가정합니다.
    
    - 환경이 준비 되었다면 git clone 하여 로컬 레포지토리로 들여옵니다.
    
    - 디스코드에 웹으로 접속한 후, 푸터 내 개발자 -> Applications -> New Application 에서 원하는 이름으로 App을 생성해줍니다.
    
    - Bot 탭으로 이동하여 Add Bot 해준 후, 스크롤을 내려 Intents 관련 설정을 모두 On 해줍니다.
    
    - OAuth2 탭 -> URL Generater 에서 Scopes - bot 체크, Bot Permissions - Administrator 를 체크 해주면 URL이 생성됩니다.
    
    - 이 URL은 봇을 서버에 초대할 때 사용됩니다. URL로 접속하여 서버에 봇을 초대해 줍니다.
    
    - 다시 Bot 탭으로 돌아와 token 을 카피 해준 후, 이를 로컬 레포지토리 내에 token 파일 (확장자 없는 텍스트 파일)로 붙여넣어 줍니다.
    
    - main.py 를 실행시키면 봇이 온라인으로 전환되며 정상적으로 작동할 것입니다.
    

>위 두 방법을 사용했을 때 봇이 정상적으로 작동하지 않는 상황이 발생한다면 issue 작성 부탁드립니다.


## 프로젝트 실행 결과 예시
아래는 "꿀벌봇" 실사용 시 얻을 수 있는 결과물 예시입니다.

- 꿀벌봇이 서버에 초대되었을 때

<img src="https://user-images.githubusercontent.com/81071456/146804917-c8575b6d-7d82-4dab-874a-8eeb9d634241.PNG" width="300" height="400"/>


- 서버에 새로운 멤버가 입장한 경우 환영 메세지

<img src="https://user-images.githubusercontent.com/81071456/146806081-a5e50c6e-ffaf-4c22-addc-df1e9159006e.PNG"/>


- 멤버가 서버를 떠났을 때 퇴장 알림 메세지

<img src="https://user-images.githubusercontent.com/81071456/146805867-06568f03-8a60-4339-b520-171ecd2fe0ca.PNG"/>


- `!유저 hide on bush` 명령어 결과물

<img src="https://user-images.githubusercontent.com/81071456/146806243-ac9d6fa8-5740-47c1-a35b-1bfd16cb7412.PNG" width="300" height="300"/>


- `!챔피언 탑 가렌` 명령어 결과물

<img src="https://user-images.githubusercontent.com/81071456/146807477-7ff392cb-0167-4cc7-8dac-494417e82f52.PNG" width="300" height="250"/>


- 잘못된 명령어 입력인 경우

<img src="https://user-images.githubusercontent.com/81071456/146807732-aeb3145d-01d1-45fd-931c-9ad4820fecb7.PNG" width="300" height="200"/>


- `!안녕` 명령어 결과물

<img src="https://user-images.githubusercontent.com/81071456/146806927-9b1859e7-5ac2-456b-9885-59d63b5e2747.PNG"/>


- `!밥` 명령어 결과물

<img src="https://user-images.githubusercontent.com/81071456/146807090-526c17df-03d3-4118-abe6-d75d938ecab5.PNG"/>

## 그 외 정보 <a id = "info"><a/>

>이 프로젝트는 디스코드 봇 API discord.py 를 기반으로 개발되었습니다. 개발에 사용한 패키지 목록은 다음과 같습니다.
