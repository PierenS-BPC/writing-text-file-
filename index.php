<html>
<body>

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);

<body>
</html>
