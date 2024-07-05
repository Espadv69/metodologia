<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NavBar</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                min-height: 200vh;
                font-family: Arial, sans-serif;
            }
            .navbar {
                position: fixed;
                top: 0;
                width: 100%;
                padding: 1rem;
                display: flex;
                justify-content: space-between;
                background-color: #121212;

                a {
                    text-decoration: none;
                    color: whitesmoke;
                    padding: 1rem;
                }

                .dropdown {
                position: relative;
                display: inline-block;

                    button {
                        cursor: pointer;
                        color: whitesmoke;
                        background: transparent;
                        padding: 1rem;
                        border: 2px solid whitesmoke;
                    }
                }
                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #121212;
                    min-width: 200px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }
                .dropdown-content a {
                    color: white;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }
                .dropdown-content a:hover {
                    background-color: black;
                }
                .show {
                    display: block;
                }
            }
    </style>
    </head>
    <body>
    <div class="navbar">   
        <div class="dropdown">
            <button onclick="toggleMenu()" class="dropbtn">Menú</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#link1">Link 1</a>
                <a href="#link2">Link 2</a>
                <a href="#link3">Link 3</a>
                <a href="#link3">Link 3</a>
            </div>
        </div>
        <a href="#">INICIO</a>
    </div> 
    <script>
        function toggleMenu() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                let dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    let openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    </body>
</html>