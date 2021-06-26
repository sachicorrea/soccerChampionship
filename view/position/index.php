    <section>
        <div class="container">
            <?php if(isset($_GET["action"])) { ?>
                <div class="<?= $class; ?>" role="alert">
                    <?= $message; ?>
                </div>
            <?php } ?>

            <h2>Positions' List</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Position id</th>
                        <th scope="col">Position's category</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($listPosition as $key_positions) { ?>
                        <tr>
                            <td><?= $key_positions->position_id; ?></td>
                            <td><?= $key_positions->name; ?></td>
                            
                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?= $key_positions->position_id; ?>" role="button">Update</a>
                                <a class="btn btn-danger" href="destroy.php?id=<?= $key_positions->position_id; ?>" role="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>