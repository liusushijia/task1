<html>
<meta http-equiv="Content Type" content="text/html" charset="utf-8" />
	<head>
		<title>蜗牛</title>
	</head>
	<body>
		<center>小组成员</center>
		<ul>
		<?php foreach ($members as $data){
			echo '<li>';
			echo $data->name;echo('&nbsp');
			echo $data->sex;echo('&nbsp');
			echo $data->age;echo('&nbsp');
			echo $data->hobby;echo('&nbsp');
			echo $data->school;echo('&nbsp');
			echo '<li>';
			echo '<hr />';
		}
		?></ul>
	</body>
</html>
