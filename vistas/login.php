<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AcerosMagno | Login <?php echo date("Y"); ?></title>

  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <style>
  :root {
    /* Paleta plomo + rojo */
    --plomo-900: #2b2f36;
    --plomo-700: #3f454e;
    --plomo-500: #6b7280;
    --plomo-300: #cbd0d6;
    --plomo-100: #f2f4f6;
    --rojo-600: #c62828;
    --rojo-500: #d32f2f;
    --rojo-400: #e53935;
  }

  body {
    background: linear-gradient(135deg, var(--plomo-900) 0%, var(--plomo-700) 100%);
    font-family: 'Roboto', sans-serif;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
  }

  .login-container {
    width: 100%;
    max-width: 450px;
    padding: 20px;
  }

  .login-card {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.35);
    padding: 40px;
    border-top: 4px solid var(--rojo-500);
  }

  .login-header {
    text-align: center;
    margin-bottom: 40px;
  }

  /* Logo en lugar del ícono */
  .login-logo {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 96px;
    height: 96px;
    margin-bottom: 16px;
    background: var(--plomo-100);
    border-radius: 50%;
    padding: 12px;
    box-shadow: inset 0 0 0 2px var(--plomo-300);
  }

  .login-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    display: block;
  }

  .login-header h1 {
    color: var(--plomo-900);
    font-size: 2.2rem;
    font-weight: 700;
    margin: 0;
    letter-spacing: -1px;
  }

  .login-header h1 span {
    color: var(--rojo-500);
  }

  .login-header p {
    color: var(--plomo-500);
    font-size: 1rem;
    margin-top: 10px;
  }

  .input-field input[type=text]:focus+label,
  .input-field input[type=password]:focus+label {
    color: var(--rojo-500) !important;
  }

  .input-field input[type=text]:focus,
  .input-field input[type=password]:focus {
    border-bottom: 2px solid var(--rojo-500) !important;
    box-shadow: 0 1px 0 0 var(--rojo-500) !important;
  }

  .input-field input[type=text],
  .input-field input[type=password] {
    border-bottom: 2px solid var(--plomo-300);
    transition: all 0.3s ease;
    color: var(--plomo-900);
  }

  .input-field input[type=text]:not(:focus):not(:placeholder-shown)+label,
  .input-field input[type=password]:not(:focus):not(:placeholder-shown)+label {
    color: var(--plomo-500);
  }

  .btn-login {
    background: linear-gradient(135deg, var(--plomo-700) 0%, var(--plomo-900) 100%);
    width: 100%;
    height: 50px;
    line-height: 50px;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
    transition: all 0.3s ease;
    margin-top: 20px;
    border-left: 4px solid var(--rojo-500);
  }

  .btn-login:hover {
    background: linear-gradient(135deg, var(--rojo-500) 0%, var(--rojo-600) 100%);
    box-shadow: 0 6px 20px rgba(198, 40, 40, 0.45);
    transform: translateY(-2px);
  }

  .input-field .prefix {
    color: var(--plomo-500);
  }

  .input-field .prefix.active {
    color: var(--rojo-500);
  }

  /* Validation styles */
  .invalid-feedback {
    color: var(--rojo-500);
    font-size: 0.8rem;
    margin-top: 5px;
    display: none;
  }

  .was-validated .invalid-feedback {
    display: block;
  }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <!-- LOGO (reemplaza la ruta por la tuya) -->
        <div class="login-logo">
          <img src="assets/img/logo.png" alt="Logo AcerosMagno">
        </div>
        <h1>Aceros<span>Magno</span></h1>
        <p>Sistema de Gestión</p>
      </div>

      <form method="post" class="needs-validation-login" novalidate>
        <!-- USUARIO DEL SISTEMA -->
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" id="loginUsuario" name="loginUsuario" required>
          <label for="loginUsuario">Usuario</label>
          <div class="invalid-feedback">Debe ingresar su usuario.</div>
        </div>

        <!-- CONTRASEÑA DEL USUARIO -->
        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <input type="password" id="loginPassword" name="loginPassword" required>
          <label for="loginPassword">Contraseña</label>
          <div class="invalid-feedback">Debe ingresar su contraseña.</div>
        </div>

        <!-- BOTON INGRESO AL SISTEMA -->
        <?php
        $login = new UsuarioControlador();
        $login->login();
        ?>

        <button type="submit" class="btn btn-login waves-effect waves-light">
          <i class="material-icons left">login</i>
          Iniciar Sesión
        </button>
      </form>
    </div>
  </div>

  <!-- Materialize JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <script>
  function fncSweetAlert(type, text, url) {
    switch (type) {
      case "error":
        if (url == null) {
          Swal.fire({ icon: "error", title: "Error", text: text });
        } else {
          Swal.fire({ icon: "error", title: "Error", text: text }).then((result) => {
            if (result.isConfirmed) window.location = url;
          });
        }
        break;
      case "success":
        if (url == null) {
          Swal.fire({ icon: "success", title: "Success", text: text });
        } else {
          Swal.fire({ icon: "success", title: "Confirmación", text: text }).then((result) => {
            if (result.isConfirmed) window.location = url;
          });
        }
        break;
    }
  }

  document.addEventListener('DOMContentLoaded', function() {
    var usernameField = document.getElementById('loginUsuario');
    if (usernameField) usernameField.focus();

    var form = document.querySelector('.needs-validation-login');
    form.addEventListener('submit', function(event) {
      var usuario = document.getElementById('loginUsuario').value.trim();
      var password = document.getElementById('loginPassword').value.trim();
      var isValid = true;

      form.querySelectorAll('.invalid-feedback').forEach(function(fb) {
        fb.style.display = 'none';
      });

      if (usuario === '') {
        document.querySelector('#loginUsuario + .invalid-feedback').style.display = 'block';
        isValid = false;
      }
      if (password === '') {
        document.querySelector('#loginPassword + .invalid-feedback').style.display = 'block';
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault();
        event.stopPropagation();
      }
    });
  });
  </script>
</body>

</html>