<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samtex solutions</title>
    <link rel="icon" type="image/x-icon" href="samtex.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>  
    <header>
        <div class="top">
            <img src="samtex.png" alt="samtex-logo" width="150" height="50" style="background-color: black;">
            <div class="top-contents">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" id="drop-name" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" id="drop-name" data-bs-toggle="dropdown" aria-expanded="false">
                            Usecases
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark next-dropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <button class="top-rest">Company</button>
                    <button class="top-rest">Contacts</button>
            </div>
            <button class="user-info">Users</button>
        </div>
    </header>
    <main>
        <section>
            <div>
                <div class="section-block">
                    <h1>Accelerate Test.<br>Accelerate Progress.</h1>
                    <div class="dashboard">
                        <div class="box">
                            <h3>SPEED</h3>
                            <p id="speed">0</p><span>km/h</span>
                        </div>
                        <div class="box"><h3>RPM</h3><p id="rpm">0</p><span>k</span></div>
                        <div class="box"><h3>GEAR</h3><p id="gear">N</p></div>
                        <div class="box"><h3>ECU TEMP</h3><p id="temp">0</p><span>°C</span></div>
                    </div>
                </div>
        </section>
    </main>
    <section class="car-section">
        <div class="car_left_content">
            <p>
                Engineering teams rely on Nominal to execute tests,
                analyze results in real time, collaborate across disciplines,
                and deliver resilient hardware in days, not months
            </p>
            <button>Request Demo</button>
        </div>
        <div class="car-image">
            <img src="#" alt="F1 car">
        </div>
        <div>
            <div>Data sources</div>
            <div><img src="#" alt="Map data"></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>