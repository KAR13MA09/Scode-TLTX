<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tài Xỉu Suvip789</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      max-width: 400px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    h1 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .player-info {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .player-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 10px;
    }

    .player-name {
      font-size: 18px;
      color: #555;
      margin-bottom: 5px;
    }

    .balance {
      font-size: 16px;
      color: #777;
    }

    .bet-input {
      margin-bottom: 20px;
    }

    .bet-label {
      font-size: 16px;
      color: #333;
    }

    #bet-amount {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .choices {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .choice {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .choice.even {
      background-color: #8be6a5;
      color: #333;
    }

    .choice.odd {
      background-color: #f18d9e;
      color: #fff;
    }

    .choice.selected {
      background-color: #ccc;
    }

    #place-bet-button {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #place-bet-button:hover {
      background-color: #0056b3;
    }

    .result {
      margin-top: 20px;
    }

    .transaction-id {
      font-size: 16px;
      color: #777;
      margin-bottom: 10px;
    }

    .win {
      font-size: 18px;
      color: green;
      margin-bottom: 5px;
    }

    .loss {
      font-size: 18px;
      color: red;


      margin-bottom: 5px;
    }

    .random-number {
      font-size: 16px;
      color: #777;
    }

    .loading-message {
      font-size: 16px;
      color: #777;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Mini Game Tài Xỉu Online</h1>
    <div class="player-info">
      <img class="player-icon" src="../img/avt.png" alt="Player Icon">
      <div>
        <div class="player-name"> Tựa Game : <span id="player-name">Tài Xỉu</span></div>
        <div class="balance">Số dư: <span id="balance">$100000</span></div>
      </div>
    </div>

    <div class="bet-input">
      <label class="bet-label" for="bet-amount">Số tiền cược:</label>
      <input type="number" id="bet-amount" min="1" max="100" step="1" required>
    </div>

    <div class="choices">
      <button class="choice even"><img height="30" src="../img/tai.png" alt="Tài"></button>
      <button class="choice odd"><img height= "30" src="../img/xiu.png" alt="Xỉu"></button>
    </div>

    <button id="place-bet-button">Đặt cược</button>

    <div class="result">
      <div class="transaction-id"></div>
      <div class="win"></div>
      <div class="loss"></div>
      <div class="random-number"></div>
    </div>
  </div>
<script type="text/javascript">
    // <![CDATA[
var bits=80; // how many bits
var speed=33; // how fast - smaller is faster
var bangs=5; // how many can be launched simultaneously (note that using too many can slow the script down)
var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c"); 
// blue red green purple cyan orange pink
/****************************
* Fireworks Effect *
*(c)2004-11 mf2fm web-design*
* http://www.mf2fm.com/rv *
* DON'T EDIT BELOW THIS BOX *
****************************/
var bangheight=new Array();
var intensity=new Array();
var colour=new Array();
var Xpos=new Array();
var Ypos=new Array();
var dX=new Array();
var dY=new Array();
var stars=new Array();
var decay=new Array();
var swide=800;
var shigh=600;
var boddie;
window.onload=function() { if (document.getElementById) {
  var i;
  boddie=document.createElement("div");
  boddie.style.position="fixed";
  boddie.style.top="0px";
  boddie.style.left="0px";
  boddie.style.overflow="visible";
  boddie.style.width="1px";
  boddie.style.height="1px";
  boddie.style.backgroundColor="transparent";
  document.body.appendChild(boddie);
  set_width();
  for (i=0; i<bangs; i++) {
    write_fire(i);
    launch(i);
    setInterval('stepthrough('+i+')', speed);
  }
}}
function write_fire(N) {
  var i, rlef, rdow;
  stars[N+'r']=createDiv('|', 12);
  boddie.appendChild(stars[N+'r']);
  for (i=bits*N; i<bits+bits*N; i++) {
    stars[i]=createDiv('*', 13);
    boddie.appendChild(stars[i]);
  }
}
function createDiv(char, size) {
  var div=document.createElement("div");
  div.style.font=size+"px monospace";
  div.style.position="absolute";
  div.style.backgroundColor="transparent";
  div.appendChild(document.createTextNode(char));
  return (div);
}
function launch(N) {
  colour[N]=Math.floor(Math.random()*colours.length);
  Xpos[N+"r"]=swide*0.5;
  Ypos[N+"r"]=shigh-5;
  bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4);
  dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N];
  if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/";
  else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\";
  else stars[N+"r"].firstChild.nodeValue="|";
  stars[N+"r"].style.color=colours[colour[N]];
}
function bang(N) {
  var i, Z, A=0;
  for (i=bits*N; i<bits+bits*N; i++) { 
    Z=stars[i].style;
    Z.left=Xpos[i]+"px";
    Z.top=Ypos[i]+"px";
    if (decay[i]) decay[i]--;
    else A++;
    if (decay[i]==15) Z.fontSize="7px";
    else if (decay[i]==7) Z.fontSize="2px";
    else if (decay[i]==1) Z.visibility="hidden";
    Xpos[i]+=dX[i];
    Ypos[i]+=(dY[i]+=1.25/intensity[N]);
  }
  if (A!=bits) setTimeout("bang("+N+")", speed);
}
function stepthrough(N) { 
  var i, M, Z;
  var oldx=Xpos[N+"r"];
  var oldy=Ypos[N+"r"];
  Xpos[N+"r"]+=dX[N+"r"];
  Ypos[N+"r"]-=4;
  if (Ypos[N+"r"]<bangheight[N]) {
    M=Math.floor(Math.random()*3*colours.length);
    intensity[N]=5+Math.random()*4;
    for (i=N*bits; i<bits+bits*N; i++) {
      Xpos[i]=Xpos[N+"r"];
      Ypos[i]=Ypos[N+"r"];
      dY[i]=(Math.random()-0.5)*intensity[N];
      dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25;
      decay[i]=16+Math.floor(Math.random()*16);
      Z=stars[i];
      if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M];
      else if (M<2*colours.length) Z.style.color=colours[colour[N]];
      else Z.style.color=colours[i%colours.length];
      Z.style.fontSize="13px";
      Z.style.visibility="visible";
    }
    bang(N);
    launch(N);
  }
  stars[N+"r"].style.left=oldx+"px";
  stars[N+"r"].style.top=oldy+"px";
} 
window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}
// ]]>
</script>
  <script>
    const betAmountInput = document.getElementById('bet-amount');
    const evenChoiceButton = document.querySelector('.choice.even');
    const oddChoiceButton = document.querySelector('.choice.odd');
    const placeBetButton = document.getElementById('place-bet-button');
    const playerNameElement = document.getElementById('player-name');
    const balanceElement = document.getElementById('balance');
    const transactionIdElement = document.querySelector('.transaction-id');
    const winElement = document.querySelector('.win');
    const lossElement = document.querySelector('.loss');
    const randomNumberElement = document.querySelector('.random-number');

    let betAmount = 0;
    let selectedChoice = '';
    let playerInfo = {};

    // Load thông tin người chơi từ local storage hoặc mặc định
    function loadPlayerInfo() {
      playerInfo = JSON.parse(localStorage.getItem('playerInfo')) || {
        name: 'Tài Xỉu',
        balance: 100,
        icon: '../img/avt.png'
      };

      playerNameElement.textContent = playerInfo.name;
      balanceElement.textContent = `$${playerInfo.balance}`;
      document.querySelector('.player-icon').src = playerInfo.icon;
    }

    // Lưu thông tin người chơi vào local storage
    function savePlayerInfo() {
      localStorage.setItem('playerInfo', JSON.stringify(playerInfo));
    }

    evenChoiceButton.addEventListener('click', function () {
      evenChoiceButton.classList.add('selected');
      oddChoiceButton.classList.remove('selected');
      selectedChoice = 'even';
    });

    oddChoiceButton.addEventListener('click', function () {
      oddChoiceButton.classList.add('selected');
      evenChoiceButton.classList.remove('selected');
      selectedChoice = 'odd';
    });

    placeBetButton.addEventListener('click', function () {
      betAmount = parseInt(betAmountInput.value);
      if (betAmount > 0 && selectedChoice !== '') {
        placeBetButton.disabled = true;
        setTimeout(function () {
          const

 randomNumber = Math.floor(Math.random() * 10) + 1;
          const isEven = randomNumber % 2 === 0;
          const isWin = (selectedChoice === 'even' && isEven) || (selectedChoice === 'odd' && !isEven);

          const transactionId = generateTransactionId();
          transactionIdElement.textContent = `Mã giao dịch: ${transactionId}`;

          if (isWin) {
            winElement.textContent = `Bạn đã thắng! Số tiền nhận được: $${betAmount}`;
            lossElement.textContent = '';
            playerInfo.balance += betAmount;
          } else {
            winElement.textContent = '';
            lossElement.textContent = `Bạn đã thua! Số tiền mất đi: $${betAmount}`;
            playerInfo.balance -= betAmount;
          }

          randomNumberElement.textContent = `Số ngẫu nhiên: ${randomNumber}`;

          balanceElement.textContent = `$${playerInfo.balance}`;

          savePlayerInfo();

          placeBetButton.disabled = false;
        }, 2000);
      }
    });

    // Sinh mã giao dịch ngẫu nhiên
    function generateTransactionId() {
      return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    }

    // Tải thông tin người chơi khi trang web được tải
    window.addEventListener('load', function () {
      loadPlayerInfo();
    });
  </script>
</body>
 </script>
<script type="text/javascript">



	Swal.fire(
  'Thông Báo',
  'Hệ Thống Dự Đoán Cổng Game Tài Xỉu ',
  'success'
)

</script>
<audio autoplay='true' src='//cpanelvn.eu.org/files/1.mp3'/>
</div>
</html>
