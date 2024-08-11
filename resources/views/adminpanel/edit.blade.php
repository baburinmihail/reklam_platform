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
          <a href="/admin" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span class="fs-4">SF-AdTech</span>
          </a>
    
          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="/exit">Выйти</a>
          </nav>
        </div>
      </header>
  <main>
    <div class="py-5 text-center">
      <h2>Редактирование пользователя</h2>
    </div>


      <!--основная форма-->
      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Пользователь: {{ $user->username }}</h4>
        @if (session('success'))
          <h5><i class="icon fa fa-check"></i>{{ session('success') }}</h5>
        @endif
        <form action="{{ route('admin.update', $user->id) }}" method="POST" class="needs-validation"  >
          @csrf
          @method('PUT')
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Name" class="form-label">E-mail:</label>
              <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}"  required>
            </div>

            <div class="col-sm-6">
              <label for="TypeProject" class="form-label">Username:</label>
              <input type="text" class="form-control" name="username" id="username" value="{{ $user->username }}"   required>
            </div>


            <div class="col-12">
              <label class="form-label">Группа </label>
              <select class="form-select" name="group" id="group" aria-label="Default select example" required>
                <option selected value="{{ $user->group }}">{{ $user->group }}</option>
                <option value="reklamodatel">reklamodatel</option>
                <option value="promouter">promouter</option>
              </select>
            </div>

            <div style="display: none" class="col-12">
              <label class="form-label">id </label>
              <input type="text" class="form-control" name="myid" id="myid" value="{{ $user->id }}"   required>
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
