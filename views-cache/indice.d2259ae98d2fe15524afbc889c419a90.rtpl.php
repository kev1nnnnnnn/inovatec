<?php if(!class_exists('Rain\Tpl')){exit;}?>
    
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(atual)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Relatórios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrações
            </a>
          </li>
        </ul>
      </div>
    </nav>
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Compartilhar</button>
            <button class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
           Este ano
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      </div>
    </main>

    <h2>Clientes</h2>
    <div class="table-responsive">
      <table class="table text-darktable-striped"style="font-size:12px; font-family: verdana">
        <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>		
          <th>Sobrenome</th>					  					
          <th>Grau escolaridade</th>
          <th>Idade</th>				
          <th>Sofreu algum ataque virtual durante a pandemia do COVID-19?</th>				
          <th>Sofreu alguma perda de dados?</th>				
          <th>Houve acesso à informações pessoais tais como dados de identidade, telefone, nº de cartões de crédito, endereço ou outros?</th>				
        </tr>
        </thead>
        <tbody>
        <?php $counter1=-1;  if( isset($quest) && ( is_array($quest) || $quest instanceof Traversable ) && sizeof($quest) ) foreach( $quest as $key1 => $value1 ){ $counter1++; ?>
        <tr>
          <td><?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["desnome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["dessobrenome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["desgrau"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["desidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["quest1"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["quest3"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["quest3"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        </tr>
        <?php } ?>
          </tbody>
      </table>
  </div>
</div>
    
  <!-- Principal JavaScript do Bootstrap
  ================================================== -->
  <!-- Foi colocado no final para a página carregar mais rápido -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/jquery-3.5.0.min.js"></script>

  <!-- Ícones -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>

  <!-- Gráficos -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro","Dezembro"],
        datasets: [{
          data: [30000, 30000, 20000, 10000, 5000, 1000, 100],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>

</body>
</html>