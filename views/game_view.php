<img src="<?= $game->getImage() ?>" style="width:290px;height:211px;"><br>

<br>

Game ID: <?= $game->getGID() ?><br>
Game Name: <?= $game->getName() ?><br>
Game Genre: <?= $game->getGenre() ?><br>
# of Players: <?= $game->getPlayers() ?><br>
Release Year: <?= $game->getreleaseYear() ?><br>

<br>

<a href='games.php' class='button'>View All Games</a>
<a href='games.php?action=delete_game&target=<?= $game->getGID() ?>' class='button'>Delete This Game</a>
<a href='games.php?action=edit_game&target=<?= $game->getGID() ?>' class='button'>Edit This Game</a>
