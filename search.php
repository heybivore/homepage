<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>DCGS Portal</title>
</head>
<body>
    <header>
        <img class="img-logo" src="icons/doc-search.png" alt="">
        <a href="#" class="logo">DocTrack</a>
        <span id="Davao_City_z42c" style="font-size:14px;color:white"></span>
        <script src="//widget.time.is/en.js"></script>
        <script>
            time_is_widget.init({Davao_City_z42c:{template:"DATE TIME ", time_format:"12hours:minutes:seconds AMPM", date_format:"monthname daynum, year"}});
        </script>&nbsp;&nbsp;🇵🇭
    </header>
    <!--<main>
        <section class="index-text">
            <div class="vert-center">
                <h2>Where do you want to go?</h2>
            </div>
        </section>
        <div class="wrapper">
            <section class="index-links">
                <a href="#">
                    <div class="index-button">
                        <img class="img-icon" src="icons/doc-search.png" alt="Search for a document...">
                        <h1>Document Search</h1>
                    </div>
                </a>
                <a href="#">
                    <div class="index-button">
                        <img class="img-icon" src="icons/request-cert.png" alt="Request a certification...">
                        <h1>Request Certification</h1>
                    </div>
                </a>
                <a href="#">
                    <div class="index-button">
                        <img class="img-icon" src="icons/submit-a-doc.png" alt="Submit a document...">
                        <h1>Submit Document</h1>
                    </div>
                </a>
            </section>
        </div>
    </main>-->
    <footer>
        <p>Copyrights chuchu and stuffs</p>
    </footer>
</body>
<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>
</html>