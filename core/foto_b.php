<?php
class foto_b{
        
    public static function up(){
       
       $id= a::p_id();
       $k=db::r("select a2 from foto where id=$id")->a2;
      
       if(copy($_FILES["filename"]["tmp_name"],"../foto/".$k."_b/".$_FILES["filename"]["name"])) {$x=$_FILES["filename"]["name"];}
          
    }
    
}   // end foto_b


?>
