<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello World</h1>
</body>
</html>

<?php
$date = date("l") . "<br>";
print "YO MAN HET IS ".$date;
if ($_POST['user']) {
  print "Hallo, ";
  print $_POST['user'];
  print "!";
}
else {
  print <<<_HTML_
  <form method="post" action="$_SERVER[PHP_SELF]">
  Naam: <input type="text" name="user" />
  <br />
  <input type="submit" value="enter" />
  </form>
  _HTML_;
}
?>