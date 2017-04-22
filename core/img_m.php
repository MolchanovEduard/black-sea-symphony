<?php
class img_m{
        
    public static function up(){
       $i=  a::p_i();
       $id= a::p_id();
       $n=__CLASS__;
       if(copy($_FILES["filename"]["tmp_name"],"../posters/preview/".$_FILES["filename"]["name"])) {$x=$_FILES["filename"]["name"];}
       else $x="no";
       $q="update $i set $n='$x' WHERE id=$id ";
       db::e($q);      
    }
    
}   // end img_m


?>
