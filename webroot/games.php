<!DOCTYPE html>
<html>
  <head>
    <title>N64 Boss Level!</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>
  <body>
    <h2>N64 Flashback</h2>
    <?php
      require_once('../lib/db.interface.php');
      require_once('../lib/db.class.php');
      require_once('../models/game.class.php');
      require_once('../models/game_manager.abstract.php');
      require_once('../models/game_manager.class.php');


      $action = isset($_GET["action"])?$_GET["action"]:'';
      $target = isset($_GET["target"])?$_GET["target"]:'';


      switch ($action) {
        case 'view_game':
           $gameManager = new gameManager();
           $game = $gameManager->getGame($target);
           include('../views/game_view.php');
          break;

         case 'delete_game':
           $gameManager = new gameManager();
           $gameManager->delete($target);
           break;

         case 'add_game':
           $gameManager = new gameManager();
           $game = new game();
           include('../views/game_add_edit.php');
           break;

         case 'edit_game':
           $gameManager = new gameManager();
           $game = $gameManager->getGame($target);
           include('../views/game_add_edit.php');
           break;

         case 'save_game':
           $gameManager = new gameManager();
           $arr = array();
           $arr["gid"] = isset($_GET["gid"])?$_GET["gid"]:'';
           $arr["name"] = isset($_GET["name"])?$_GET["name"]:'';
           $arr["genre"] = isset($_GET["genre"])?$_GET["genre"]:'';
           $arr["players"] = isset($_GET["players"])?$_GET["players"]:'';
           $arr["releaseYear"] = isset($_GET["releaseYear"])?$_GET["releaseYear"]:'';
           $arr["img"] = isset($_GET["img"])?$_GET["img"]:'';
           $game = new game();
           $game->Navi($arr);
           $gameManager->save($game); ?>
           <a href='games.php' class='button'>View All Games</a>
<?php
           break;

        default:
          $gameManager = new GameManager();
          $games = $gameManager->getAllGames();
          include('../views/game_view_list.php');
          break;
      }
    ?>

</body>
</html>
