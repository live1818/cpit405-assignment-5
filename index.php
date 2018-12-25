<html>
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> assignment-5 </title>
</head>

<body>
  
 <?php 
    require_once('./conn.php');
$sp = "SELECT * FROM imges;";
$rs = $GLOBALS['conn']->query($sp);
if($rs && $rs->num_rows>0){
  echo "<ul>";
while ($row = $response->fetch_array()){
echo '<li><img src="data:image/jpeg;
}

echo "</ul>";

}
?>

  </body>
</html>
        
