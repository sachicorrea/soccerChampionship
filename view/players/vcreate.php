<section>
    <div class="container">
        <h2>Create a player</h2>

        <form action="store.php" method="POST">
            <div class="form-group">
                <label for="player_name" class="form-label">Player's name</label>
                <input type="text" class="form-control" id="player_name" name ="player_name">
            </div>

            <div class="form-group">
                <label for="player_position" class="form-label">Player's position</label>
                
                <select class="form-control" id="player_position" name="player_position">
                    <?php foreach($listPosition as $key_position) { ?>
                        <option value="<?php echo $key_position->position_id; ?>"><?php echo $key_position->name; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="player_team">Player's team</label>

                <select class="form-control" id="player_team" name="player_team">
                    <?php foreach($listTeam as $key_team) { ?>
                        <option value="<?php echo $key_team->team_id; ?>"><?php echo $key_team->team_name; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</section>