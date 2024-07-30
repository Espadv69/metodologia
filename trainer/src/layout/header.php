<link rel="stylesheet" href="../css/style_navbar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="nav">
    <div class="nav__container">

    
        <h1 class="nav__title">Espadv.</h1>
    
        <a href="#menu" class="nav__menu">
            <img src="../assets/menu.svg" class="nav__icon">
        </a>
    
        <a href="#" class="nav__menu nav__menu--second">
            <img src="../assets/close.svg" class="nav__icon ">
        </a>

        <ul class="dropdown" id="menu">
            <li class="dropdown__list">
                <a href="" class="dropdown__link">
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
                            <a href="#" class="dropdown__anchor">Proyecto1</a>
                        </li>

                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Proyecto2</a>
                        </li>

                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Proyecto3</a>
                        </li>

                    </ul>
                </div>

            </li>

            <li class="dropdown__list">

                <a href="" class="dropdown__link">
                    <img src="../assets/email.svg" class="dropdown__icon">
                    <span class="dropdown__span">Contacto</span>
                    <img src="../assets/down.svg" class="dropdown__arrow">
                    <input type="checkbox" class="dropdown__check">
                </a>
                        

                <div class="dropdown__content">
                    <ul class="dropdown__sub">

                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Contacto1</a>
                        </li>

                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Contacto2</a>
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