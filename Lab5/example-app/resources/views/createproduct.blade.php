<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
<form method="POST" action="/showproduct">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="img">Image:</label>
        <input type="text" id="img" name="img">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>
</body>
</html>
