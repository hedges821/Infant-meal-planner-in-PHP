<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1.0">
            <style><?php include 'style.css'?></style>
        
            <!--<link rel="stylesheet" href="style.css" media="screen">
	
            <link rel="stylesheet" href="print.css" media="print">-->
        
        <title>Meal Planner</title>
                
    </head>
    <body>
        <header>
            <h1>Meal Planner</h1>
        </header>
        
                
        <h2>Available meals</h2>  

        <div class="row">
            <div class="column" style="background-color:#e9e972;">
                <h3>Breakfast</h3>
                <?php require 'foods.php';
                for($x = 0; $x < count($breakfastFoods); $x++)
                {
                    echo $breakfastFoods[$x][0];
                    echo "<br>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column" style="background-color:#d4bb62;">
                <h3>Lunch</h3>
                <?php require 'foods.php';
                for($x = 0; $x < count($lunchFoods); $x++)
                {
                    echo $lunchFoods[$x][0];
                    echo "<br>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column" style="background-color:#1181fc;">
                <h3>Snack</h3>
                <?php require 'foods.php';
                for($x = 0; $x < count($snackFoods); $x++)
                {
                    echo $snackFoods[$x][0];
                    echo "<br>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column" style="background-color:#4cefb9;">
                <h3>Dinner</h3>
                <?php require 'foods.php';
                for($x = 0; $x < count($dinnerFoods); $x++)
                {
                    echo $dinnerFoods[$x][0];
                    echo "<br>";
                }
                ?>
            </div>
        </div>
         
        <br>
        <br>
        <div class="sides" style="background-color:#86f994;">
    <h3>Sides</h3>
        <?php require 'foods.php';
        for($x = 0; $x < count($sideFoods); $x++)
            {
                echo $sideFoods[$x][0];
                echo "<br>";
            }
        ?>
        </div>
        
        <h2 class="clearFloat">A Generated Schedule</h2>
        
<table>
	<tr>
            <th></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        
        <?php require_once 'plannerFunctions.php';
        getPlan($breakfastFoods, "Breakfast");
        getPlan($lunchFoods, "Lunch");
        getPlan($snackFoods, "Snack");
        getPlan($dinnerFoods, "Dinner");
        ?>          
</table> 
        <button type="button">Just a useless button</button><br><br>
        
         
<!--<?php require_once 'sqltest.php'?>-->
        
<!--<?php require_once 'fetchRow.php'?>-->

        
    </body>
    <div class="footerNote">
    <?php include 'footer.php';?>
    </div>
</html>


