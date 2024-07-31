<link rel="stylesheet" href="../css/style_navbar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="nav">
    <div class="nav__container">

    
        <h1 class="nav__title"><img src="../img/logo.png" alt="" width="100px"></h1>
    
        <a href="#menu" class="nav__menu">
            <img src="../assets/menu.svg" class="nav__icon">
        </a>
    
        <a href="#" class="nav__menu nav__menu--second">
            <img src="../assets/close.svg" class="nav__icon ">
        </a>

        <ul class="dropdown" id="menu">
            <li class="dropdown__list">
                <a href="./home.php" class="dropdown__link">
                    <img src="../assets/house.svg" class="dropdown__icon">
                    <span class="dropdown__span">Inicio</span>
                </a>
            </li>



            <li class="dropdown__list">

                <a href="" class="dropdown__link">
                    <img src="../assets/projects.svg" class="dropdown__icon">
                    <span class="dropdown__span">Cliente</span>
                    <img src="../assets/down.svg" class="dropdown__arrow">
                    <input type="checkbox" class="dropdown__check">
                </a>


                <div class="dropdown__content">
                    <ul class="dropdown__sub">

                        <li class="dropdown__li">
                            <a href="./imm.php" class="dropdown__anchor">Indice Masa Muscular</a>
                        </li>

                        <li class="dropdown__li">
                            <a href="./imc.php" class="dropdown__anchor">Indice Masa Corporal</a>
                        </li>

                    </ul>
                </div>

            </li>

            <li class="dropdown__list">

                <a href="" class="dropdown__link">
                    <img src="../assets/projects.svg" class="dropdown__icon">
                    <span class="dropdown__span">Entrenador</span>
                    <img src="../assets/down.svg" class="dropdown__arrow">
                    <input type="checkbox" class="dropdown__check">
                </a>
                        

                <div class="dropdown__content">
                    <ul class="dropdown__sub">

                        <li class="dropdown__li">
                            <a href="./calendario.php" class="dropdown__anchor">Calendario</a>
                        </li>

                        <li class="dropdown__li">
                            <a href="./ejercicios-f.php" class="dropdown__anchor">Ejercicios de fuerza</a>
                        </li>

                        <li class="dropdown__li">
                            <a href="./ejercicios-r.php" class="dropdown__anchor">Ejercicios de resistencia</a>
                        </li>

                    </ul>
                </div>

            </li>

            <li class="dropdown__list">
                <a href="" class="dropdown__link">
                    <img src="../assets/help.svg" class="dropdown__icon">
                    <span class="dropdown__span">Ayuda</span>
                </a>
            </li>
        </ul>

    </div>
</nav>