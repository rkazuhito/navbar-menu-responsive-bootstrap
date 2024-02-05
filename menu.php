<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .bg {
            background-color: blueviolet;
        }
        @media(max-width:768px) {
            .ul-bg {
                background-color: blue;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md bg">
    <div class="container">
        <a href="#" class="navbar-brand fs-3 ms-3 text-white">Cake Digital</a>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse ul-bg" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a href="#" class="nav-link mx-3 text-white fs-5">Porquê a Cake?</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mx-3 text-white fs-5">Service</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mx-3 text-white fs-5">News</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mx-4 text-white fs-5">Team</a>
                </li>
            </ul>
        </div>
        </div>
      </nav>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</body>
</html>