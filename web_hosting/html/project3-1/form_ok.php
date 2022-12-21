<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .result{
            background-color: #f8f9fa;
        }
        .container{
            width: 80%;
            margin: auto;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .vehicle-list{
            padding-left: 3rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class = "title">
        <h1>Yay! Created your own character</h1>
    </div>
    <div class = "result">
        <div class="name d-flex">
            Name: <?php echo $_GET["firstname"]; ?> <?php echo $_GET["lastname"]; ?><br>
        </div>
        Phone number: <?php echo $_GET["phone"]; ?><br>
        Birthday: <?php echo $_GET["birthday"]; ?><br>
        gender: <?php echo $_GET["gender"]; ?><br>
        Vehicle:
        <div class="vehicle-list">
            <?php echo $_GET["vehicle1"]; ?><br>
            <?php echo $_GET["vehicle2"]; ?><br>
            <?php echo $_GET["vehicle3"]; ?><br>
        </div>
        Car brand: <?php echo $_GET["car_list"]; ?><br>
        Age: <?php echo $_GET["age"]; ?><br>
        Hair color: <?php echo $_GET["hair"]; ?><br>
        Eye color: <?php echo $_GET["eye"]; ?><br>
        Skin color: <?php echo $_GET["skin"]; ?><br>
        Background story: <?php echo $_GET["background-story"]; ?><br>


    </div>

</div>
</body>
</html>