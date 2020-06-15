<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  
  <body>

    <h1 id=midasi>まもののむれを　やっつけろ!</h1>
    <p><img src="img/kadai1.jpg" alt="" class="gazou1" id="zonbi"></p>
    <h1 id="comand">このなかから　ぶきをえらべ!</h1>

    <div class="buki" id="buki">
      <p><img src="img/kugibaltuto.PNG" alt="" class="kugibaltuto"></p>
      <p><img src="img/waradoll.PNG" alt="" class="waradoll"></p>
      <p><img src="img/keitora.PNG" alt="" class="keitora"></p>
    </div>

    <form method="post" form action="index2.php" class="input" id="input">
      
      <label ><input type="radio" name="playerHand" value="釘バット">釘バット</label>
      <label ><input type="radio" name="playerHand" value="わら人形">わら人形</label>
      <label ><input type="radio" name="playerHand" value="軽トラック">軽トラック</label>
    
      <button type="submit" class="battle-button">この武器を使う</button>
    </form>


    <?php
      
    ?>
    
    
      <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <script>

       var comand=document.getElementById("comand"); //  ぶきをえらべの欄を変数化
       comand.style.display="none"; //  非表示にする

      　

      $("#zonbi").on("click", function(){
      var elem= document.getElementById("midasi");　// まもののむれのところを変数化
      elem.style.display="none";　// 非表示にする

      var zonbi=document.getElementById("zonbi"); // ゾンビの画像を変数化
      zonbi.style.display="none";　// 非表示にする

      var comand=document.getElementById("comand"); //  ぶきをえらべの欄を変数化
       comand.style.display="block"; //  表示にする

       var buki=document.getElementById("buki");// 武器エリアを変数化
       buki.style.display="flex";　// 表示にする

       var input=document.getElementById("input");　//  武器を選ぶボタンを変数化
       input.style.display="flex";　//  表示にする
      });
  </script>
   
  <script src="js/app.js"></script>
  

  </body>
</html>
