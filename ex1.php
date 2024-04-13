<!DocType html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="sytle.css">
	<title>PHP Example 1</title>
</head>

<body>

    <?php 
        echo "<p>Hello World!</p>";
        echo "<p>\"Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.\" - Linus Torvalds</p>";
        echo "<p>Today is " . date("l") . ", " . date("m/d/Y") . ".</p>";

        $url="https://www.w3schools.com/css/";
        echo "<p>Go to <a href='$url'>W3CSchools CSS Tutorial</a></p>";
    ?>
	
</body>
</html>