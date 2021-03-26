<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="buyagrade.css">
    <title>Sucker</title>
</head>
<body>

<?php
  $name = $_REQUEST['name'];
  $section = $_REQUEST['section'];
  $credit_num = $_REQUEST['credit_card'];
  $card = $_REQUEST['card'];

   $file = fopen('sucker.txt', 'a');
   $text = $name.';'.$section.';'.$credit_num.';'.$card."\n";
   fwrite($file, $text);
   fclose($file);

    $filecontents = file_get_contents('sucker.txt');
?>
<h1>Thanks, sucker!</h1>
<p>Your information has been recorded</p>
<dl>
    <dt>Name</dt>
    <dd><?=$name?></dd>

    <dt>Section</dt>
    <dd><?=$section?></dd>

    <dt>Credit Card</dt>
    <dd><?=$credit_num?> (<?=$card?>)</dd>
</dl>
<p>Here are all the suckers who have submitted here:</p>

                <pre>
					<?=$filecontents?>
				</pre>


</body>
</html>