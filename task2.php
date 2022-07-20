<?php 
function isValidHexCode($str) { 
    if($str[0] !="#") { 
        return "Messing #"  ; 
    }else  { 
        if(strlen($str) > 7 ) { 
            return "Length exceeds 6" ; 
        }else if(strlen($str) < 7 ) { 
            return "Length less than 6" ; 
        }else { 
            for($i=1;$i<strlen($str);$i++) { 
                if(preg_match("/[^A-Fa-f0-9#@!$%&*()-+=]/", $str)) { 
                    return "Not all alphabetic characters in A-F" ;
                }else if(preg_match("/[^A-Fa-f0-9#]/",$str)) {
                    return "Contains unacceptable character"; 
                }
            }
            return "True" ;
        }
    }
};
echo isValidHexCode("#CD5C5C")."<br/>" ;
echo isValidHexCode("#EAECEE")."<br/>" ;
echo isValidHexCode("#eaecee")."<br/>";
echo isValidHexCode("#CD5C58C")."<br/>";
echo isValidHexCode("#CD5C5Z")."<br/>"; 
echo isValidHexCode("#CD5C&C")."<br/>"; 
echo isValidHexCode("CD5C5C");
