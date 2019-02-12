<?php

$a = $_REQUEST["a_data"];
$b = $_REQUEST["b_data"];
$c = $_REQUEST["c_data"];
$d = $_REQUEST["d_data"];
$string_to_write = "<html>
<body>
<b>A$a</b>

<b>B$b</b>

<b>C$c</b>

<b>D$d</b>


</body>
</html>";

$myfile = fopen("file_to_read.html", "w") or die("Unable to open file!");
fwrite($myfile, $string_to_write);
fwrite($myfile, $txt);
fclose($myfile);
?>