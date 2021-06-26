<section>
        <div class="container">
            <?php if(isset($_GET["action"])) { ?>
                <div class="<?= $class; ?>" role="alert">
                    <?= $message; ?>
                </div>
            <?php } ?>

            <h2>Players' List</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Player Id</th>
                        <th scope="col">Players' name</th>
                        <th scope="col">Players' position</th>
                        <th scope="col">Players' team</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($listPlayers as $key_players) { ?>
                        <tr>
                            <td scope="row"><?php echo $key_players->document; ?></td>
                            <td scope="row"><?php echo $key_players->name_player; ?></td>
                            <td scope="row"><?php echo $key_players->n_position; ?></td>
                            <td scope="row"><?php echo $key_players->n_team; ?></td>
                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?php echo $key_players->document; ?>" role="button">Update</a>
                                <a class="btn btn-danger" href="destroy.php?id=<?php echo $key_players->document; ?>" role="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>