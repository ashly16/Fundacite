<div class="container right-panel-active">
    <link rel="stylesheet" href="../../assets/css/s.css">
    <!-- Sign Up -->
    <div class="container__form container--signup">
        <form action="#" class="form" id="form1">
            <h2 class="form__title">Registrarse</h2>
            <input type="number" placeholder="Cédula" class="input" required/>
            <input type="text" placeholder="Nombre" class="input" required/>
            <input type="text" placeholder="Apellido" class="input" required/>
            <input type="email" placeholder="Email" class="input" required />
            <input type="password" placeholder="Contraseña" class="input" required />
            <button class="btn">Registrar</button>
        </form>
    </div>

    <!-- Sign In -->
    <div class="container__form container--signin">
        <form action="./aprehendidos.php" method="POST" class="form" id="form2">
            <h2 class="form__title">Iniciar Sesión</h2>
            <input type="text" name="cedula" placeholder="Cédula" class="input" value="" />
            <input type="password" name="password" placeholder="Contraseña" class="input" value="" />
            <a href="#" class="link">Olvidaste tu contraseña?</a>
            <button type="submit" class="btn">Iniciar</button>
        </form>
    </div>

    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn" id="signIn">Iniciar</button>
            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("form1");
        const secondForm = document.getElementById("form2");
        const container = document.querySelector(".container");

        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });
        
      
    </script>
</div>
