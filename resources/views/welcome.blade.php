<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My 1st Form</title>
</head>
<body>

    <a href="{{ route('about') }}">Got to about page</a>

    <form method="post" action="{{ route('student.store') }}">
        {{ csrf_field() }}

        <label>Full Name:</label>
        <input type="text" placeholder="Full Name" name="full_name" required>


        <label>Gender</label>
        <select name="gender">
            <?php foreach ($data as $key => $value): ?>
                <option value="{{ $value->id }}">{{ $value->name }}</option>
            <?php endforeach ?>
        </select>

        <input type="submit" value="Submit">
        
    </form>

    

</body>
</html>