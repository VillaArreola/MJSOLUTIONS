<?php include 'includes/cabecera.php' ?>
<div id="body-registro" >
<?php include 'includes/nav-menu.php' ?>

<?php require_once 'php/helpers.php'; ?>











<div class="container" >
<div class="row" >
<div id="login-register"  class="col-md-12 text-center" >  
    <div id="filter"  >

<a href="#" class="btn-theme btn-small" data-filter=".login-cont">Iniciar session</a></>
 <button  class=" col-md-3 " data-filter=".registro-cont" >Registrarse </button>
 </div> 

</div>
</div>
</div>


<div class="registro-cont" >   
    
<form action="php/registro.php" method="POST" >
    
       	<!-- Mostrar errores -->
		<?php if(isset($_SESSION['completado'])): ?>
			<div class="alerta alerta-exito">
				<?=$_SESSION['completado']?>
			</div>
		<?php elseif(isset($_SESSION['errores']['general'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['errores']['general']?>
			</div>
		<?php endif; ?>

      
        



           



        <div class="form">
            <h1>Registro</h1>




            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            
            <div class="grupo">
                <input type="text" name="apellidos" id="" required><span class="barra"></span>
                <label>Apellidos</label>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>


            <div class="grupo">
                <input type="email" name="email" id="" required ><span class="barra"></span>
                <label>Email</label>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>


         
            <div class="grupo">
                <input type="tel" name="tel" id=""pattern="[0-9]{10}" maxlength="10"><span class="barra"></span>
                <label>Tel</label>
            </div>


           

            <div class="grupo">
                <input type="password" name="password" id="" required><span class="barra"></span>
                <label>Contraseña</label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                   </div>
                   <div class="grupo">
                <input type="password" name="password2" id="" required><span class="barra"></span>
                <label>confirmar contraeña</label>
        </div>
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password2') : ''; ?>

                
            <button type="submit" name="submit"  >Registrar</button>

            </form>

    <?php borrarErrores(); ?>

    </div>

    </div>




    


  










<?php include 'includes/footer.php' ?>