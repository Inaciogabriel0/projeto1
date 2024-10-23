<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="./resources/css/mizeraveis.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
</head>
<body>
  <nav class="green">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center"><i class="material-icons">grade</i>csa</a>
      <ul class="right hide-on-med-and-down">
        <li>
          <form>
            <div class="input-field" >
              <input id="search" type="search" required style="padding:15px; width:200px; margin-top:12px; border-radius:20px; position: relative; height:10px;"  >
              <label class="label-icon" for="search" style="padding: -5px;"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </li>
        <li><a href="badges.html"><i class="material-icons">admin_panel_settings</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">list</i></a></li>
      </ul>
    </div>
  </nav>

         @yield('conteudo')






         <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
