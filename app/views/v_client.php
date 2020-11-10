<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php 
            foreach($clients as $unq){
                  echo "<h1>Nome: ". $unq["name"]. "</h1>\n";
                  echo "<h1>Email: " . $unq["email"] . "</h1><br/><br/>";
            }
?>
</body>
</html>