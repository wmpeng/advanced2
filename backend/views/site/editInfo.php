<?php

/* @var $this yii\web\View */

$this->title = 'Edite Infomation';
?>
<div class="editInfo">
	<div class="row">
		<div class="col-lg-12">
			<h2>信息修改</h2>   
		</div>
	</div>              
	<!-- /. ROW  -->
	<div class="main">
		<div class="main-content">
			<form action="change.php" method="POST">
				姓名：
				<input type="text" name="name" value="顾飞2"><br><br>
				学号：
				<input type="text" name="number" size="20" value="1511172"><br><br>
				学校：
				<input type="text" name="school" size="30" value="南开大学"><br><br>
				专业：
				<input type="text" name="major" size="30" value="计算机科学与技术"><br><br>
				个性签名：
				<textarea name="sign" rows="8" cols="60">
				</textarea><br><br>
				&nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="submit" value="提交">
			</form>
		</div>
	</div>
</div>