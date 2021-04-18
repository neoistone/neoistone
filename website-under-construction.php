<?php 
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? $url = "https://".$_SERVER['HTTP_HOST'] : $url = "http://".$_SERVER['HTTP_HOST'];
$app = "APP_NAME HERE";
?>
<!DOCTYPE html>
<html>
<head>
<title>Under Construction -- Neoistone</title>
<link rel="icon" href="https://raw.githubusercontent.com/neoistone/neoistone/master/logo150.png" sizes="192x192" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.ns-devlopment {
   display: flex; 
   justify-content: center; 
   align-items: center; 
   height: 100vh;
   margin-top: -60px;
}
.ns-footer {
  background: #000;
  padding: 20px; 
  color: #ffff;
}
.ns-footer a {
   text-decoration: none;
   color: #fff;
}
.ns-footer p {
	display: flex;
	justify-content: center;
}
</style>
</head>
<body>
<div class="container ns-devlopment">
     <h2> This Website Under Construction </h2>
     <a href="https://www.neoistone.com" >
    <img src="https://raw.githubusercontent.com/neoistone/neoistone/master/logo.png" > </a>
</div>
<footer class="ns-footer">
	<p> Copyright © 2019 - <?php echo date("Y"); ?>. All rights reserved <a href="https://www.neoistone.com" >&nbsp;Neoistone&nbsp;</a> website by <a href="<?php echo $url;?>">&nbsp;<?php echo $app;?></a></p>
</footer>
</body>
</html>
