<?php 
   if(isset()){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            echo"aqui";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
<style>
section{
    width: 60%;
    margin-right: auto;
    margin-left: auto;
    margin-top: 30px;
    border: 1px solid royalblue;
    padding: 8px;
}

</style>
    
</head>

<body>
    <section >

        <form method="GET" name="exerc">
            <div class="mb-3">
                <label for="p1" class="form-label">Nota P1</label>
                <input type="text" class="form-control" id="p1" size="18">
               
            </div>
            <div class="mb-3">
                <label for="p2" class="form-label">Nota p2</label>
                <input type="text" class="form-control" id="p2">
                
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
              <button type="submit" class="btn btn-primary" name="enviar">Submit</button>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>

</body>

</html>