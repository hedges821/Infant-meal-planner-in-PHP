<?php

$fruit = "fruit";
$vegetable = "vegetable";
$protein = "protein";
$grain = "grain";
$starch = "starch";

// [0=food][1=type][2=serving amount]
$breakfastFoods = array(
    array("Egg Cups", $protein, 1),
    array("Oat Meal", $grain, 1),
    array("Broccoli Cheese Muffin", $vegetable, 1),
    array("Applesauce and Peanut Butter", $fruit, 1),
    array("Avocado", $fruit, 1),
    array("Scrambled Egg", $protein, 1),
);
$lunchFoods = array(
    array("Celery Soup", $vegetable),
    array("Cocunut Curry Carrot Soup", $vegetable),
    array("Beef Stew", $protein),
    array("Spinach and White Bean", $vegetable),
    array("Yogurt", $protein),
    array("Cinnamon Carrots", $vegetable),
    array("Garlic Cumin Sweet Potatoes", $vegetable),
    array("Peas Broccoli and Cheese Soup", $vegetable),
);
$snackFoods = array(
    array("Peaches", $fruit),
    array("Yogurt", $protein),
    array("Applesauce and Peanut Butter", $fruit),
    array("Guac", $fruit),
    array("Sweet Potato and Banana", $vegetable),
);
$dinnerFoods = array(
    array("Squash and Lentils", $vegetable),
    array("Turkey Meatballs", $protein),
    array("Salmon with Lemon and Parsley", $protein),
    array("Poached Chicken", $protein),
    array("Very Veggie Sauce", $vegetable),
);
$sideFoods = array(
    array("Roasted Zucchini", $vegetable),
    array("Corn", $vegetable),
    array("Mashed Broccoli Carrots and Potatoes", $vegetable),
    array("Rice", $grain),
    array("Banana", $fruit),
    array("Blueberries", $fruit),
    array("Pasta", $starch),
);



//Associative Array
/*
$breakfastFoods = array(
    "Egg Cups" => $protein,
    "Oat Meal" => $grain,
    "Broccoli Cheese Muffin" => $vegetable,
    "Applesauce and Peanut Butter" => $fruit,
    "Avocado" => $fruit,
);
$lunchFoods = array(
    "Celery Soup" => $vegetable,
    "Cocunut Curry Carrot Soup" => $vegetable,
    "Beef Stew" => $protein,
    "Spinach and White Bean" => $vegetable,
    "Yogurt" => $protein,
    "Cinnamon Carrots" => $vegetable,
    "Garlic Cumin Sweet Potatoes" => $vegetable,
    "Peas Broccoli and Cheese Soup" => $vegetable,
);
$snackFoods = array(
    "Peaches" => $fruit,
    "Yogurt" => $protein,
    "Applesauce and Peanut Butter" => $fruit,
    "Guac" => $fruit,
    "Sweet Potato and Banana" => $vegetable,
);
$dinnerFoods = array(
    "Squash and Lentils" => $vegetable,
    "Turkey Meatballs" => $protein,
    "Salmon with Lemon and Parsley" => $protein,
    "Poached Chicken" => $protein,
);
$sideFoods = array(
    "Roasted Zucchini" => $vegetable,
    "Corn" => $vegetable,
    "Mashed Broccoli Carrots and Potatoes" => $vegetable,
    "Rice" => $grain,
    "Banana" => $fruit,
    "Blueberries" => $fruit,
);*/

?>

