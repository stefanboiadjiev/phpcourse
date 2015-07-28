<?php

function col() {
    return strtoupper(dechex(rand(0,10000000)));
}

?>
<head>
		<title>php Homework2</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>
<div  style="width:200px; height:200px; background-color: #<?php echo col();?>">

</div>
</body  >