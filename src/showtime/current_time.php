<?php

namespace showtime;

class showtime{

  public function __construct(){
    $time = $this->current_time();
  }
  /* this function return current time */
  public function current_time(){
    $t=time();
    return date("Y-m-d",$t);
  }

}
