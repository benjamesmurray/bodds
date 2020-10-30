<?php include_once("home.html")	
?> 

<?php
echo "<p>Test data set 1</p>
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
echo "<p>Test data set 2</p>
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
echo "<p>Test data set 3</p>
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


<?php
echo "<p>NeTEx</p>
";
$path = "/app/testdata/fares";
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


<?php
echo "<p>Siri</p>
";
$path = "/app/testdata/siri";
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