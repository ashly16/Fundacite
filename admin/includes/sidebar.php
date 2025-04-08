<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

    <div class="wrapper">
        <!-- Sidebar -->
            <div class="sidebar">
        <!-- Logo -->
                <div class="sidebar-logo">
                    <img id="sidebar-logo" src="../../assets/media/LogoFundacitevBlanco.png" alt="Logo" style="max-width: 100%; height: auto;">
                    <div class="logo-divider"></div>
                </div>


                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-cogs"></i>
                            <span class="link-text">Gestión</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-sliders-h"></i>
                            <span class="link-text">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user"></i>
                            <span class="link-text">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="link-text">Logout</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-toggle">
                    <i class="fas fa-angle-left"></i>
                </div>
            </div>


        <!-- Main Content -->
        <div class="main-content">
            <!-- Navbar -->
            <div class="navbar">
                <div class="logo">Admin Panel</div>
                <div class="user-info">Welcome, Admin | <a href="#">Logout</a></div>
            </div>

           
        </div>
    </div>

    <script>
        const sidebar = document.querySelector('.sidebar');
        const toggleBtn = document.querySelector('.sidebar-toggle');
        const logo = document.getElementById('sidebar-logo');  // Seleccionamos el logo

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            
            // Cambiar el logo dependiendo del estado del sidebar
            if (sidebar.classList.contains('collapsed')) {
                logo.src = '../../assets/media/logo.webp';  // Logo cuando está colapsado
            } else {
                logo.src = '../../assets/media/LogoFundacitevBlanco.png';  // Logo cuando está expandido
            }
        });
    </script>


</body>
</html>
