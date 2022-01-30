<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Linkedin URL Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color: blanchedalmond;">

    <ul class="nav justify-content-end" style="height: 80px;color: white;background-color: black;">
        <li class="nav-item" style="margin-block-start: 20px;">
            <a class="nav-link active" aria-current="page" href="#"
                style="color: white;margin-block-start: -18px;margin-inline-end: 479px;font-size: 40px;">LINKEDIN
                ACCOUNT FINDER</a>
        </li>
    </ul>
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">URL GENERATED</h1>
            <p class="lead">Click the link below to go to your linkedin profile<br>
                <a
                    href="https://www.linkedin.com/in/<?php echo basename($_POST["usremail"], "@gmail.com")?>/">https://www.linkedin.com/in/<?php echo basename($_POST["usremail"], "@gmail.com")?>/</a>
            </p>
        </div>
    </main>


</body>

</html>
