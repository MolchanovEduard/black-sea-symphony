<?php
class x2{
        
     // поле таблицы - название

       
     //  обновление информации из поля формы в соответсвующем поле таблицы базы данных
     public static function up(){
        $i=  a::p_i();
        $id= a::p_id();
        $n=__CLASS__;
        $x=  trim($_POST[$n]);
        $q="update $i set $n='$x' WHERE id=$id ";
        db::e($q);
     }
        
    
}   // end x2


?>