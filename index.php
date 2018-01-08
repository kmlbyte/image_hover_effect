<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>imagehovereffect</title>
<style>

#box
{
	width:600px;
	height:600px;
	background-image: url(car.png);
	color:#FFF;
    transition-property: all;
	transition-duration:1s;
	transition-timing-function:ease-in-out;
	float:left;
}
#box:hover{
    width:600px;
	height:600px;
	background-image: url(car1.png);
	float:left;
}
#box1
{
	width:600px;
	height:600px;
	background-image: url(phone.png);
	color:#FFF;
    transition-property: all;
	transition-duration:1s;
	transition-timing-function:ease-in-out;
	float:left;
}
#box1:hover{
    width:600px;
	height:600px;
	background-image: url(phone1.png);
	float:left;
}
</style>
</head>

<body>
<div id="box">
<br /><br />
</div>
<div id="box1">
<br /><br />
</div>
<br />
<br />
<a href="imagechange.php">image change</a>
</body>
</html>