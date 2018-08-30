<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script></script>
        <title></title>
    </head>
    <body>

        <div style="background-color: greenyellow;"><!--switchgame -->
            <div class="row">
                <div class="col-md-8 text-right" >
                    <button class="btn btn-warning"data-toggle="modal" data-target="#config" >new game</button>
                </div>
            </div>
            <div style="background-color: yellow;">
                <?php
                $party[] = $_POST;
                foreach ($party as $t => $tab) {
                    ?>
                    <form method="GET ">

                        <article class="annonce-side row">
                            <h3 class="col-md-2"><?php echo $tab['title']; ?></h3>

                            <strong class="col-md-3"><?php echo'nom du joueur' ?></strong>
                            <div class="row">
                                <strong class="col-md-1">difficulty : <?php echo $tab['difficulty']; ?></strong>
                                <h class="col-md-2">mode : <?php echo $tab['mode']; ?></h>
                                <h class="col-md-2">color : <?php echo $tab['color']; ?></h>
                                <h class="col-md-3">waiting for a player(1/2)</h>
                                <button class="btn btn-warning" >rejoin</button>
                            </div>
                        </article>
                    </form>
                    <hr />

                <?php } ?>
            </div><!--Endroi ou métres l'ajax pour les parties ouvertes-->
        </div>

        <!--<div id="config" role="dialog" aria-labelledby="config" aria-hidden="true"><-- pop up config - ->
             test
         </div> -->

        <!-- Modal -->
        <div class="modal fade" id="config" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="salon.php" name="formconfig">
                        <div class="modal-header">
                            <b>New party</b>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>name of the party </label>
                            <input name="title" type="text">
                            <br>
                            <label>mode</label>
                            <select name="mode">
                                <option value="normal">normal
                                <option value="extrem">extreme
                            </select>
                            <br>
                            <label>dificulty</label>
                            <select name="difficulty">
                                <option value="easy">facile
                                <option value="middel">moyen
                                <option value="dificult">difficile
                            </select>
                            <br>
                            <label>color</label>
                            <select name="color">
                                <option value="bi">bicolor
                                <option value="multi">multicolor
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!--<a href="index.php" name="formconfigura" type="submit" value="ok">test</a>-->
                            <input class="btn btn-primary" type="submit" name="formconfig" value="ok" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <?php
        print_r($party)
        ?>

    </body>
</html>
