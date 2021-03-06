<!doctype html>
<html lang="en-EN" manifest="cache.manifest">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, user-scalable=no">

		<title>XML dialects and their namespaces &#8212; WhatNamespace</title>
		<meta name="description" content="XML dialects and their namespaces.">
		<meta name="author" content="Matti Schneider">

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@matti_sg">
		<meta name="twitter:title" content="WhatNamespace.net">
		<meta name="twitter:description" content="Search XML dialects and their namespaces">
		<meta name="twitter:creator" content="">
		<meta name="twitter:domain" content="http://whatnamespace.net/">
		<meta name="twitter:image:src" content="http://whatnamespace.net/thumbnail.png">
		<meta name="og:image" content="http://whatnamespace.net/thumbnail.png">
		<meta name="thumbnail" content="http://whatnamespace.net/thumbnail.png">

		<link rel="stylesheet" type="text/css" href="css/main.css"/>
	</head>

	<body>
		<header>
			<!--googleoff: snippet-->
			<h1>WhatNamespace</h1>
			<!--googleon: snippet-->
			<p>A directory of XML dialects and their namespaces.</p>
			<!--googleoff: snippet-->
			<p><a href="http://www.rpbourret.com/xml/NamespacesFAQ.htm#exec_1" target="_blank">What is a namespace?</a></p>
			<!--googleon: snippet-->
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
			Made by <a href="http://mattischneider.fr">Matti Schneider</a>
			—
			<a href="https://github.com/MattiSG/WhatNamespace" target="_blank">Source on GitHub</a>
		</footer>

		<script src="js/mootools-core-1.4.2.js" language="javascript" type="text/javascript"></script> <!-- no CDN for proper app cache (FALLBACK has same origin policy) -->
		<script src="js/WhatNamespace.js" language="javascript" type="text/javascript"></script>
	</body>
</html>
