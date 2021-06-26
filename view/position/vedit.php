    <section>
        <div class="container">
           <h2>Edit a position</h2>

            <form action="update.php" method="POST">
            <div class="form-group">
                    <label for="city-id" class="form-label">Position's ID</label>
                    <input type="text" class="form-control" id="position_id" name="position_id" value="<?php echo $positionPlayerEdit->position_id ?>" readonly>
                </div>
                
                <div class="form-group">
                    <label for="name" class="form-label">Position's category</label>
                    <input type="text" class="form-control" id="position_name" name="position_name" value="<?php echo $positionPlayerEdit->name ?>">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>  