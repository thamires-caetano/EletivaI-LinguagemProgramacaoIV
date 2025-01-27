<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Alterar Produto</title>
  </head>
  <body>
      <?php require_once "barra_navegacao.php"; ?>
      <div class="container">
        <h1>Alterar Produto</h1>

        <form action="/produto/editar/<?= $params[1] ?>" method="post">
            <div class="row">
                <div class="col-5">
                    <label for="nome" class="label-control">
                        Informe o nome:
                    </label>
                    <input type="text" class="form-control"
                    name="nome" id="nome" value="<?= $resultado['nome'] ?>"/>
                </div>
                <div class="col-5">
                    <label for="descricao" class="label-control">
                        Informe a descricao:
                    </label>
                    <input type="text" class="form-control"
                    name="descricao" id="descricao" value="<?= $resultado['descricao'] ?>"/>
                </div>
                <div class="col-2">
                    <label for="valo" class="label-control">
                        Informe o valor:
                    </label>
                    <input type="number" class="form-control"
                            name="valor" id="valo" value="<?= $resultado['valo'] ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col mt-5">
                    <button type="submit" 
                            class="btn btn-primary">
                        Enviar
                        </button>
                </div>
            </div>

        </form>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>