<?php include 'includes/cabecera.php' ?>
<div id="body-registro" >
<?php include 'includes/nav-menu.php' ?>




<div class="registro-cont" >   
    
<form action="php/registro.php" method="POST" >
    
        <?php if(isset($_SESSION['errores'])): ?>
            <?php echo var_dump($_SESSION['errores']) ?>

        <?php endif; ?>
        



           



        <div class="form">
            <h1>Registro</h1>




            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>

            
            <div class="grupo">
                <input type="text" name="apellido" id="" required><span class="barra"></span>
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
                <input type="password" name="password" id="" required><span class="barra"></span>
                <label>Contraseña</label>

                   </div>
                   <div class="grupo">
                <input type="password2" name="password2" id="" required><span class="barra"></span>
                <label>conformar contraeña</label>

                
            <button type="submit" name="submit"  >Registrar</button>

        </div>
    </form>

    </div>

    </div>

  
<?php include 'includes/footer.php' ?>