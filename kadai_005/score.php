<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
<p>
  <?php
  // 数値を変数に代入する//
  $score1 = 80;
  $score2 = 50;
  $score3 = 55;
  $score4 = 40;
  $score5 = 100;
  $score6 = 25;
  $score7 = 80;
  $score8 = 95;
  $score9 = 30;
  $score10 = 60;

  // 合計点
  $total_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
  // 平均点
  $score_average = $total_score / 10;
  echo $score_average;
  ?>
</p>
</body>

</html>
