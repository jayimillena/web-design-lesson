<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
</head>

<body>
    <select name="year">
        <?php for ($year = 1970; $year <= 2025; $year++) { ?>
            <option value="<?php echo $year; ?>">
                <?php echo $year; ?>
            </option>
        <?php } ?>
    </select>
</body>

</html>
