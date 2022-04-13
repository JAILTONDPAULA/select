<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/_selectCustom.min.css">
    <link rel="stylesheet" href="_css/_select.min.css">
</head>
<body>
    <form>
        <h1>SELECT CUSTOM</h1>
        <!-- code -->
        <label class="select">
            SELECT OPTION<br>
            <input type="text" autocomplete="off" class="customSelec" required>
            <input type="hidden" name="nmExemplo2">
            <div class="modalSelect">
                <section>
                    <svg viewBox="0 0 24 24" width="1rem" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                    <h3>NAME SELECT</h3>
                    <div>
                        <option value=""></option>
                        <option value="1">OPÇÃO 1</option>
                        <option value="2">OPÇÃO 2</option>
                        <option value="3">OPÇÃO 3</option>
                        <option value="4">OPÇÃO 4</option>
                        <option value="5">OPÇÃO 5</option>
                        <option value="6">OPÇÃO 6</option>
                        <option value="7">OPÇÃO 7</option>
                        <option value="8">OPÇÃO 8</option>
                        <option value="9">OPÇÃO 9</option>
                        <option value="10">OPÇÃO 10</option>
                    </div>
                </section>
            </div>
        </label>
        <!-- code -->
    <br>
    <button type="submit">ENVIAR</button>
    </form>
</body>
<script src="_js/jQuery_v3.5.1.js"></script>
<script src="_js/_select.js"></script>
</html>
