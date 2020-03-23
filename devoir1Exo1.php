<html >
  <head>
    <meta charset="utf-8">
    <title>fruits et legumes</title>
    <style> div.container { display:inline-block; }</style>
  </head>
  <body>
    <h1><center>delice des fruits et legumes</center></h1>
    <br><br><br><br>
    <center>
    <?php
    $images = array ( 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 'img7.jpg', 'img8.jpg', 'img9.jpg');
    shuffle($images);
    for($i=0;$i<3;$i++){
      echo '<div class="container">';
     echo '<img src="' . $images[$i] . '"   height="200" width="200" hspace="20"/>';
      
      }
    ?>
    </center>
  </body>
</html>