<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="body" class="white">
  <header>
    <h1><a href="http://localhost/php/index.php">JavaScript</a> </h1>
  </header>
  <nav>
    <ol>
<?php
$list = scandir('data');
$i=0;
while($i < count($list)){
  echo "<li><a href=\"index.php?name=".$list[$i]."\">".$list[$i]."</a></li>";
  $i = $i + 1;
}
?>
    </ol>
  </nav>
  <article>
    <div id="control">
      <input type="button" value="white" onClick="document.getElementById('body').className='white'"/>
      <input type="button" value="black" onClick="document.getElementById('body').className='black'"/>
    </div>
<?php
if(!empty($_GET['id'])){
  echo file_get_contents($_GET['id'].".txt");
}
?>
  </article>
</body>
</html>
