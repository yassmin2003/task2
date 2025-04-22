<?php
//task 3

function arr($names){
  
    for($i=0 ; $i<count($names); $i++){
        if(strlen($names[$i])==5){
            $newarr[]=$names[$i];
        }
        
    }
    return $newarr;
}

print_r( arr(["ahmed","ali","osama","ramadan","mahmoud","eslam"]));
?>
