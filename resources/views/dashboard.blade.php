<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Dashboard Page</h1>
        <h2>Welcome {{session ('username')}}</h2>
        <a href='/logout'>Logout</a>
    </body>
</html>