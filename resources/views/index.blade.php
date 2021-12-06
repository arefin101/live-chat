
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Chat</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="app">
        <header>
            <h1>Let's Talk<span> &nbsp &nbsp &nbsp &nbsp &nbsp <a href="http://127.0.0.1:8000/" class="btn btn-primary">Back</a></span></h1>
            <input type="text" name="username" id="username" placeholder="Please enter a username...">
        </header>

        <div id="messages">
        </div>

        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message...">
            <button type="submit" id="message_send">Send Message</button>
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>