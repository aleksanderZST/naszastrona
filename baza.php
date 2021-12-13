<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasza strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php
  $base=mysqli_connect('localhost','root','','pizzeria');
  $request="select id, nazwa_pizzy, cena_32, cena_42, skladniki from menu"; 
  $result=mysqli_query($base, $request);
  while($wiersz=mysqli_fetch_array($result)){
      echo"<li>". 
      $wiersz['id']. 
      "</li>";
      echo"<li>". 
      $wiersz['nazwa_pizzy']. 
      "</li>";
      echo"<li>". 
      $wiersz['cena_32']. 
      "</li>";
      echo"<li>". 
      $wiersz['cena_42']. 
      "</li>";
      echo"<li>". 
      $wiersz['skladniki']. 
      "</li>";
  }
  echo"</ol>";
  mysqli_close($base);
  ?>
    
<script src="script.js"></script>
</body>
</html>