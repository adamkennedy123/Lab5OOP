<?php
require_once 'database.php';
require_once 'form.php';

$db = new Database();
$conn = $db->getConnection();
$form = new Form($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab5OOP</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$form->processForm($_POST);
	}
	$form->displayForm();
	?>
</body>
</html>