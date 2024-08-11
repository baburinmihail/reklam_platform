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
    <link href="assets/price_list/css/bootstrap.min.css" rel="stylesheet">

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

    
    <!-- Custom styles for this template -->
    <link href="assets/price_list/css/pricing.css" rel="stylesheet">
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
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">SF-AdTech</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" >Логин:{{ session('username') }} </a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/zakaz/create">Создать новый заказ</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/exit">Выход</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Заказы </h1>
      <p class="fs-5 text-muted">На данной платформе вы можете оставить свои рекламные заказы , или принять уже созданный заказ . Для возможности размещения ссылки рекламодателя на своем ресурсе, на зарание оговоренных условиях в заказе. </p>
    </div>
  </header>
  @if (session('success'))
  <h5><i class="icon fa fa-check"></i>{{ session('success') }}</h5>
  @endif

  <main>
    <div  class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      @foreach ($zakaz as $zakaz_blade)
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{ $zakaz_blade['name_project'] }}</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">₽{{ $zakaz_blade['price_project'] }}<small class="text-muted fw-light">/за переход</small></h2>
            <!-----------Для рекламщика----------------------------------------------->
            @if((session('group') === 'reklamodatel'))
              <ul class="list-unstyled mt-3 mb-4">
                <li>Тематика: {{ $zakaz_blade['topic_project'] }}</li>
                <li id="li_status_{{ $zakaz_blade['id'] }}">Статус: {{ $zakaz_blade['status'] }}</li>
                <li style="display: none">ID_USER: {{ $zakaz_blade['user_id'] }}</li>
                <li>Описание: {{ $zakaz_blade['descripthion_project'] }}</li>
                @php 
                  $rashod = 0;
                  $subs = 0;
                @endphp
                @foreach ($my_price as $price)
                  @if($price->id_zakaz === $zakaz_blade['id'])
                    @php 
                      $rashod = $rashod + $price->income;
                    @endphp
                  @endif 
                @endforeach
                <li>Расход: {{ $rashod }}</li>
                @foreach ($subscribe as $my_subscribe)
                  @if($my_subscribe['zakaz_id'] === $zakaz_blade['id'])
                    @php 
                      $subs = $subs + 1;
                    @endphp
                  @endif 
                @endforeach
                <li>Кол-во подписщиков: {{ $subs }}</li>
                <li><a href="{{ route('statistick.edit' , $zakaz_blade['id']) }}">Доходы/расходы заказа</a></li>
              </ul>
              <form class="status_edit_ajax"  name="status_edit" action="/status_edit" method="post">
                <input style="display: none" class="first" type="text" class="" name="status_id" id="status_id_{{ $zakaz_blade['id'] }}" value=" {{ $zakaz_blade['id'] }} " >
                <input style="display: none" class="second" type="text" class="" name="status_in" id="status_in_{{ $zakaz_blade['id'] }}" value=" {{ $zakaz_blade['status'] }}" >
                @csrf
                <button type="submit" id="bt_status"  class="w-100 btn btn-lg btn-outline-primary" >Изменить статус</button>
              </form>
              <button type="button"  class="w-100 btn btn-outline-info"  onclick="window.location.href = '{{ route('zakaz.edit' , $zakaz_blade['id']) }}';">Редактировать</button>
              <form action="{{ route('zakaz.destroy' , $zakaz_blade['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"  class="w-100 btn btn-outline-danger"  onclick="window.location.href = '#">Удалить</button>
              </form>
            @endif
            <!------------------Для промоутера--------------------------------------------->
            @if((session('group') === 'promouter'))
            <ul class="list-unstyled mt-3 mb-4">
              <li>Тематика: {{ $zakaz_blade['topic_project'] }}</li>
              <!--<li>Cсылка: {{ $zakaz_blade['url_project'] }}</li>-->
                @php 
                  $subScrube = 0;
                  $id_counter = 0;
                @endphp
              @foreach ($you_zakaz as $you_zakazs)
                @if($you_zakazs['zakaz_id'] === $zakaz_blade['id'])
                  <a href="{{route('link_redirect', ['id_zakaz' => $you_zakazs['zakaz_id'], 'id_counter' => $you_zakazs['id']])}}"> моя ссылка</a>
                  @php 
                    $subScrube = 1;
                    $id_counter = $you_zakazs['id']
                  @endphp
                @endif 
              @endforeach
              <li id="li_status_{{ $zakaz_blade['id'] }}">Статус: {{ $zakaz_blade['status'] }}</li>
              <li>ID_USER: {{ $zakaz_blade['user_id'] }}</li>
              <li>Описание: {{ $zakaz_blade['descripthion_project'] }}</li>
              @php 
                $dochod = 0;
              @endphp
              @foreach ($my_price as $price)
                @if($price->id_zakaz === $zakaz_blade['id'])
                  @php 
                    $dochod = $dochod + $price->expenses;
                  @endphp
                @endif 
              @endforeach
              <li>Доход: {{ $dochod }}</li>
            </ul>
              @if($subScrube === 1)
                <form id="my_count_delit"  name="my_count_delit" action="/my_count_delit" method="post">
                  @csrf
                  <input style="display: none" type="text" class="" name="id_counter_delit" id="id_counter_delit" value=" {{ $id_counter }} " >
                  <button type="submit" id="bt_status"  class="w-100 btn btn-lg btn-outline-danger"  >Отписаться</button>
                </form> 
              @endif
              @if($subScrube === 0)
                <form id="my_count_add"  name="my_count_add" action="/my_count_add" method="post">
                  @csrf
                  <input style="display: none" type="text" class="" name="reklamodatel_id" id="reklamodatel_id" value=" {{ $zakaz_blade['user_id'] }} " >
                  <input style="display: none" type="text" class="" name="zakaz_id" id="zakaz_id" value=" {{ $zakaz_blade['id'] }} " >
                  <input style="display: none" class="first" type="text" class="" name="status_id" id="status_id_{{ $zakaz_blade['id'] }}" value=" {{ $zakaz_blade['id'] }} " >
                  <input style="display: none" class="second" type="text" class="" name="status_in" id="status_in_{{ $zakaz_blade['id'] }}" value=" {{ $zakaz_blade['status'] }}" >
                  <button type="submit" id="bt_status"  class="w-100 btn btn-lg btn-outline-success" >Подписаться</button>
                </form> 
              @endif
            @endif  
          </div>
        </div>
      </div>  
      @endforeach
    </div>
    <div class="table-responsive">
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="assets/price_list/logo/bootstrap-logo.svg" alt="" width="24" height="19">     
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
<script type="text/javascript">
  const ws = new WebSocket('ws://localhost:2346');

  $('.status_edit_ajax').on('submit',function(event){
    event.preventDefault();

    let id = event.target.querySelector('.first').value
    let status = event.target.querySelector('.second').value
    webSocket_status (id , status)

    $.ajax({
      url: "/status_edit",
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        status:status,
        id:id
      },
      success:function(response){
        console.log(response);
      },
      }); 

    });

  //вебсокет отправка  
  function webSocket_status (id , status) {

    let myValue = {
      "id" : id,
      "status" : status
    }
    ws.send(JSON.stringify(myValue));   
  }

  //вебсокет принятие  
  ws.onmessage = response => {
    let myValue = JSON.parse(response.data);
    let key = Object.keys(myValue);

    let id = myValue[key[0]];
    let status = myValue[key[1]];

    //убираю лишние пробелы
    var separator = " ";
    let str = id;
    let arrayOfStrings = str.split(separator);
    let myId = arrayOfStrings[1]



    let old_status = document.querySelector("#status_in_"+myId).value
    let li_old_status = document.querySelector("#li_status_"+myId).text


    
    if (old_status == 0){
      document.querySelector("#status_in_"+myId).value = 1;
      document.querySelector("#li_status_"+myId).innerHTML ="Статус: Активен";
    }else{
      document.querySelector("#status_in_"+myId).value = 0;
      document.querySelector("#li_status_"+myId).innerHTML = "Статус: Не активен";
    }
    

  }



</script>
</body>

</html>

