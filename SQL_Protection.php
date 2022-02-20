<?php
function StringSanitize (string $Value){
    $Forbidden=array('#', '=', '\'', ';','\\','+','-','[',']');
    $Result="";
    $Char=str_split($Value);
    for($i=0;$i<count($Char);$i++){
        $Change=false;
        for($i2=0;$i2<count($Forbidden) && !$Change;$i2++){
            if($Char[$i]==$Forbidden[$i2]){
                $Change=true;
            }
        }
        
        if($Change){
            $Result = $Result."\\".$Char[$i];
        }else{
            $Result = $Result.$Char[$i];
        }
        
        
    }
    return $Result;
}
function SQLProtection (array $Form){
    foreach($Form as $Index => $Value){
        if(is_array($Value)){
            $Form[$Index]=SQLProtection($Value);
        }else{
            $Form[$Index]=StringSanitize($Value);
        }
    }
    return $Form;
}
?>
