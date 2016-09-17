
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en-US">
<head>

    <title>Routines</title>

	<link rel="stylesheet" type="text/css" href="css/general/index.css" />
	<link rel="stylesheet" type="text/css" href="how-to.css" />
	<link rel="stylesheet" type="text/css" href="css/specific/login.css" />
	<script language="javascript" type="text/javascript" src="js/jquery1-5.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.form.js"></script>
	<script language="javascript" type="text/javascript" src="js/document-ready.js"></script>
	<script language="javascript" type="text/javascript" src="js/snippets.js"></script>
</head>
<body >
<div class="wrapper">
	<div class="wrapper-inner">
			<div class="main-inner">
				<div class="content-top"></div>
				<div class="content">
					<div class="content-middle"></div>
					<div class="content-middle-bottom"></div>
					<div class="content-inner">
						<h1>Routines</h1>
						<div class="main-row">
							<ul class="nav">
								<li class="active">RE</li>
								<li>REM</li>
								<li>Split Paths</li>
								<li>Strip Ext</li>
								<li>Sort</li>
								<li>Unique</li>
								<li>Redirects</li>
								<li>A &#8834; B</li>
								<li>Parse HTML</li>
							</ul>
						</div>
						<div id="tool-case">
							<div class="main-row" id="div-re">
								<? include('includes/replicate-expression.php'); ?>
							</div>
							<div class="main-row" id="div-rem">
								<? include('includes/rem.php'); ?>
							</div>
							<div class="main-row" id="div-sp">
								<? include('includes/split-path.php'); ?>
							</div>
							<div class="main-row" id="div-se">
								<? include('includes/strip-ext.php'); ?>
							</div>
							<div class="main-row" id="div-so">
								<? include('includes/sort.php'); ?>
							</div>
							<div class="main-row" id="div-ul">
								<? include('includes/unique.php'); ?>
							</div>
							<div class="main-row" id="div-cq-ia">
								<? include('includes/cq-ia.php'); ?>
							</div>
							<div class="main-row" id="div-asb">
								<? include('includes/asb.php'); ?>
							</div>
							<div class="main-row" id="div-snippets">
								<? include('includes/snippets.php'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="content-bottom"></div>
			</div>
	</div>
</div>
<div class="body-left"></div>
<div class="body-right"></div>
<div class="instructions-div"></div>
</body>
</html>