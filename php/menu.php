<style>
  .ativado {
    background-color: rgba(255, 255, 255, .6);
  }

  .nav-link {
    color: white;
    border-radius: 20px;
  }

  .nav-link:hover {
    background-color: rgba(255, 255, 255, 1);
    color: green;
  }
  #principal {
        background-position: fixed;
        background-size: contain;
        background-size: cover;
    }
    .text-green{
      color: #003c00;
    }
    .btn-green{
        background-color: #003c00;
        border-radius: 20px;
        box-shadow: 2px 5px 5px #001400;
    }
    .btn-green:hover{
        background-color: #005000;
        box-shadow: 2px 5px 5px #003c00;
    }
</style>


<nav class="navbar bg-success ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Logo" width="150" height="120" class="d-inline-block align-text-top rounded-4">
    </a>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Nossa Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="postes.php">Postes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cabos.php">Cabos Elétricos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato.php">Entre em Contato</a>
      </li>
    </ul>
  </div>
</nav>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Obtém a URL da página atual
    var url = window.location.href;

    // Obtém todos os links na barra de navegação
    var links = document.querySelectorAll(".nav-link");

    // Itera sobre os links para verificar se a URL corresponde
    links.forEach(function (link) {
      if (url.indexOf(link.getAttribute("href")) !== -1) {
        // Se a URL contiver o atributo href do link, adiciona a classe "ativado"
        link.classList.add("ativado");
      }
    });
  });
</script>