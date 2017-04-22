<?php
class img_b{
        
    public static function up(){
       $i=  a::p_i();
       $id= a::p_id();
       $n="img1";
       if(copy($_FILES["filename"]["tmp_name"],"../posters/".$_FILES["filename"]["name"])) {$x=$_FILES["filename"]["name"];}
       else $x="no";
       $q="update $i set $n='$x' WHERE id=$id ";
       db::e($q);      
    }
    
}   // end img_b


?>
