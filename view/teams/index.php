<section>
        <div class="container">
            <?php if(isset($_GET["action"])) { ?>
                <div class="<?= $class; ?>" role="alert">
                    <?= $message; ?>
                </div>
            <?php } ?>

            <h2>Teams' List</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Team's name</th>
                        <th scope="col">Manager</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($listTeams as $key_team) { ?>
                        <tr>
                            <td scope="row"><?php echo $key_team->team_id; ?></td>
                            <td scope="row"><?php echo $key_team->team_name; ?></td>
                            <td scope="row"><?php echo $key_team->manager; ?></td>
                            <td scope="row"><?php echo $key_team->n_city; ?></td>
                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?php echo $key_team->team_id; ?>" role="button">Update</a>
                                <a class="btn btn-danger" href="destroy.php?id=<?php echo $key_team->team_id; ?>" role="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>