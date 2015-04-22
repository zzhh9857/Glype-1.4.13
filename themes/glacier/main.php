<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><!--[site_name]--></title>
<link href="themes/glacier/tools/style.css" rel="stylesheet" type="text/css" />
<meta name="robots" content="follow, all" />
<meta name="googlebot" content="index, follow" />
<meta name="revisit-after" content="10 days" />
<meta name="description" content="<!--[site_name]-->">
<link rel="icon" href="themes/glacier/images/fav.ico" type="image/x-icon">
<script type="text/javascript" src="themes/glacier/tools/jquery.min.js"></script> 
<script type="text/javascript" src="themes/glacier/tools/cufon-yui.js"></script>
<script type="text/javascript" src="themes/glacier/tools/Abraham_Lincoln_400.font.js"></script>
<script type="text/javascript" src="themes/glacier/tools/Inspiration_400.font.js"></script>
<script type="text/javascript" src="themes/glacier/tools/Museo_Slab_100_400-Museo_Slab_700_400.font.js"></script>
<script type="text/javascript">
	Cufon.replace('.logo h1', {fontFamily: 'Inspiration'});
	Cufon.replace('.logo h2', {fontFamily: 'Museo Slab 100'});
	Cufon.replace('.logo h2 span', {fontFamily: 'Abraham Lincoln'});
	Cufon.replace('p.big_text, p.small_text', {fontFamily: 'Museo Slab 100'});
	Cufon.replace('p.big_text strong, p.small_text strong', {fontFamily: 'Museo Slab 700'});
</script>
</head>
<body>
<div id="transy">
</div>
<div id="wrapper">
	<div class="logo"><!--[logo]--></div>
	<div class="content">
		<p class="big_text">
		
		<!--[description]-->
	
		<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
			<div class="field_content">
		<input type="text" name="u" id="input" class="field" value="<!--[url]-->">
		<input type="submit" value="" class="submit">
			</div>
		</form>
		
		<div class="clear"></div>
		<div id="options">
		<?php foreach($toShow as $details) { 
				echo <<<OUT
					<input type="checkbox" name="{$details['name']}" id="{$details['name']}"{$details['checked']} />
					<label for="{$details['name']}">{$details['title']}</label>

OUT;
}
?>
		</div>
	</div>
</div>
</body>
</html>
