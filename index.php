<!doctype html>  
<html lang="en-EN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	
		<title>Namespaces — WhatNamespace</title>
		<meta name="description" content="Namespaces of all XML dialects.">
		<meta name="author" content="Matti Schneider-Ghibaudo">
	</head>
	
	<body>
	    <header>
	    	<h1>Namespaces</h1>
	    	<p>Find the namespace for all XML dialects.</p>
	    </header>
	    
	    <div id="main" role="main">
	    	<table>
	    		<thead>
	    			<tr>
	    				<th>Dialect</th>
	    				<th>Namespace</th>
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
		</footer>
	</body>
</html>