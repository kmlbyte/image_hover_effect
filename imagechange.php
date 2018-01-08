<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>imagechange</title>
<style>
#div1{
	width:100px;
	height:100px;
	background-image:url(car3.png);
	transition-property:all;
	transition-duaration:2s;
	transition-timing-function:ease-in-out;
	margin-left:600px;
}
#div1:hover{
	background-image:url(car2.png);
		width:100px;
	height:100px;
}
</style>
</head>
<body>
<div id="div1">
</div>
</body>
</html>