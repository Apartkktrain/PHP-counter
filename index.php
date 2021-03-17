<!DOCTYPE html>
<?php
	define("PATH","./Count.txt");
	session_start();
	if(empty($_SESSION['access'])){
		$Messages[]="複数回のアクセスありがとうございます!!";
	}else{
		$count = file_get_contents(PATH);
		$file = fopen(PATH,"w");
		$count = $count + 1;
		fwrite($file,$count);
		fclose($file);
		$Messages[] = "アクセスしていただきありがとうございます。";
	}
	?>
<html>
  <header>
    <title>テストホームページ</title>
    <h1>アクセスカウンター</h1>
    <p>あなたは<?=$count?>人目の訪問者です。<p>
    <?php foreach($Messages as $Message){
    	print $Message;
    }?>
  </header>
  