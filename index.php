<?php
require 'php.inc/redirect.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
	
	<?php require 'templates/header.php'; ?>
	
	<body>
		
		<?php include 'templates/nav.php'; ?>
		
		<div id="big-wrapper">
			<?php
			// Includes body of page based on action, and redirects away from bad links
			include $action.'.php';
			
			include 'templates/footer.php';
			?>
		</div>
	</body>
</html>