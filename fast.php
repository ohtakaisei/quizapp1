
<?php $webroot = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include_once($webroot."/src/parts/head.php"); ?>


<?php


$title = "ハリーポッターの映画で一番最初にハーマイオニーが唱えた呪文は？（３文字）";

$question = array();
$question = array('ウィンガーディアムレビオーサ','レパロ','エクスペリアームス','アバタケタブラ');

$answer = $question[1];

shuffle($question);
?>
    <body>
        <div class="wrapper">
       <h2>第１問：<?php echo $title ?></h2>
        <img src="https://cdn.pixabay.com/photo/2019/07/18/12/24/hermione-granger-4346324_1280.jpg">
<form method="POST" action="answer.php">
   <?php foreach($question as $value){ ?>
   <input type="radio" name="question" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer" value="<?php echo $answer ?>">
   <input type="submit" value="回答する">
</form>
    </body>
    </div>
    <?php $webroot = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include_once($webroot."/src/parts/foot.php"); ?>
</html>