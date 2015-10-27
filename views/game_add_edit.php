<form action="games.php" method="get">
  <input type="hidden" name="gid" value="<?= $game->getGID() ?>">
  <input type="hidden" name="action" value="save_game">

  <label>Name: </label><input type="text" name="name" value="<?= $game->getName() ?>"><br>
  <label>Genre: </label><input type="text" name="genre" value="<?= $game->getGenre() ?>"><br>
  <label>Players: </label><input type="text" name="players" value="<?= $game->getPlayers() ?>"><br>
  <label>Release Year: </label><input type="text" name="releaseYear" value="<?= $game->getreleaseYear() ?>"><br>
  <label>Image: </label><input type="text" name="img" value="<?= $game->getImage() ?>"><br>
  <input type="submit" value="Save"  class='button'>
</form>
