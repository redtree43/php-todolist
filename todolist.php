<?php

session_start();

if (!isset($_SESSION['list'])) {
	$_SESSION['list'] = array();
	}
	
if (isset($_POST['submit'])) {
	array_push($_SESSION['list'],
				$_POST['todo']);
	
}

?>

<form 	action="index.php"
		method="POST">
		
<input type="text" name="todo">
<input type="submit" name="submit">

</form>

<?php

foreach ($_SESSION['list'] as $value) {
    echo "<li>$value</li>";
}

echo "Just Do It";
?>