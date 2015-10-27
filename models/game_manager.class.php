<?php

class GameManager extends Manager{

  public function getGame($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $gid = $db -> quote($arg);
      $results = $db -> select("SELECT * from N64Games where gid = $gid limit 1");

      foreach($results as $result){
        $game = new Game();
        $game->Navi($result);
      }

      return $game;

  }
  public function getAllGames(){

      $db = new Db();
      $games = array();

      $results = $db -> select("SELECT * from N64Games");

    foreach($results as $result){
        $game = new Game();
        $game->Navi($result);
        $games[] = $game;
      }

      return $games;

  }
  public function save($game){
    if ($game->getGID()) {
      $this->_update($game);
    }
    else {
      $this->_add($game);
    }
  }

  private function _add($game){
    $db = new Db();

    $name = $db -> quote($game->getName());
    $genre = $db -> quote($game->getGenre());
    $players = $db -> quote($game->getPlayers());
    $releaseYear = $db -> quote($game->getreleaseYear());
    $img = $db -> quote($game->getImage());

    $results = $db -> query("insert into N64Games (name, genre, players, releaseYear, img) values ($name, $genre, $players, $releaseYear, $img);");

  }

  private function _update($game){
    $db = new Db();

    $gid = $db -> quote($game->getGID());
    $name = $db -> quote($game->getName());
    $genre = $db -> quote($game->getGenre());
    $players = $db -> quote($game->getPlayers());
    $releaseYear = $db -> quote($game->getreleaseYear());
    $img = $db -> quote($game->getImage());

    $results = $db -> query("update N64Games set name=$name, genre=$genre, players=$players, releaseYear=$releaseYear, img=$img where gid = $gid;");

  }

  public function delete($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $gid = $db -> quote($arg);
      $results = $db -> query("DELETE from N64Games where gid = $gid");
  }

}
