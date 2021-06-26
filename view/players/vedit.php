<section>
    <div class="container">
        <h2>Edit a Player</h2>

        <form action="update.php" method="POST">
        <div class="form-group">
                <label for="team-id" class="form-label">Player's ID</label>
                <input type="text" class="form-control" id="player_id" name="player_id" value="<?php echo $playerIdEdit->document; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="name" class="form-label">Player's name</label>
                <input type="text" class="form-control" id="player_name" name="player_name" value="<?php echo $playerIdEdit->name_player; ?>">
            </div>

            <div class="form-group">
                <label for="player_position">Player's position</label>
                
                <select class="form-control" id="player_position" name="player_position">
                    <?php foreach($listPosition as $key_position) { ?>
                        <option value="<?php echo $key_position->position_id; ?>" 
                            <?php if($key_position->position_id == $playerIdEdit->position_id){ ?> 
                                selected 
                            <?php } ?> ><?php echo $key_position->name; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="player_team">Player's team</label>
                
                <select class="form-control" id="player_team" name="player_team">
                    <?php foreach($listTeam as $key_team) { ?>
                        <option value="<?php echo $key_team->team_id; ?>" 
                            <?php if($key_team->team_id == $playerIdEdit->team){ ?> 
                                selected 
                            <?php } ?> ><?php echo $key_team->team_name; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</section>  