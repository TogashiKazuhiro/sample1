<html>
  <head>
  </head>
  <body>
    <?php
      //色を指定
      $colors = array("red","blue","yellow","black");
      //16x16のタイルを描写
      if(isset($_POST['add'])){
      for($i = 0;$i < 256;$i++){
        $r = rand(0,count($colors)-1);
        $c = $colors[$r];
        echo "<span style= 'color:$c'>■</span>";
        if($i%16 == 15) echo "<br>" ;
      }
    }
    ?>
    <form action = "sample2.php" method = "post">
      <input type = "submit" name = "add" value = "クリック">
    </form>
  </body>
</html>
