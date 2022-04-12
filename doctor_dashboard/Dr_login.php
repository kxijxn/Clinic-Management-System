<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    
    <style>
    body{
        background-color: #F0F0F0;
    }
    </style>
</head>
<body>
<br><br><br><br><br>
<div class="container">
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card shadow bg-white rounded-6">
            <div class="card-body m-4">

                <div class="row">
                    <div class="text-center">
                        <h1 style="font-family: Rockwell;">Valley Clinic <i class="bi bi-heart-pulse-fill"></i></h1>
                        <h3 style="font-family: Rockwell;">Doctor Login</h3>
                    </div> 
                </div>
                
                <br>
                <div class="row">
                    <div class="container">
                        <div class="text-center">
                            <form method="POST" action="Dr_authentication.php">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-bounding-box"></i></span>
                                    <input type="text" class="form-control " id ="username" aria-describedby="username" name="username" placeholder="Username" required >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i class="bi bi-file-lock2-fill"></i></span>
                                    <input type="password" id="password" class="form-control" name="password"  placeholder="Password" required >
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="../PHP/index.php"><button class="btn btn-secondary" type="button">Back</button></a>
                                    <button type="submit" class="btn btn-info" id="button-register">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</body>
</html>