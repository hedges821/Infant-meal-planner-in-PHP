<?php require 'foods.php';
function getPlan($mealPlan, $mealTime)
{
    $monday = $tuesday = $wednesday = $thursday = $friday = 0;
            
    $monday = rand(0, count($mealPlan) - 1);
            
    do
    {
        $tuesday = rand(0, count($mealPlan) - 1);
    }while ($monday == $tuesday);
            
    do
    {
    $wednesday = rand(0, count($mealPlan) - 1);
    }while ($wednesday == $monday || $wednesday == $tuesday);
            
    $thursday = $monday;
    $friday = $tuesday;
            
    echo "<tr>";
    echo "<td>";
    echo $mealTime;
    echo "</td>";
    echo "<td>";
    echo $mealPlan[$monday][0];
    echo "</td>";
    echo "<td>";
    echo $mealPlan[$tuesday][0];
    echo "</td>";
    echo "<td>";
    echo $mealPlan[$wednesday][0];
    echo "</td>";
    echo "<td>";
    echo $mealPlan[$thursday][0];
    echo "</td>";
    echo "<td>";
    echo $mealPlan[$friday][0];
    echo "</td>";
    echo "</tr>";
}
?>
