<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMALOG - Navbar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .navbar-nav .nav-link {
            color: #76ca6eff !important;
            font-weight: 500;
        }
        .navbar-nav .nav-link:hover {
            color: #009802 !important;
        }
        .btn-success {
            background-color: #009802; 
            border-color: #009802;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3" style="background-color: #F6EDD9;">
    <div class="container-fluid px-5"> 
            <img src="/img/logo1.png" alt="SIMALOG Logo" style="height: 40px;" class="d-inline-block align-text-top">   
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                
            <div class="navbar-nav mx-auto"> 
                <a class="nav-link fw-bold text-success" aria-current="page" href="/">Home</a>
                <a class="nav-link fw-bold text-success" href="/about">About</a>
            </div>
                <a href="/login" class="btn btn-success text-white">Login</a>
            </div>
            
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>