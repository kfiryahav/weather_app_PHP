<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container wrapper p-4 rounded mt-4 col-4">
        <div class="d-flex justify-content-center">
            <form class="text-center mt-4 rounded">
                <h1 id="title text-light">Weather Forcast</h1>
                <div class="mb-3">
                    <input id="city" name="city" type="text" class="text-center form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your city">
                    <small id="small"></small>
                </div>
                <button class="btn btn-dark">Search</button>
            </form>
        </div>
        <div class="output justify-content-center text-center text-light mt-2">
            <h1 id="city_name" class="text-warning"></h1>
            <p id="country"></p>
            <div id="icon"></div>
            <h2 id="temp"></h2>
            <h3 id="description"></h3>
        </div>
    </div>

    <script src="./js/ajax.js"></script>
</body>

</html>