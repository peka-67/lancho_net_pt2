<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sideBar.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap');
  </style>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Document</title>
</head>

<body class="body">
  <div style="display:flex; flex-direction: row;" class="container-fluid">
    <div>
      <?php
      include './fragmentos/menulateral.php'
      ?>
    </div>
    <div
      style="max-height: 35vh; display: flex; flex-direction: row; gap: 3vw"
      class="container-fluid">
      <div class="container-fluid">
        <div style="gap: 3vw; display: flex; flex-direction: row;">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h5 class="card-title">Faturamento</h5>
              <p class="card-text">8.210,67 R$</p>
              <p class="card-text">+ 12.7% essa semana</p>
            </div>
          </div>
          <div>
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">Pedidos em preparo</h5>
                <p class="card-text">8</p>
                <p class="card-text">Atualizado agora</p>
              </div>
            </div>
          </div>
        </div>
        <div style="max-height: 35vh" class="container-fluid">
          <div class="card" style="width: 18rem">
            <div class="card-header">Pedidos</div>
            <div style="display: flex; flex-direction: row" class="container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">rodolfo</li>
                <li class="list-group-item">claudio</li>
                <li class="list-group-item">tamara</li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Em preparo</li>
                <li class="list-group-item">pronto</li>
                <li class="list-group-item">entregue</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>