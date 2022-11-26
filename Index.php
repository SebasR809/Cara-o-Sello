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
                </div>-->
                <div class="input-block">
                    <label class="input-label">Digite la cantidad de dinero que va a apostar</label>
                        <input type="text" name="dinheiro" id="" placeholder="Cantidad de apuesta" required="">
                </div>
                <div class="input-block">
                    <label for="op" class="input-label">Escoja su opción</label>
                    <select name="op" id="op    ">
                        <option value="0">Cara</option>
                        <option value="1">Sello</option>
                    </select>
                </div>
                <input type="hidden" name="cuenta" value="0">
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
    </div>
    <button class="modal-button">Juega Ahora</button>
    </div>
    <script  src="Assets/js/index.js"></script>
</body>
</html>