PHP File Handling

<?php
echo readfile("webdictionary.txt"); //Assume we have a text file called "webdictionary.txt", stored on the server

?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

<?php

$myFile = fopen("webdictionart.txt", "r") or die("Unable to open file!");
echo fread($myFile, filesize('webdictionart.txt'));
fclose($myFile)

?>


Modes   Description
r   Open a file for read only. File pointer starts at the beginning of the file
w   Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a   Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x   Creates a new file for write only. Returns FALSE and an error if file already exists
r+  Open a file for read/write. File pointer starts at the beginning of the file
w+  Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+  Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+  Creates a new file for read/write. Returns FALSE and an error if file already exists

PHP Read File - fread()

fread() function read from an open file

the first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bites to read

fread($myFile,filesize('webdictionary.txt'));

PHP Close File - fclose()


<?php

$myFile = fopen('webdictionary.txt', 'r');

//code to be executed..

fclose($myFile);

?>

PHP Read Single Line - fgets()

reads a single line from the file