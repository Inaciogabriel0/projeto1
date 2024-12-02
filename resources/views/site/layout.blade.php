<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS do Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      /* Barra de navegação com degradê */
      .green-gradient {
        background: linear-gradient(90deg, #4caf50, #2e7d32);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Adiciona sombra para destacar a barra */
        border-radius: 0 0 10px 10px; /* Bordas arredondadas na parte inferior */
      }
  
      .nav-wrapper {
        padding: 0 15px;
        height: 70px; /* Ajusta altura da barra */
      }
  
      /* Ícones e links */
      .nav-wrapper a i {
        font-size: 24px; /* Ícones maiores */
        transition: transform 0.3s ease; /* Animação ao passar o mouse */
      }
  
      .nav-wrapper a i:hover {
        transform: scale(1.2); /* Leve aumento ao passar o mouse */
      }
  
      .brand-logo {
        font-size: 28px;
        font-weight: bold;
        letter-spacing: 2px;
        display: flex;
        align-items: center;
        gap: 8px; /* Espaço entre ícone e texto */
      }
  
      /* Ícones no formulário */
      .input-field i {
        color: white;
      }
  
      /* Itens do menu */
      ul.right li a {
        color: white;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        margin-right: 10px;
      }
  
      ul.right li a:hover {
        color: #b9f6ca; /* Efeito hover */
      }
    </style>
    
</head>
<body>
 <!-- Barra de Navegação -->
 <nav class="green-gradient">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo center"><i class="material-icons">grade</i>csa</a>
    <ul class="right hide-on-med-and-down">
      <li>
        <form action="" method="GET" class="input-field" style="margin: 0 50px;">
          <i class="material-icons prefix">search</i>
          <input id="search" type="text" name="search" class="validate" value="{{ request('search') }}">
          <label for="search">procurar</label>
        </form>
      </li>
      <li><a href="badges.html"><i class="material-icons" style="color: white;">admin_panel_settings</i></a></li>
      <li><a href="collapsible.html"><i class="material-icons" style="color: white;">refresh</i></a></li>
      <!-- Botão para abrir o modal -->
      <li><a href="#modal1" class="modal-trigger"><i class="material-icons" style="color: white;">format_list_bulleted</i></a></li>
    </ul>
  </div>
</nav>
  <!-- Conteúdo principal -->
  @yield('conteudo')

  <!-- Modal Estrutura padrão do Materialize -->
  <!-- Modal Estrutura padrão do Materialize -->
  <div id="modal1" class="modal">
  <div class="modal-content">
    <h4>MENU</h4>
    <ul>
      <li>
        <a href="mobile.html">
          <i class="material-icons">account_circle</i>Perfil
        </a>
      </li>
      <li>
        <a href="mobile.html">
          <i class="material-icons">paid</i>pontos
        </a>
      </li>
      <li>
        <a href="mobile.html">
          <i class="material-icons">volunteer_activism</i>mudar doação
        </a>
      </li>
      <li>
        <a href="mobile.html">
          <i class="material-icons">group</i>ongs
        </a>
      </li>
      <li>
        <a href="mobile.html">
          <i class="material-icons">logout</i>Sair
        </a>
      </li>
    </ul>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat close-button">Fechar</a>
  </div>
</div>

<style>
  /* CSS personalizado para modal fino, retangular e verde */
  #modal1 {
      width: 25%; /* Define a largura do modal */
      top: 10%; /* Define a posição de altura */
      right: 0; /* Posiciona o modal no lado direito */
      left: auto; /* Remove o alinhamento à esquerda */
      transform: none; /* Remove a centralização padrão */
      position: fixed; /* Fixa o modal no lado direito */
      background-color: #2e7d32; /* Cor de fundo verde */
      color: white; /* Cor do texto em branco para contraste */
      border-radius: 8px; /* Bordas arredondadas */
      padding: 20px; /* Espaçamento interno */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra para destaque */
  }

  /* Remover o fundo do rodapé do modal */
  #modal1 .modal-footer {
      background-color: transparent; /* Fundo transparente para o rodapé */
      border-top: none; /* Remove a borda superior */
      padding: 0; /* Remove o padding para alinhar o botão */
      text-align: right; /* Alinha o botão à direita */
  }

  /* Estilo do botão 'Fechar' */
  #modal1 .modal-footer .btn-flat {
      color: white; /* Define a cor do texto do botão */
      padding: 0 10px; /* Ajuste do padding */
  }

  
</style>

<style>
  /* Estilizar título */
  #modal1 h4 {
    text-align: center;
    font-size: 26px;
    color: #ffffff;
    font-weight: bold;
    margin-bottom: 25px;
  }

  /* Estilo geral do menu */
  #modal1 ul {
    list-style-type: none;
    padding: 0;
  }

  #modal1 ul li {
    margin-bottom: 15px;
  }

  /* Estilo dos links do menu */
  #modal1 ul li a {
    display: flex;
    align-items: center;
    color: #e8f5e9;
    font-size: 20px;
    padding: 10px 0;
    transition: color 0.3s ease, transform 0.3s ease;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2); /* Linha divisória suave */
  }

  /* Remover linha do último item */
  #modal1 ul li:last-child a {
    border-bottom: none;
  }

  /* Estilo dos ícones */
  #modal1 ul li i {
    margin-right: 12px;
    font-size: 24px;
    color: #a5d6a7; /* Cor dos ícones */
  }

  /* Animação de hover */
  #modal1 ul li a:hover {
    color: #81c784;
    transform: translateX(5px); /* Animação sutil para a direita */
  }

  /* Estilizando o botão de fechar */
  .close-button {
    background-color: #66bb6a;
    color: #ffffff;
    font-weight: bold;
    border-radius: 20px;
    padding: 10px 20px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Sombras para efeito 3D */
  }

  .close-button:hover {
    background-color: #4caf50;
    transform: scale(1.1); /* Efeito de zoom mais pronunciado */
  }

  .close-button:active {
    transform: scale(0.95);
  }
</style>


  <!-- Compiled and minified JavaScript do Materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    // Inicialização do modal no estilo Materialize
    document.addEventListener('DOMContentLoaded', function() {
        var modals = document.querySelectorAll('.modal');
        M.Modal.init(modals);
    });
  </script>
</body>
</html>
