<?php

function setpassword ($plaintext){
    $passcode = $plaintext;
    echo $passcode;
}

setpassword("passcode123");

function passworddef ($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_DEFAULT);    //dync code
    echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode}";
    echo strlen($passcode);
}

passworddef("passcode123");

function passwordbcr ($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_BCRYPT);    //dync code
    echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode}";
    echo strlen($passcode);
}

passwordbcr("passcode123");


function passworddecrypt (){

    $plaintextone = 'passoword123';
    $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);

    $plaintexttwo = 'passoword123';
    $enccodetwo = password_hash($plaintexttwo,PASSWORD_DEFAULT);

    // echo "Encrypt code one = {$enccodeone}";
    // echo "Encrypt code one = {$enccodetwo}";

    $verify = password_verify($plaintextone,$enccodetwo);

    if($verify){
        echo "Ok";
    }else{
        echo "Failed";
    }
}

passworddecrypt();

function passwordmd5($plaintext){
    // message digest 5 = md5(string,binary)
    // note: binary ( TRUE/true OR FALSE/false)
    // TRUE/true = raw 16 characters binary format
    // FALSE/false = default 32 characters hax number

    $passcode1 = md5($plaintext);    //static
    echo "Before Encrypt = {$plaintext} , After Encrypt MD5 = {$passcode1}";
    echo strlen($passcode1);    //32

    $passcode2 = md5($plaintext,FALSE);    //static
    echo "Before Encrypt = {$plaintext} , After Encrypt MD5 by FALSE = {$passcode2}";
    echo strlen($passcode2);    //32

    $passcode3 = md5($plaintext,TRUE);    //static
    echo "Before Encrypt = {$plaintext} , After Encrypt MD5 by TRUE = {$passcode3}";
    echo strlen($passcode3);    //16


}

passwordmd5("password123");


function passwordmd5verify($plaintext){
    
    $getpassword = "482c811da5d5b4bc6d497ffa98491e38";

    if($getpassword === md5($plaintext)){
        echo "Password match with 32 chars hax number";
    }elseif($getpassword === md5($plaintext,FALSE)){
        echo "Password match with 16 chars binary format";   //can't match cuz it is a binary
    }else{
        echo "Password do not match";
    }

}

passwordmd5verify("password123");


function passwordsha1($plaintext){

    // message digest 5 = md5(string,binary)
    // note: binary ( TRUE/true OR FALSE/false)
    // TRUE/true = raw 20 characters binary format
    // FALSE/false = default 40 characters hax number

    $passcode1 = sha1($plaintext);    //static
    echo "Before Encrypt = {$plaintext} , After Encrypt sha1 = {$passcode1}";
    echo strlen($passcode1);    //40

    $passcode2 = sha1($plaintext,FALSE);    //static
    echo "Before Encrypt = {$plaintext} , After Encrypt sha1 by FALSE = {$passcode2}";
    echo strlen($passcode2);    //40

    $passcode3 = sha1($plaintext,TRUE);    //static
    echo "Before Encrypt = {$plaintext} , After Encrypt sha1 by TRUE = {$passcode3}";
    echo strlen($passcode3);    //20

}

passwordsha1("password123");


function passwordsha1verify($plaintext){

    $getpassword = "sha1 password to print in one compiler";

    if($getpassword === sha1($plaintext)){
        echo "Password match with 32 chars hax number";
    }elseif($getpassword === sha1($plaintext,TRUE)){
        echo "Password match with 16 chars binary format";   //can't match cuz it is a binary
    }else{
        echo "Password do not match";
    }

}

passwordsha1verify("password123");

function passwordcrypt ($plaintext){
    // =>crypt(string,key)

    $cryptkey = "12345asd";
    $passcode = crypt($plaintext,$cryptkey);    //static code
    echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode}";
    echo strlen($passcode);  //13
}

passwordcrypt("passcode123");

function passwordcryptverify($plaintext){

    $getpassword = "cryptkey hash value";
    $cryptkey = "12345asd";

    if($getpassword === crypt($plaintext,$cryptkey)){
        echo "Password match";
    }else{
        echo "Password do not match";
    }

}

passwordcryptverify("password123");



function strongpw ($plaintext){
    
    // $newpw = md5($plaintext);
    // $newpw = sha1(($newpw));
    // $newpw = crypt($newpw,$newpw);

    $cryptkey = "1234asd";
    $newpw = crypt(sha1(md5($plaintext)),$cryptkey);

    echo "Before Encrypt = {$plaintext} , After Encrypt = {$newpw}";
    echo strlen($newpw);  //13
}

strongpw("passcode123");


function strongpwverify ($plaintext){
    
    // $getpassword = "cryptkey hash value";

    // if($getpassword === crypt(sha1(md5($plaintext)),sha1(md5($plaintext)))){
    //     echo "Password match";
    // }else{
    //     echo "Password do not match";
    // }


    $getpassword = "hash value";
    $cryptkey = "1234asd";

    if($getpassword === crypt(sha1(md5($plaintext)),$cryptkey)){
        echo "Password match";
    }else{
        echo "Password do not match";
    }

}

strongpwverify("password123");


?>