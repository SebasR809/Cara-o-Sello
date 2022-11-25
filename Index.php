<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="Assets/css/index.css">
    <title>Cara o sello</title>
</head>
<body>
    <div class="scroll-down">
    <h1>CARA O SELLO</h1>
        Baja para empezar a Jugar
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
    <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/> 
    </svg></div>
    <div class="container"></div>
    <div class="modal">
    <div class="modal-container">
        <div class="modal-left">
        <h1 class="modal-title">¡Bienvenido!</h1>

        <form action="Controller/gameController.php" method="post">
            <p class="modal-desc">Digite las siguientes opciones</p>
            <!--<div class="">
                <label for="casual" class="input-label">Casual</label>
                    <input type="radio" name="mode" id="casual" value="casual" required>
                <label for="ranked" class="input-label">Ranked</label>
                    <input type="radio" name="mode" id="ranked" value="ranked" required>
            </div>-->

            <!--<div class="casual">
                <div class="input-block">
                    <label for="op" class="input-label">Escoja su opción</label>
                    <select name="op" id="op">
                        <option value="0">Cara</option>
                        <option value="1">Sello</option>
                    </select>
                </div>
            </div>-->

            <div class="ranked">
                <!--<div class="input-block">
                    <label class="input-label">Digite la cantidad de rondas que va a jugar</label>
                        <input type="number" name="" id="" placeholder="N° de rondas">
                </div>
                <div class="input-block">
                    <label class="input-label">Digite la cantidad de dinero que va a apostar</label>
                        <input type="text" name="" id="" placeholder="N° de rondas">
                </div>-->
                <div class="input-block">
                    <label for="op" class="input-label">Escoja su opción</label>
                    <select name="op" id="op    ">
                        <option value="0">Cara</option>
                        <option value="1">Sello</option>
                    </select>
                </div>
            </div>

            <div class="modal-buttons">
                <button type="submit" class="input-button">Jugar</button>
            </div>
        </form>
        </div>

        <div class="modal-right">
        <!--<img src="https://images3.alphacoders.com/997/997920.jpg" alt="">-->
        <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/03/18/640344/7133a3ca79225deccbdcf28cc63b5142-700.jpg" alt="" srcset="">
        </div>
        <!--<div class="input-block">
            <label for="email" class="input-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>-->
        <!--<p class="sign-up">Don't have an account? <a href="#">Sign up now</a></p>-->
        <!--<button class="icon-button close-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
        <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path></svg>
        </button>-->
    </div>
    <button class="modal-button">Juega Ahora</button>
    </div>
    <!-- partial -->
    <script  src="Assets/js/index.js"></script>
</body>
</html>