
<?php
$conn=mysqli_connect("localhost","root","","login insert");
if($conn){
	echo"<div class='logbx2' id='logbx2'>
<h2 id='h2'>CONNECTED SUCCESSFULLY</h2>
</div>";
echo"<script>var x=document.getElementById('logbx2').style.animation='animate 1.9s';var y=document.getElementById('h2').style.animation='animate 1.5s';</script>";
}
else{
	echo"<div class='logbx2' id='logbx2'>
<h2 id='h2'>FAILED TO CONNECT</h2>
</div>";
echo"<script>var x=document.getElementById('logbx2').style.animation='animate 1.9s';x.style.background=red;var y=document.getElementById('h2').style.animation='animate 1.5s';</script>";
}
if(isset($_POST["btn"])){
	
	
	
};?>
<html>
<head>
<title>
Nano login
</title>
</head>
<link rel="stylesheet" href="Nanolog.css">
<body>
<div class="logbx" >
<h2>LOGIN</h2>
<input type="name" name="name" placeholder="Username"/>
<input type="password" name="pass" placeholder="Password"/>
<button type="submit" name="btn">LOGIN</button>


</div>


</body>
</html>
