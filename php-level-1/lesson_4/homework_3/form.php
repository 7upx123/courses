<form action="index.php" method="post">
	<input type="text" name="a" value="<?=$_POST['a']?>">
	<select name="oper">
		<option value="+" <?php if ($_POST['oper'] == "+") echo "selected"; ?>>+</option>
		<option value="-" <?php if ($_POST['oper'] == "-") echo "selected"; ?>>-</option>
		<option value="*" <?php if ($_POST['oper'] == "*") echo "selected"; ?>>*</option>
		<option value="/" <?php if ($_POST['oper'] == "/") echo "selected"; ?>>/</option>
	</select>
	<input type="text" name="b" value="<?=$_POST['b']?>">
	<input type="submit" value="=">
</form>
