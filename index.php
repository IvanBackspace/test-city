<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Города</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&amp;display=swap" rel="stylesheet">
</head>
    <body>
        <header id="header" class="header">
            <div class="contanier">
                <div>
                    <img class="img" src="img/img.png" alt="">
                </div>
                <div>
                    <a id="elem" class="popup_button" href="#popup">Выбор города</a>
                </div> 
                <div>
                    <a class="popup_button" href="#popup">GitHub</a>
                </div> 
            </div>   
        </header>
        <main class="main">
            <a class="main_text" id="text" href="#popup"></a>
        </main>    
        <div href="#" id="popup" class="popup">
            <a href="#" class="poup_area"></a>
            <div class="popup_body">
                <div class="popup_content">
                <a id="close_button" href="#" class="close">Х</a>
                    <div class="popup_title">Выберите ваш город</div> 
                    <div class="row">
                        <input type="text" id="filter-input" placeholder="Поиск" autocomplete="off" title="Поиск по городам">
                        <div id="filter-list">
                            <div class="list" id="list" ></div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer_main">
                
            </div>
        </footer>
    </body>
<script
    src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous">
</script>
<script src="script.js"></script>
</html>