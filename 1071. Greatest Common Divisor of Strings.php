<?php

/* For two strings s and t, we say "t divides s" if and only if s = t + ... + t (i.e., t is concatenated with itself one or more times).
Given two strings str1 and str2, return the largest string x such that x divides both str1 and str2.
 */

 function gcdOfStrings($str1, $str2) {
    $size1=strlen($str1);
    $size2=strlen($str2);
    if($str1.$str2!==$str2.$str1)
    return "";
    $result=($size1>$size2)?$size2:$size1;
    while($result>0){
        if($size1%$result==0 && $size2%$result==0){           //finding the gcd of the lengthes of 2 strings 
            break;
        }
        $result--;
    }
return substr($str1,0,$result);                               //extracting a substring form the longest string that its lenght is the gcd of the 
                                                             // two strings and thats the gcd string.
   
       
}






?>