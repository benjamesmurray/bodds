<?php include_once("home.html")	
?> 

<?php
echo "Test data set 1
";
$path = "/app/testdata/group_1";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata//group_1/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "Test data set 2
";
$path = "/app/testdata/group_2";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata//group_2/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "Test data set 3
";
$path = "/app/testdata/group_3";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata//group_3/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

