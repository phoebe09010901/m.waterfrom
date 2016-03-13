<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>


<script language="JavaScript">
function preloader(){
　　// counter
　　var i = 0;
　　// create object
　　imageObj = new Image();
　　// set image list
　　images = new Array();
　　images[0]="images/banner_01.png"
　　images[1]="images/banner_01.png"
　　images[2]="images/banner_01.png"
　　images[3]="images/banner_01.png"
　　// start preloading
　　for(i=0; i<=3; i++){
　　		imageObj.src=images[i];
　　}
	
	document.location.href='index2.php';
}
</script>
</head>

<body onLoad="javascript:preloader()">
</body>
</html>