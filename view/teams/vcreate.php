    <section>
        <div class="container">
           <h2>Create a team</h2>

            <form action="store.php" method="POST">
                <div class="form-group">
                    <label for="name" class="form-label">Team's name</label>
                    <input type="text" class="form-control" id="name" name ="name">
                </div>

                <div class="form-group">
                    <label for="manager" class="form-label">Manager</label>
                    <input type="text" class="form-control" id="manager" name ="manager">
                </div>

                <div class="form-group">
                    <label for="city">City</label>

                    <select class="form-control" id="city_team" name="city_team">
                        <?php foreach($listCities as $key_cities) { ?>
                            <option value="<?php echo $key_cities->id; ?>"><?php echo $key_cities->name; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </section>