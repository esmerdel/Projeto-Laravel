<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <main class>
        <h3> Sistem de GESTÃO estoque - LOGIN</h3>
        <form action="/login" method="POST">
            @CSRF
            <div class="row">
                <div class="col">
                    <label for="email" class="form-label"> Informe o email</label>
                    <input id="email" name="email" class="form-control" type="text">
                </div>
                <div class="col">
                    <label for="password" class="form-label"> Informe a Senha</label>
                    <input id="password" name="password" class="form-control" type="password">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit"> Acessar </button>
                </div>
            </div> 
    </main>
  </body>
</html>