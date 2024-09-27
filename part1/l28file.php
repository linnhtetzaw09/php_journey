<?php

//=> Read
echo readfile("l28file.txt");
echo "<br/>";
echo filesize("./l28file.txt");

echo "<hr/>";

$fileopen = fopen("l28file.txt","r");       //fopen(filepath,action)

if($fileopen){
    echo "file exists";
    echo "<br/>";

    $filesize = filesize("l28file.txt");
    $fileread = fread($fileopen,$filesize);   //fread(fileopen,filesize)
                fclose($fileopen);
    echo $fileread;


}else{
    echo "file does not exists";
}

echo "<hr/>";


$fileopen = fopen("l28files.txt",'w');

if($fileopen){
    echo "file exists";
    echo "<br/>";

    // fwrite($fileopen,"Hello i am lin htet zaw");
    fwrite($fileopen,"Hello i am chan chan");

    $fileopen = fopen('l28files.txt','r');
    $fileread = fread($fileopen,filesize('l28files.txt'));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "file does not exists";
}

echo "<hr/>";


//Note :: "x" is create file only, return FALSE if file already exists.
$fileopen = fopen("l28newfile.txt",'x');

if($fileopen){
    echo "file exists";
    echo "<br/>";

}else{
    echo "file does not exists";
}

echo "<hr/>";

//Note :: "c" is create file only. if you want to use "c" to read file u must write as "c+". "c+" can also Create file.
$fileopen = fopen("l28myfile.txt",'c');

if($fileopen){
    echo "file exists";
    echo "<br/>";

    fwrite($fileopen,"Hello i created myfile");
    fwrite($fileopen,"Hello i want to get billion of money");

    $fileopen = fopen('l28myfile.txt','c+');
    $fileread = fread($fileopen,filesize('l28myfile.txt'));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "file does not exists";
}

echo "<hr/>";


$fileopen = fopen("l28ourfile.txt",'w');

if($fileopen){
    echo "file exists";
    echo "<br/>";

    fwrite($fileopen,"Hello ");
    fwrite($fileopen,"World");

    // $message = "Welcome to our class. \n";
    // fwrite($fileopen,$message);
    // $message = "Thanks for using php file system";
    // fwrite($fileopen,$message);

    $fileopen = fopen('l28ourfile.txt','r');
    $fileread = fread($fileopen,filesize('l28ourfile.txt'));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "file does not exists";
}

echo "<hr/>";

$fileopen = fopen("l28urfile.txt",'a');

if($fileopen){
    echo "file exists";
    echo "<br/>";

    // fwrite($fileopen,"Hello ");
    // fwrite($fileopen,"World");

    $message = "Welcome to our class. \n";
    fwrite($fileopen,$message);
    $message = "Thanks for using php file system";
    fwrite($fileopen,$message);

    $fileopen = fopen('l28urfile.txt','r');
    $fileread = fread($fileopen,filesize('l28urfile.txt'));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "file does not exists";
}

echo "<hr/>";


// -----------------------------------------------------------------------------------------------

// => other useful file function

// file_get_contents(file)   =  can Read file
// file_put_contents(file,string)   = can Write file
// file_exists()  / isfile()    =  can check file exits or not
// copy(mainfile,copyfile)   =  can copy file
// rename(mainfile,newfile)   =  can rename a file
// unlink(mainfile)   =  can delete a file

echo file_get_contents('l28file.txt');

echo "<hr/>";

$existingfile = 'l28file.txt';
$namefile = 'l28softfile.txt';
$message = file_get_contents($existingfile);
$message .= "\n Thanks for using file system. \n";

file_put_contents($namefile,$message) or die("unable to open");

$existingfile = 'l28file.txt';
$namefile = 'l28headfile.txt';

if(file_exists($existingfile)){
    echo "file exist";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using file system. \n";

    file_put_contents($namefile,$message) or die("unable to open");

}else{
    echo "file not found";
}

echo "<hr/>";

$existingfile = 'l28file.txt';
$namefile = 'l28mainfile.txt';

if(is_file($existingfile)){
    echo "file exist";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using file system. \n";

    file_put_contents($namefile,$message) or die("unable to open");

}else{
    echo "file not found";
}

echo "<hr/>";

// =>copy(mainfile,copyfile)

$existingfile = 'l28file.txt';
copy($existingfile,'l28subfile.txt');
echo file_get_contents('l28subfile.txt');

echo "<hr/>";


//=>rename(main,newfilename)
$existingfile = "l28subfile.txt";
rename($existingfile,"l28webfile.txt");
echo file_get_contents('l28webfile.txt');

echo "<hr/>";

// =>unlink(mainfile)

$existingfile = "l28webfile.txt";

if(file_exists($existingfile)){
    unlink($existingfile);
    echo "file delete successful";
}else{
    echo "file not found";
}

echo "<hr/>";

$url = "l28file.txt";
fopen($url,'r') or exit("can't not connect");


// =>Show all .txt files
echo "<pre>".print_r(glob("*.txt"),true)."</pre>";

echo "<hr/>";

// =>Show all  files
echo "<pre>".print_r(glob("*.*"),true)."</pre>";

echo "<hr/>";



?>