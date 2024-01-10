<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- videojs -->
    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <?php   
      include("../backend/bd.php");    
      $query = "SELECT * FROM imagenes";
      $result = mysqli_query($conex, $query);

      while ($fila = mysqli_fetch_array($result)) {
    ?>
    
    <video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="640"
    height="264"
    data-setup="{}"
  >

    <source src="<?php echo $fila['ruta'];?>" type="video/mp4" />
    <!-- <source src="MY_VIDEO.webm" type="video/webm" /> -->
    <?php } ?>
  </video>

  <script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
</body>
</html>