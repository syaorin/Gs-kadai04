
<?php
// 敵の攻撃
$hands=["こうげきした","じゅもんを つかった","うごかない!"];

// 武器を選んだ時の処理
if(isset($_POST["playerHand"])){
//  プレイヤーの手
$playerHand=$_POST["playerHand"];

// パソコンの手(ランダムで選択される)
$attack=array_rand($hands);
$pcHand=$hands[$attack];

// 勝敗の判定(釘バットを選んだ場合）
if($playerHand=="釘バット"&& $pcHand=="うごかない!"){
    $result="まもののむれをやっつけた";
}else if($playerHand=="釘バット" && $pcHand=="じゅもんを つかった"){
    $result="まもののむれは　にげだした!";
}else if($playerHand=="釘バット" && $pcHand=="こうげきした"){
    $result="あなたは しにました";
}
// 勝敗の判定（わら人形をえらんだ場合）
if($playerHand=="わら人形" && $pcHand=="じゅもんを つかった"){
    $result="まもののむれは　にげだした!";
}else if($playerHand=="わら人形" && $pcHand=="うごかない!"){
    $result="まもののむれをやっつけた";
}else if($playerHand=="わら人形" && $pcHand=="こうげきした"){
    $result="あなたは しにました";
}
// 勝敗の判定(軽トラックを使った場合）
if($playerHand=="軽トラック"&& $pcHand=="うごかない!"){
    $result="まもののむれをやっつけた";
}else if($playerHand=="軽トラック" && $pcHand=="じゅもんを つかった"){
    $result="あなたは しにました";
}else if ($playerHand=="軽トラック" && $pcHand=="こうげきした"){
    $result="まもののむれは　にげだした!"; 
}
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    
</head>
<body>
<main>
    <div class="haikeigazou">
        <img src="img/monser.png" alt="背景画像" class="haikei">
        <div class="result-box">
            <p class="result-word">あなた</p>
            <p class="result-word">レベル 10</p>
            <p class="result-word">HP　44</p>
            <p class="result-word">MP　249</p>
            <p class="result-word">G　27549</p>
            <p class="result-word">E  2165</p>
        </div>

        <div class="result-box2">
            <p class="result-word2">あなたは <?= $playerHand ?> をつかった</p>　<!-- 使った武器を表示 -->
            <p class="result-word2">まもののむれは <?= $pcHand ?></p>　
            <p class="result-word2"><?=$result?></p>　<!-- 勝敗のメッセージ -->
        </div>
    </div>  

    <button><a class="revenge" href="index.php">←もう1回戦う</a></button>

</main>
        
</body>
</html>
