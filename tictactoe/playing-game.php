<section class="container-game">

<?php
require_once 'header-sidebar.php';
$win = 'n';
$box = ['','','','','','','','',''];
if(isset($_POST['box0'])){
    $box[0] = 'o';
}
if(isset($_POST['box1'])){
    $box[1] = 'o';
}
if(isset($_POST['box2'])){
    $box[2] = 'o';
}
if(isset($_POST['box3'])){
    $box[3] = 'o';
}
if(isset($_POST['box4'])){
    $box[4] = 'o';
}
if(isset($_POST['box5'])){
    $box[5] = 'o';
}
if(isset($_POST['box6'])){
    $box[6] = 'o';
}
if(isset($_POST['box7'])){
    $box[7] = 'o';
}
if(isset($_POST['box8'])){
    $box[8] = 'o';
}
if(($box[0]=='o' && $box[1]=='o' && $box[2]=='o') ||
($box[3]=='o' && $box[4]=='o' && $box[5]=='o') ||
($box[6]=='o' && $box[7]=='o' && $box[8]=='o') ||
($box[0]=='o' && $box[3]=='o' && $box[6]=='o') ||
($box[2]=='o' && $box[6]=='o' && $box[8]=='o') ||
($box[2]=='o' && $box[4]=='o' && $box[6]=='o') ||
($box[1]=='o' && $box[4]=='o' && $box[7]=='o') ||
($box[2]=='o' && $box[5]=='o' && $box[8]=='o') ||
($box[0]=='o' && $box[9]=='o' && $box[8]=='o')){
    $winner = 'o';
} 
$blank = 0;
for($i=0; $i<=8; $i++){
    if($box[$i] == ''){
        $blank = 1;
    }
}
if($blank == 1 && $winner =='n'){
    $i = rand() % 8;
    while($box[$i] != ''){
        $i = rand() %8;
    }
    $box[$i] = 'x';
    if(($box[0]=='x' && $box[1]=='x' && $box[2]=='x') ||
($box[3]=='x' && $box[4]=='x' && $box[5]=='x') ||
($box[6]=='x' && $box[7]=='x' && $box[8]=='x') ||
($box[0]=='x' && $box[3]=='x' && $box[6]=='x') ||
($box[2]=='x' && $box[6]=='x' && $box[8]=='x') ||
($box[2]=='x' && $box[4]=='x' && $box[6]=='x') ||
($box[1]=='x' && $box[4]=='x' && $box[7]=='x') ||
($box[2]=='x' && $box[5]=='x' && $box[8]=='x') ||
($box[0]=='x' && $box[9]=='x' && $box[8]=='x')){
    $winner = 'x';
} 
}


?>
<article class="col col-game-spacing">
    <article class="subtitle-row">
        <h2>Playing game...</h2>
        <article class="alert-spacing">
            <!--<article class="alert">You Win!!</article>-->
        </article>
        <figure class="container-photo circle img_tic o"></figure>
        <figure class="container-photo circle img_tic x"></figure>
        <p class="dates">Time: <span class="time">12 sec</span></p>
        <h3 class="relative-pos-game">
            <span class="points"><span class="nameuser">Player: <span class="usermoves moves">2</span></span></span><span class="points"><span class="computer">Computer: <span class="computermoves moves">2</span></span></span>
        </h3>
    </article>
    <article class="container-row relative-pos-game">
        <article class="game">
            <form action="playing-game.php" method="post">
                <article class="field"><button id="b1" name='box0' class="btn img_tic"></button></article>
                <article class="field"><button id="b2" name='box1' class="btn img_tic"></button></article>
                <article class="field"><button id="b3" name='box2' class="btn img_tic"></button></article>
                <article class="field"><button id="b4" name='box3' class="btn img_tic"></button></article>
                <article class="field"><button id="b5" name='box4' class="btn img_tic"></button></article>
                <article class="field"><button id="b6" name='box5' class="btn img_tic"></button></article>
                <article class="field"><button id="b7" name='box6' class="btn img_tic"></button></article>
                <article class="field"><button id="b8" name='box7' class="btn img_tic"></button></article>
                <article class="field"><button id="b9" name='box8' class="btn img_tic"></button></article>
            </form>
        </article>
    </article>
    <article class="container-row center form">
        <br>				
    </article>
    <div class="button-start">
        <a href="index.php?template=1"><button>START NEW GAME</button></a>
    </div>
</article>
</section>
<script>
    let btn1 = document.querySelector('#b1')
    let btn2 = document.querySelector('#b2')
    let btn3 = document.querySelector('#b3')
    let btn4 = document.querySelector('#b4')
    let btn5 = document.querySelector('#b5')
    let btn6 = document.querySelector('#b6')
    let btn7 = document.querySelector('#b7')
    let btn8 = document.querySelector('#b8')
    let btn9 = document.querySelector('#b9')

    btn1.addEventListener('click', ()=>{
        btn1.classList.add('o')
        btn1.disabled = 'true'
        game[0] = 'o'
    })
    btn2.addEventListener('click', ()=>{
        btn2.classList.add('o')
        btn2.disabled = 'true'
        game[1] = 'o'
    })
    btn3.addEventListener('click', ()=>{
        btn3.classList.add('o')
        btn3.disabled = 'true'
        game[2] = 'o'
    })
    btn4.addEventListener('click', ()=>{
        btn4.classList.add('o')
        btn4.disabled = 'true'
        game[3] = 'o'
    })
    btn5.addEventListener('click', ()=>{
        btn5.classList.add('o')
        btn5.disabled = 'true'
        game[4] = 'o'
    })
    btn6.addEventListener('click', ()=>{
        btn6.classList.add('o')
        btn6.disabled = 'true'
        game[5] = 'o'
    })
    btn7.addEventListener('click', ()=>{
        btn7.classList.add('o')
        btn7.disabled = 'true'
        game[6] = 'o'
    })
    btn8.addEventListener('click', ()=>{
        btn8.classList.add('o')
        btn8.disabled = 'true'
        game[7] = 'o'
    })
    btn9.addEventListener('click', ()=>{
        btn9.classList.add('o')
        btn9.disabled = 'true'
        game[8] = 'o'
    })
    
</script>