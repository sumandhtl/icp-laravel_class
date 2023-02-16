<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My 1st Form</title>
</head>
<body>

    <a href="{{ route('about') }}">Got to about page</a>

    <form method="get">

        <label>Full Name:</label>
        <input type="text" placeholder="Full Name" name="full_name" required>

        <input type="submit" value="Submit">

        <label>Gender</label>
        <select>
            <?php foreach ($data as $key => $value): ?>
                <option>{{ $value->name }}</option>
            <?php endforeach ?>
        </select>

        
    </form>

    

</body>
</html>