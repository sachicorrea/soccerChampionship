    <section>
        <div class="container">
            <?php if(isset($_GET["action"])) { ?>
                <div class="<?= $class; ?>" role="alert">
                    <?= $message; ?>
                </div>
            <?php } ?>

            <h2>Cities List</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($listCities as $cities) { ?>
                        <tr>
                            <td><?= $cities->id; ?></td>
                            
                            <td><?= $cities->name; ?></td>
                            
                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?= $cities->id; ?>" role="button">Update</a>
                                <a class="btn btn-danger" href="destroy.php?id=<?= $cities->id; ?>" role="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>