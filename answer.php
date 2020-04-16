<?php $webroot = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include_once($webroot."/src/parts/head.php"); ?>
<?
$question = $_POST['question'];
$answer = $_POST['answer'];

if($question == $answer){
    $result = "素晴らしい！";
}else{
    $result = "残念！";
}
?>
    <body>
        <h2>クイズ結果</h2>
        <?php echo $result ?>
        <h2>解説</h2>
        <blockquote>
        <img src="https://lh3.googleusercontent.com/proxy/8W_mZViJZ9OIQrZMnmW_ssaN4toLdH2IafdZIxUPJARqlts65ScigKL_w3OpV_W3ExkY4plFfrubtQ">
        </blockquote>
        <p>ハリーが列車でロンの魔法を見た後に、ハーマイオニーがハリーのメガネに向けて放った呪文。
        ある程度の物が直る。</p>
        <a href="/fast.php" class="btn-square-shadow">この問題をもう一度見る</a>
        <a href="/two.php" class="btn-square-pop">次の問題へ</a>
        <br>
        <br>
        <span id="button"><a href="/index.php">TOPへ戻る</a></span>
    </body>
</html>