<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <form method="POST" action="/feedback">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>

        <label for="feedback">Feedback:</label>
        <div>
            <textarea id="message" name="message"></textarea>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>

    </form>
</body>
</html>
