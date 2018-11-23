<?php

/**
 * session class
 */
class Session{
  public static function init(){
    session_start();
  }
  public static function set($key,$value){
    $_SESSION['$key'] = $value;

  }
  public static function get($key){
    if (isset($_SESSION['$key'])) {
      return $_SESSION['$key'];
    }
    else {
      return false;
    }
  }
  public static function checkSessionTeacher(){
    self::init();
    if (self::get('teacher_login')==false) {
    self::destroy();
    header("Location:teacher_login.php");
    }
  }
  
  public static function checkSessionStaff(){
    self::init();
    if (self::get('staff_login')==false) {
    self::destroy();
    header("Location:staff_login.php");
    }
  }
  public static function destroy(){
    session_destroy();
   
  }
}
 ?>
