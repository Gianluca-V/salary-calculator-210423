<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
       <a href="index.php"> <h1 class="title">SALARIO</h1> </a>
    </header>

    <form action="#" method="post">
        <div class="user-input">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required> 
        </div>

        <div class="salary-input">
            <label for="salary">salario:</label>
            <div class="input-radio-container">
                <div><input type="radio" name="salary" id="salary1" value="0-1000" required> <label for="salary1"> 0-1000 </label> </div>
                <div><input type="radio" name="salary" id="salary2" value="1001-3000" required> <label for="salary2"> 1001-3000 </label> </div>
                <div> <input type="radio" name="salary" id="salary3" value=">3000" required> <label for="salary3"> >3000 </label> </div>
            </div>
            
        </div>

        <input type="submit" value="Enviar" name="Enviar">
    </form>

    <?php
        if(isset($_POST["Enviar"])){
            if($_POST["salary"] == "0-1000") echo "<div class='echo'>".$_POST["username"].": No paga impuestos </div>";
            if($_POST["salary"] == "1001-3000") echo "<div class='echo'>".$_POST["username"].": Paga el 20% de impuestos</div>";
            if($_POST["salary"] == ">3000") echo "<div class='echo'>".$_POST["username"].": Paga el 50% de impuestos </div>";
        }
    ?>

    <footer></footer>
</body>
</html>