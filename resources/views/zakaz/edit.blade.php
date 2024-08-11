<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

      .container {
        max-width: 960px;
      }

    </style>

  </head>
  <body class="bg-light">
    
<div class="container">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span class="fs-4">SF-AdTech</span>
          </a>
    
          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="/zakaz">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/exit">Выйти</a>
          </nav>
        </div>
      </header>
  <main>
    <div class="py-5 text-center">
      <h2>Редактирование</h2>
    </div>

    <!--тарифы-->
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Стандартный тариф в рублях</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Стоимость перехода по ссылке</h6>
              <small class="text-muted">The cost of clicking on the link</small>
            </div>
            <span class="text-muted">1₽</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Комиссия площадки</h6>
              <small class="text-muted">The commission of the site</small>
            </div>
            <span class="text-muted">20%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Оплата веб-мастеров</h6>
              <small class="text-muted">Payment for webmasters</small>
            </div>
            <span class="text-muted">80%</span>
          </li>
        </ul>

        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Ваши условия в рублях</span>
            
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Стоимость перехода по ссылке</h6>
                <small class="text-muted">The cost of clicking on the link</small>
              </div>
              <span class="text-muted">1₽></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Комиссия площадки</h6>
                <small class="text-muted">The commission of the site</small>
              </div>
              <span class="text-muted">30%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Оплата веб-мастеров</h6>
                <small class="text-muted">Payment for webmasters</small>
              </div>
              <span class="text-muted">70%</span>
            </li>
          </ul>

      </div>

      <!--основная форма-->
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Форма редактирования заказа №{{ $zakaz['id'] }}</h4>
        @if (session('success'))
          <h5><i class="icon fa fa-check"></i>{{ session('success') }}</h5>
        @endif
        <form action="{{ route('zakaz.update', $zakaz['id']) }}" method="POST" class="needs-validation"  >
          @csrf
          @method('PUT')
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Name" class="form-label">Название</label>
              <input type="text" class="form-control" name="name_project" id="name_project" placeholder="котики убийцы" value="{{ $zakaz['name_project'] }}" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="TypeProject" class="form-label">Тематика</label>
              <input type="text" class="form-control" name="topic_project" id="topic_project" placeholder="домашнии животные" value="{{ $zakaz['topic_project'] }}" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="About_project" class="form-label">Описание проекта</label>
              <div class="input-group has-validation">
              <textarea  class="form-control" name="descripthion_project" id="descripthion_project"  placeholder="красивые и смертоносные животные" rows="3" required> {{ $zakaz['descripthion_project'] }}</textarea>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="form-label">URL проекта </label>
              <input type="text" class="form-control" name="url_project" id="url_project"  placeholder="https://ya.ru/" value="{{ $zakaz['url_project'] }}"  required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Стоимость тарифа в рублях</label>
              <input type="number" class="form-control" name="price_project" id="price_project" value="{{ $zakaz['price_project'] }}" placeholder="1" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div style="display: none" class="col-12">
              <label for="address" class="form-label">user_id</label>
              <input type="number" class="form-control" name="user_id" id="user_id" value="{{ $zakaz['user_id'] }}" placeholder="1" required>
            </div>

          </div>


          <hr class="my-4">


          <div class="row gy-3">

          </div>


          <button class="w-100 btn btn-primary btn-lg" type="submit">Обновить заказ</button>
        </form>
      </div>
      <!--основная форма конец-->
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2024</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
