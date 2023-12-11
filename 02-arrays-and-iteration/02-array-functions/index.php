<?php
$output = null;

// Creating two arrays
$ids = [15, 10, 32, 96, 45, 5];
$users = ['user1', 'user2', 'user4', 'user0'];


// array length
$output = count($ids);

// sorting an array
sort($ids);
sort($users);

// reverse short
rsort($ids);

// array push method for add some values last on array
array_push($ids, 555, 89,105, 85);

// array_pop method remove last item
array_pop($ids);

// array_shift method remove one value on first
array_shift($users);

// array_unshift method add first some values
array_unshift($users, 'New user', 'New', 'New 33');

// cut your array with array_slice() method
$ids2 = array_slice($ids, 3,3); // it's change your exits array
// var_dump($ids2);

// array_splice method for replace your array value
array_splice($ids, 2, 3, ['New Id', 'New Id 2', '10 replaced by 100']);


// array_sum
$output = array_sum($ids2);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>

            <!-- Show array -->
            <p class="text-xl">
                Ids Array
            <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>
            <p class="text-xl">
                Users Array
            <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>