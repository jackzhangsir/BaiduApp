<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>
十二生肖计算器
</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
}
.container{
	margin:0 auto;
	padding:0;
	width:540px;
	height:250px;
	border:1px solid #AAA;
}
.tit{
	text-align:center;
	font-size:35px;
	font-family: sans-serif;
	font-weight:bold;
	color:#AAA;
}

.leftBar{
	float:left;
	height:130px;
}
.inp{
	float:left;
	width:270px;
	margin-left:50px;
	margin-top:40px;
}
.but{
	clear:both;
	margin-top:30px;
	margin-left:20px;
}
.res{
	float:left;
	/*border:1px solid #ddd;*/
}
</style>
</head>




<body>
<div class="container">
	<div class="tit">
	十二生肖计算器
	</div>
	
	<div class="leftBar">
	<form action="" method="post">
	<div class="inp">	
	<input type="text" name="year" value="请输入你的出生年月" onfocus="this.value='';this.style.border='1px solid #AAA'" style="height:25px;border:1px solid #ddd"  />	
	</div>
	
	<div class="but">
	<input type="image" src="./images/query.jpg" width="100"/>
	<input type="image" src="./images/clear.jpg" width="100"/>	
	</div>
	</form>
	</div>
	
	
	
	<div class="res">
	<fieldset style="height:140px;">
    <legend align="center" >你的属相</legend>
	
	<?php 
		$in_year = $_POST['year'];
		if(isset($in_year) && ($in_year >1914 && $in_year <2114) ){
			$sx = $in_year%12;
			//echo $sx;
			
	?>
	<img src="./images/<?php echo $sx ?>.jpg" >
	<?php
		}else{
			echo "请输入正确的出生年";
		}
		//echo $in_year
		
	?>
	
	
	<?php
	
	?>
    
  </fieldset>
	</div>
</div>
</body>


<script src="http://app.baidu.com/static/appstore/monitor.st"></script>
<script>
baidu.app.autoHeight();
baidu.app.setHeight(150);
</script>

</html>