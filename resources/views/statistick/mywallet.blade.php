<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Pricing example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body id="myBody">
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/zakaz" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">SF-AdTech</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="/zakaz">Главная</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Статистика заказа</h1>
      <!--<p class="fs-5 text-muted">На данной платформе вы можете оставить свои рекламные заказы , или принять уже созданный заказ . Для возможности размещения ссылки рекламодателя на своем ресурсе, на зарание оговоренных условиях в заказе. </p>-->
    </div>
  </header>
  @if (session('success'))
  <h5><i class="icon fa fa-check"></i>{{ session('success') }}</h5>
  @endif

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <!-----------Для рекламщика----------------------------------------------->
    @if((session('group') === 'reklamodatel'))  
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Расходы за день</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['price_day'] }}<small class="text-muted fw-light"></small></h2>
            
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Расходы за месяц</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['price_month'] }}<small class="text-muted fw-light"></small></h2>
           
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Расходы за год</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['price_year'] }}<small class="text-muted fw-light"></small></h2>
          </div>
        </div>
      </div>

      
    @endif
          <!-----------Для Промоутера----------------------------------------------->
    @if((session('group') === 'promouter'))  
        <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Доходы за день</h4>
            </div>
            <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['price_day'] }}<small class="text-muted fw-light"></small></h2>
            
            </div>
        </div>
        </div>


        <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Доходы за месяц</h4>
            </div>
            <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['price_month'] }}<small class="text-muted fw-light"></small></h2>
            </div>
        </div>
        </div>

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Доходы за год</h4>
              </div>
              <div class="card-body">
                <h2 class="card-title pricing-card-title">{{ $my_wallet['price_year'] }}<small class="text-muted fw-light"></small></h2>
              </div>
            </div>
        </div>
    @endif


      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Кол-во переходов за день</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['count_day'] }}<small class="text-muted fw-light"></small></h2>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Кол-во переходов за месяц</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['count_month'] }}<small class="text-muted fw-light"></small></h2>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Кол-во переходов за год</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">{{ $my_wallet['count_year'] }}<small class="text-muted fw-light"></small></h2>
          </div>
        </div>
      </div>
      

    </div>


    <div class="table-responsive">
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2024</small>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">baburinmihail@yandex.ru</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
<!--
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</body>

</html>

