<?php
class db{
    
  // подключение к базе данных
    static private function con(){
		$params = parse_ini_file('config.ini');
		$db = new PDO($params['db.conn'], $params['db.user'], $params['db.pass']);
		$db->exec('SET CHARACTER SET utf8');
		return $db;		
	}
 
          
  // получение из таблицы всех строк
    static public function s($sql){
		return self::con()->query($sql)->fetchAll(PDO::FETCH_OBJ);
	}
       

    // получение из таблицы одной строки
    static public function r($sql){
		return self::con()->query($sql)->fetch(PDO::FETCH_OBJ);
	}   
       
        
  // запрос на вставку, удаление, редактирование строки таблицы
    static public function e($sql){
		return self::con()->exec($sql);
	}


    // получение из таблицы одной строки - ассоциативный массив 
    static public function a($sql){
		return self::con()->query($sql)->fetch(PDO::FETCH_ASSOC);
	}  

}   // end class db

