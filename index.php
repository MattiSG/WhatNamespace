<!doctype html>  
<html lang="en-EN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	
		<title>XML dialects and their namespaces &#8212; WhatNamespace</title>
		<meta name="description" content="XML dialects and their namespaces.">
		<meta name="author" content="Matti Schneider-Ghibaudo">
		
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
	</head>
	
	<body>
	    <header>
	    	<!--googleoff: snippet-->
			<h1>WhatNamespace</h1>
			<!--googleon: snippet-->
			<p>A directory of XML dialects and their namespace.</p>
	    </header>
	    
	    <div id="main" role="main">
	    	<table>
	    		<thead>
	    			<tr>
	    				<th>Dialect</th>
	    				<th>Namespace</th>
	    				<th>Spec</th>
	    			</tr>
	    		</thead>
	    		
	    		<tbody>
	    			<?php
	    				include(dirname(__FILE__) . '/namespacesTable.php');
	    			?>
	    		</tbody>
	    	</table>
		</div>
		  
		<footer>
			<a href="http://www.w3.org/TR/REC-xml-names/">XML Namespace Spec</a>
			—
			Made by <a href="http://mattischneider.fr">Matti Schneider-Ghibaudo</a>
		</footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js" language="javascript" type="text/javascript"></script>
		<script src="js/WhatNamespace.js" language="javascript" type="text/javascript"></script>
		
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28093627-1']);
			_gaq.push(['_trackPageview']);
			
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>