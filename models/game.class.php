<?php

class Game{

  private $_gid;
  private $_name;
  private $_genre;
  private $_players;
  private $_releaseYear;
  private $_img;

  public function getGID(){return $this->_gid;}
  public function setGID($arg){$this->_gid = $arg;}

  public function getName(){return $this->_name;}
  public function setName($arg){$this->_name = $arg;}

  public function getGenre(){return $this->_genre;}
  public function setGenre($arg){$this->_genre = $arg;}

  public function getPlayers(){return $this->_players;}
  public function setPlayers($arg){$this->_players = $arg;}

  public function getreleaseYear(){return $this->_releaseYear;}
  public function setreleaseYear($arg){$this->_releaseYear = $arg;}

  public function getImage(){return $this->_img;}
  public function setImage($arg){$this->_img = $arg;}

  public function Navi($arr) {
    $this->setGID(isset($arr["gid"])?$arr["gid"]:'');
    $this->setName(isset($arr["name"])?$arr["name"]:'');
    $this->setGenre(isset($arr["genre"])?$arr["genre"]:'');
    $this->setPlayers(isset($arr["players"])?$arr["players"]:'');
    $this->setreleaseYear(isset($arr["releaseYear"])?$arr["releaseYear"]:'');
    $this->setImage(isset($arr["img"])?$arr["img"]:'');
  }

}
