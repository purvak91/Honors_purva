<html>
    <head>
        <title>Favorite Food</title>
    </head>
    <body>
        <form method="POST" action="favfood.php">
            <div>
            <label>Name : </label>
            <input type="text" name="name">
            </div>
            <div>
                <p>Please enter your favorite food </p>
                <input type="radio" id="dalrice" name="fav_food" value="Dal Rice">
                <label for="dalrice">Dal Rice</label><br>
                <input type="radio" id="pulav" name="fav_food" value="Pulav">
                <label for="pulav">Pulav</label><br>
                <input type="radio" id="alooparatha" name="fav_food" value="Aloo Paratha">
                <label for="alooparatha">Aloo Paratha</label>
            <br>  
            <br>

            <input type="submit" value="Submit">
            </div>
        </form>
    </body>
</html>