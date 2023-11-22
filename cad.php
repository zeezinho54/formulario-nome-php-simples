<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h1>resultado</h1>
    </header>



    <main>

    <?php 
    

    
      
       $n = $_GET ["nome"] ?? "sem nome";
      $s = $_GET ["sobrenome"] ?? "sem sobrenome";
     echo "é um prazer te conhecer $n $s"; 


      
    ?>
    <a href="javascript:history.go(-1)">voltar a pagina anterior </a>
    </main>
</body>
</html>