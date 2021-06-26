    <section>
        <div class="container">
           <h2>Edit a city</h2>

            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="city-id" class="form-label">City's ID</label>
                    <input type="text" class="form-control" id="id" name ="id" value="<?= $cityId->id ?>" readonly>
                </div>
                
                <div class="form-group">
                    <label for="name" class="form-label">City's name</label>
                    <input type="text" class="form-control" id="name" name ="name" value="<?= $cityId->name ?>">
                </div>

                <button type="submit" class="btn btn-primary">Update this city</button>
            </form>
        </div>
    </section>  