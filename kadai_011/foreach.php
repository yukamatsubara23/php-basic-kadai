<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP</title>
 </head>


 
 <body>
     <p>
         <?php
         $variable = ['name'=>'玉ねぎ', 'price'=>200 , 'place'=>'北海道'];
 
         //  連想配列＄variableのキーと値をコロン（：）で区切り、要素ごとに改行して出力する
        
         foreach ($variable as $key => $value) {
             echo "{$key}:{$value}<br>";
            }
 ?>
     </p>

     <p>
        
 </body>
 
 </html>
 