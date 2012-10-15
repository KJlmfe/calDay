<?php
	$now = date("Y-m-d H:i:s",strtotime("now"));
	$days = file_get_contents("calday.ini");
	$days = explode(";", $days);
	unset($days[count($days)-1]);
	ksort($days);
?>

<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="author" content="KJlmfe">
		<meta name="Copyright" content="Copyright www.freepanda.me All Rights Reserved.">
		<title>Cal Day</title>
		<style type="text/css">
			div{
				position: absolute;
				left: 50%;
				width: 400px;
				margin-left:-200px;
			}
			h1,h2{
				text-align: center;
			}
			table{
				margin-left: 122px;
			}
		</style>
	</head>

	<body>
		<div>
		<h1>今日艾宾浩斯复习时间表</h1>
		<h2><?php echo $now; ?></h2>

		<table border="1">
			<tr>
				<th>序号</th>
				<th>日期</th>
			</tr>	
<?php
	foreach($days as $r)
	{
		$date =	date("Y-m-d", strtotime($r." day")); 
		$str = $r < 0 ? -1*$r." 天前" : $r." 天后";
		echo " 
			<tr>
				<th>$str</th>
				<th>$date</th>
			</tr>
			";
	}
?>
		</table>
		</div>
	</body>
</html>


