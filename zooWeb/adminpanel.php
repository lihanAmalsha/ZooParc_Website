<?php
    require_once('connection.php');
    
    ?>
<?php
            $query = "SELECT * FROM detailedevents";
            $result = mysqli_query ($conn , $query);
    
    ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
    <div> 
        <header>
            <nav>
                <div class="logoName">
                    <h3 class="dash-text">ZOOPARC ZOOLOGICAL PARK DASHBOARD </h3>
                </div>
            
            </nav>
        </header>
        <section>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Event_Name</th>
                    <th>Description</th>
                    <th>Delete</th>
                </tr>
                <?php
        while($record = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $record ['ID'];?></td>
                    <td><?php echo $record ['Event_Name'];?></td>
                    <td><?php echo $record ['Discription'];?></td>
                    <td><a href="deleteevent.php?id=<?php echo $record["ID"];?>">Delete</a></td>
                    
                </tr>
        <?php
        }
        ?>
            </table>
        </section>
        <section class="update-delete">
            <ul>
                <li>
                    <div class="add-Event">
                        <div>
                            <h2>ADD A EVENT</h2>
                        </div>
                        <form action="addevent.php" method="post" class="adminPanel-form">
                            <!-- <label for="id">id:</label>
                            <br>
                            <input type="text" name="id">
                            <br> -->
                            <label for="EventName">Event Name :</label>
                            <br>
                            <input type="text" name="EventName" id="EventName" placeholder="Event Name">
                            <br>
                            <!-- <label for="date">Date :</label>
                            <br>
                            <input type="date" name="date" id="date" placeholder="Enter a date">
                            <br>
                            <label for="time">Time :</label>
                            <br>
                            <input type="time" name="time" id="time" placeholder="Enter a time">
                            <br> -->
                            <label for="description">Description :</label>
                            <br>
                            <textarea name="description" id="description" cols="30" rows="3" placeholder="Description"></textarea>
                            <br><br>
                            <button type="submit" class="hero-btn blue-btn">Add Events</button>
                            <br><br>
                            
                            <button type="reset" class="hero-btn blue-btn">Reset</button>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="update-Event">
                        <div>
                            <h2>UPDATE A EVENT</h2>
                        </div>
                        <form action="updateevent.php" method = "post" class="adminPanel-form">
                            <label for="id">ID :</label>
                            <br>
                            <input type="text" name="id" id="id" placeholder="ID">
                            <br>
                            <label for="EventName">Event Name :</label>
                            <br>
                            <input type="text" name="EventName" id="EventName" placeholder="Event Name">
                            <br>
                            <!-- <label for="date">Date :</label>
                            <br>
                            <input type="date" name="date" id="date" placeholder="Enter a date">
                            <br>
                            <label for="time">Time :</label>
                            <br>
                            <input type="time" name="time" id="time" placeholder="Enter a time">
                            <br> -->
                            <label for="description">Description :</label>
                            <br>
                            <input type="text" name="description" id="description" placeholder="Description">
                            <br><br>
                            <button type="submit" class="hero-btn blue-btn" name ="submit">Submit Event</button>
                            <br><br>
                            <button type="reset" class="hero-btn blue-btn">Reset Events</button>
                        </form>
                    </div>
                </li>
            </ul>
        </section>
    </div>

 
</body>
</html>
