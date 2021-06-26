<section>
    <div class="container">
        <h2>Edit a Team</h2>

        <form action="update.php" method="POST">
        <div class="form-group">
                <label for="team-id" class="form-label">Team's ID</label>
                <input type="text" class="form-control" id="team_id" name="team_id" value="<?php echo $teamIdEdit->team_id; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="name" class="form-label">Team's name</label>
                <input type="text" class="form-control" id="team_name" name="team_name" value="<?php echo $teamIdEdit->team_name; ?>">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Team's manager</label>
                <input type="text" class="form-control" id="manager" name="manager" value="<?php echo $teamIdEdit->manager; ?>">
            </div>

            <div class="form-group">
                <label for="city">Team's city</label>
                
                <select class="form-control" id="city_team" name="city_team">
                    <?php foreach($listCities as $key_cities) { ?>
                        <option value="<?php echo $key_cities->id; ?>" <?php if($key_cities->id == $teamIdEdit->id){ ?> selected <?php } ?> >
                            <?php echo $key_cities->name; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</section>