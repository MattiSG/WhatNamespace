<!doctype html>  
<html lang="en-EN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	
		<title>Namespaces — WhatNamespace</title>
		<meta name="description" content="XML dialects and their namespaces.">
		<meta name="author" content="Matti Schneider-Ghibaudo">
		
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
	</head>
	
	<body>
	    <header>
	    	<h1>WhatNamespace</h1>
	    	<p>XML dialects and their namespaces.</p>
	    </header>
	    
	    <div id="main" role="main">
	    	<table>
	    		<thead>
	    			<tr>
	    				<th>Dialect</th>
	    				<th>Namespace</th>
	    				<th>Doc</th>
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
		</footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js" language="javascript" type="text/javascript"></script>
		<script src="js/WhatNamespace.js" language="javascript" type="text/javascript"></script>
	</body>
</html>