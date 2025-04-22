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
print("<br>");

//or////////////////////////////////////////////////

function arr2($names){

    foreach($names as $newarray){ // newarray of i = names of i for each iterarion passes array to other
        if(strlen($names)!=5){
            continue;
        }
        
    }
    return $newarray;

}
print_r( arr(["ahmed","ali","osama","ramadan","mahmoud","eslam"]));
?>
