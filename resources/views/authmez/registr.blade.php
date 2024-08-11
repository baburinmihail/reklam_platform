<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

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

        html,
        body {
        height: 100%;
        }

        body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

        .form-signin .checkbox {
        font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }


      
    </style>

  </head>
  <body class="text-center"> 
    
    <main class="form-signin">
    <form action="{{ route('authmez.store') }}" method="POST">
      @csrf
        <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

        <div class="form-floating">
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
        <label for="floatingInput">Email адрес</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
          <label for="floatingInput">Имя пользователя</label>
          </div>
        <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <label for="floatingPassword">Пароль</label>
        </div>
        <div style="padding-bottom: 10px;" >
          <select class="form-select" name="group" id="group" aria-label="Default select example">
            <option selected value="reklamodatel">Рекламодатель</option>
            <option value="promouter">Промоутер</option>
            <option selected value="admin">admin</option>
          </select>
        </div>
        <label>
          <p><a href="/authmez" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Авторизоваться</a></p>
        </label>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
    </main>
  </body>
</html>
