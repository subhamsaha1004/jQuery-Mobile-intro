<?php
	ob_start();
	include_once('libs/session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sample Demo : jQuery Mobile</title>
		<link rel="stylesheet" href="css/uncompressed/global.css" />
		<link rel="stylesheet" href="css/uncompressed/jquery.mobile-1.2.0.css" />
		<link rel="stylesheet" href="css/uncompressed/themes/custom-mobile-theme.css" />
		<link rel="stylesheet" href="css/uncompressed/themes/custom-style.css" />
		<script src="js/minified/jquery-1.8.2.min.js"></script>
		<script src="js/minified/jquery.mobile-1.2.0.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="a" id="foo2">
			<div data-role="header" id="header" data-position="inline">
				<h1>Survey List</h1>
			</div>
			<div data-role="content" id="contentPortion" data-theme="a">
				<p>This is the survey page</p>
				<?php
					//echo '<pre>';
					//print_r($_SESSION);
					//echo '</pre>';
				?>
			</div>
			<div id="footer" data-role="footer" data-position="fixed">
				<div data-role="navbar">
        	<ul>
            <li><a href="#listSurvey" class="ui-btn-active" data-icon="grid" data-theme="a">List Survey</a></li>
            <li><a href="#createSurvey" data-icon="grid" data-theme="a" data-transition="pop"  data-rel="dialog">Add Survey</a></li>
            <?php
            	if($_SESSION['survey_user_type'] == 'admin'){
            ?>
            <li><a href="#contactus" data-icon="grid" data-theme="a">List Users</a></li>
            <li><a href="#contactus" data-icon="grid" data-theme="a">Add Users</a></li>
            <?php } ?>
          </ul>
       </div>
			</div>
		</div>

		<div data-role="page" data-theme="a" id="createSurvey">
			<div data-role="header" id="header" data-position="inline">
				<h1>Create Survey</h1>
			</div>
			<div data-role="content" id="contentPortion" data-theme="a">
				
			</div>
		</div>

		<script src="js/uncompressed/global.js"></script>
		<script src="js/uncompressed/main.js"></script>

	</body>
</html>