<?php include 'includes/cabecera.php' ?>
<div id="body-inicio" >
<?php include 'includes/nav-menu.php' ?>



<div class="registro-cont" >   
    
<form action="correo.php" method="POST" >
        <div class="form">
            <h1>Registro</h1>




            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>

            
            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Apellidos</label>
            </div>


            <div class="grupo">
                <input type="email" name="email" id="" required ><span class="barra"></span>
                <label>Email</label>
            </div>


         
            <div class="grupo">
                <input type="tel" name="tel" id=""pattern="[0-9]{10}" maxlength="10"><span class="barra"></span>
                <label>Tel</label>
            </div>


           

            <div class="grupo">
                <input type="password" name="pass" id="" required><span class="barra"></span>
                <label>Contraseña</label>
            <button type="submit">Enviar</button>
        </div>
    </form>

    </div>

    </div>

  
<?php include 'includes/footer.php' ?>