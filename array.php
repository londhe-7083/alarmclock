<!DOCTYPE html>  
<html>  
<body>  
<?php  
$arr = array(1, 2, 3, 4, 5);   
$n = 3;  
   
print("Original array: <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
}    
      
for ($i = 0; $i < $n; $i++){  
    $first = $arr[0];  
      
    for($j = 0; $j < count($arr)-1; $j++){  
        $arr[$j] = $arr[$j+1];  
    }  
    $arr[$j] = $first;  
}  
   
print("<br>");  
   
print("Array after left rotation: <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
}      
?>  
</body>  
</html>