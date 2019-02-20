<?php

namespace Session;

class Session {
  protected $sessionID;

  public function __construct(){
      if( !isset($_SESSION) ){
          $this->init_session();
      }
  }

  public function init_session(){
      session_start();
  }

  public function set_session_id(){
      $this->sessionID = session_id();
  }

  public function get_session_id(){
      return $this->sessionID;
  }

  public function session_exist( $session_name ){
      if( isset($_SESSION[$session_name]) ){
          return true;
      }
      else{
          return false;
      }
  }

  public function create_session( $session_name){
      if( !isset($_SESSION[$session_name])  ){
          $_SESSION[$session_name] = array();
      }
  }

  public function insert_value( $session_name , $data ){
      if( isset($_SESSION[$session_name]) ){
          $_SESSION[$session_name] = $data;
      }
  }

  public function display_session( $session_name ){
      echo '<pre>';print_r($_SESSION[$session_name]);echo '</pre>';
  }

  public function remove_session( $session_name = '' ){
      if( !empty($session_name) ){
          unset( $_SESSION[$session_name] );
      }
      else{
          unset($_SESSION);
      }
  }

  public function get_session_data( $session_name ){
      return $_SESSION[$session_name];
  }

  public function set_session_data( $session_name , $data ){
      $_SESSION[$session_name] = $data;
  }

}
