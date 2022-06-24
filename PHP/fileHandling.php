
<?php
    // PHP File Handling:- 
    // PHP File System allows us to create file, read file line by line, read file character by character, write file, append file, delete file and close file.
    
    // readfile:-
    // readfile("myFile.txt");
    // readfile("index.html");
    
    // PHP File Open():- The PHP fopen() function is used to open a file.
    // Syntax:-
    // resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )  

    // $open = fopen("myFile.txt", "r");
    // $content = fread($open, filesize("myFile.txt"));
    // echo $content; 
    
    // PHP CLose Flie: - The PHP fclose() function is used to close an open file pointer.
    // Syntax :-
    // fclose(filepointer);

    // $open = fopen("myFile.txt", "r");
    // $content = fread($open, filesize("myFile.txt"));
    // fclose($open);
    // echo $content;

    // fgets():- it reads file one line at a time.
    // $open = fopen("myFile.txt", "r");
    // // echo fgets($open); // read one line at a time,
    // while($i=fgets($open)) {
    //     echo $i;
    // }

    // fgetc():- reads a file character by character
    // $open = fopen("myFile.txt", "r");
    // // echo fgetc($open); // read one character at a time,
    // while($i=fgetc($open)) {
    //     echo $i;
    // }
    // fclose($open);

    // PHP file appending and write.
    // File Write = The PHP fwrite() function is used to write content of the string into file.
    // $create = fopen("myFileWrite.txt", "w");
    // fwrite($create, "The PHP fwrite() function is used to write content of the string into file. PHP fwrite() and fputs() functions are used to write data into file. To write data into file, you need to use w, r+, w+, x, x+, c or c+ mode.");
    // fclose($create);

    // // File Append:- 
    // $create = fopen("myFileAppend.txt", "a");
    // fwrite($create, "If you use a mode, it will not erase the data of the file. It will write the data at the end of the file. Visit the next page to see the example of appending data into file.");
?>  