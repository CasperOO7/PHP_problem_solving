<?php

/*You are given two strings word1 and word2. Merge the strings by adding letters in alternating order,
starting with word1. If a string is longer than the other, append the additional letters onto the end of the merged string.
Return the merged string */

    function mergeAlternately($word1, $word2) {
        $x=(strlen($word1)>strlen($word2)?strlen($word1):strlen($word2));
        $merg=array();
        for($i=0;$i<$x;$i++){
            if(isset($word1[$i]))
            $merg[]=$word1[$i];
            if(isset($word2[$i]))
            $merg[]=$word2[$i];
        }
        return implode('',$merg);
    }
        

    
?>