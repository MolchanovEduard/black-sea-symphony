<?php
class f{
        
     // поле таблицы - название

 //  обновление информации из input type="text"
     public static function up(){
        $i=  a::p_i();
        $id= a::p_id();
        $n=__CLASS__;
        $x=  trim($_POST[$n]);
        $q="update $i set $n='$x' WHERE id=$id ";
        db::e($q);
     }       
     
    
        
    //  обновление информации из input type="file"
    public static function up_f(){
       $i=  a::p_i();
       $id= a::p_id();
       $n=__CLASS__;
       if(copy($_FILES["filename"]["tmp_name"],"../upload/".$_FILES["filename"]["name"])) {$x=$_FILES["filename"]["name"];}
       else $x="no";
       $q="update $i set $n='$x' WHERE id=$id ";
       db::e($q);      
    }



    // добавление информации из input type="file"
    public static function add_f(){
       $i=  a::p_i();
       $n=__CLASS__;
       if(copy($_FILES["filename"]["tmp_name"],"../upload/".$_FILES["filename"]["name"])) {$x=$_FILES["filename"]["name"];}
       else $x="no";
       $q="insert into $i($n) value('$x')";
       db::e($q);      
    }


}   // end f
?>