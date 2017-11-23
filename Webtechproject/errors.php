<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<div><?php echo $error ?></div>
		<?php endforeach ?>
	</div>
<?php  endif ?>
<html>
<head>
	<style>
		div
		{
			font-size:25px;
			color:rgb(220,100,40);
			
		}
	</style>
</head>

</html>