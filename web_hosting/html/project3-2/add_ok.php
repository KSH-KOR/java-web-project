<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
    >
</head>
<body>
<div class="container">
    <div class = "title">
        <h1>you just added the new word successfully! Thank you!</h1>
    </div>
    </div>
    <div class="card container" style="width: 50%;">
        <div class="card-body">
            <h5 class="card-title">단어: <?php echo $_GET["word"]; ?></h5>
            <h6 class="card-title">단어 뜻: <?php echo $_GET["wordMeaning"]; ?></h6>
            <p class="card-text"><추가 설명></p>
            <p class="card-text"><?php echo $_GET["extraExplanation"]; ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">카테고리: <?php echo $_GET["category"]; ?></li>
        </ul>
        <div class="card-body">
            <a class="btn active" href="index.html" class="card-link">Go back to the List</a>
            <a class="btn active" href="add.html" class="card-link">Add another Word</a>
        </div>
    </div>

</div>
</body>
</html>