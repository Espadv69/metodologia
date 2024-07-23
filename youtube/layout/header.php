<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>

    <div class="all-nav-yt">
        <div style="display: flex; gap: 1rem; align-items: center;">
            <div class="menu-icon" id="menu-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <img src="./img/yt-black.png" alt="YouTube" width="100px">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button class="bi bi-search"></button>
        </div>
        <div class="icons">
            <a href="#"><i class="bi bi-bell"></i></a>
            <a href="#"><i class="bi bi-camera-video"></i></a>
            <a href="#" class="open-menu"><img src="./img/profile.jpg" alt="" width="26px" height="26px" style="border-radius: 100%;"></a>
        </div>
    </div>
    
    <div class="side-menu" id="side-menu">
        <div style="display: flex; justify-content: center; padding: 1rem 0;">
            <img src="./img/yt-black.png" alt="YouTube" width="150px">
        </div>
        <a href="http://localhost/metodologia/youtube/index.php"><i class="bi bi-house-fill"></i> Home</a>
        <a href="#"><i class="icon"></i> Shorts</a>
        <!-- Agregar más enlaces según sea necesario -->
    </div>

    <div id="myMenu" class="menu">
        <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
        <div class="menu-info">
            <img src="./img/profile.jpg" alt="">
            <div class="info">
                <div>
                    <h5>Espadv69</h5>
                    <p>@espadv._</p>
                </div>
                <a href="./usuario.php">ver mi canal</a>
            </div>
        </div>
    </div>


        <script src="./js/navbar.js"></script>
    </body>
</html>