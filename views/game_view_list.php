
<table>
    <tr>
        <!-- <td>Game ID</td> -->
        <td>Game Name</td>
        <td>Genres</td>
        <td># of Players</td>
        <td>Release Year</td>
    </tr>
  <?php foreach($games as $game){ ?>
  <tr>
    <!-- <td><?= $game->getGID() ?></td> -->
    <td><?= $game->getName() ?></td>
    <td><?= $game->getGenre() ?></td>
    <td><?= $game->getPlayers() ?></td>
    <td><?= $game->getreleaseYear() ?></td>
    <td><img src="<?= $game->getImage() ?>" style="width:124px;height:90px;"</td>
    <td><a href='games.php?action=view_game&target=<?= $game->getGID() ?>' class='button'>View</a></td></td>
  </tr>
  <?php } ?>
</table>
<br><br>
<a href='games.php?action=add_game' class='button'>Add New Game</a>
