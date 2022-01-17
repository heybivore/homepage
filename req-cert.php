<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1acd2c2806.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Luxurious+Script&family=Pacifico&family=Righteous&display=swap');
    </style>
</head>
<body class="bg-light">
    <header>
        <nav class="bg-white container-fluid py-1 text-center border-bottom shadow">
            <img class="me-1 d-inline" src="img/city-gov-davao-logo-2.jpg" alt="City Government of Davao Logo"  width="24px">
            <a href="home.php" class="align-middle d-inline h-name">CGDeS Portal</a>
            <ul class="p-0 mb-0">
                <li class="d-inline px-2 border-end border-3"><a href="#">optional</a></li>
                <li class="d-inline pe-2 ps-1 border-end border-3""><a href="#">menu</a></li>
                <li class="d-inline pe-2 ps-1"><a href="#">here</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-sm mt-4 p-0">
        <h1 class="lead fs-6">Kindly fill the form below.</h1>
    </div>
    <div class="bg-white border-light p-4 border-3 rounded-3 shadow container">
        <h2 class="text-center">Request Certification Form</h2>
        <form nonvalidate>
            <label for="certification" class="form-label mb-1">Certification</label>
            <select name="certification" id="certification" class="form-control mb-2">
                <option value="">Choose...</option>
                <option value="">cert 1</option>
                <option value="">cert 2</option>
            </select>
            <label for="office" class="form-label mb-1">Department/Office from</label>
            <select name="office" id="office" class="form-control mb-2">
                <option value="">Office...</option>
                <option value="">office 1</option>
                <option value="">office 2</option>
            </select>
            <hr class="my-4">
            <div class="row g-2">
                <div class="col">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="Ricardo">
                </div>
                <div class="col">
                    <label for="middleName" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" placeholder="Bagsik">
                </div>
                <div class="col">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Dalisay">
                </div>
                <div class="col-1">
                    <label for="extName" class="form-label">Ext.</label>
                    <input type="text" class="form-control" placeholder="Jr., III">
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>