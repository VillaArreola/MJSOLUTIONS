
 <?php include 'includes/cabecera.php'?>
 
 <?php include 'includes/nav-menu.php'?>
 <?php require_once 'php/helpers.php'; ?>

 <div class="container">

 <div class="row" >  




 <!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Mis Datos</h1>
	
	<?php if(isset($_SESSION['completado'])): ?>
		<div class="alerta alerta-exito">
			<?=$_SESSION['completado']?>
		</div>
	<?php elseif(isset($_SESSION['errores']['general'])): ?>
		<div class="alerta alerta-error">
			<?=$_SESSION['errores']['general']?>
		</div>
	<?php endif; ?>
		
	<form action="/php/actualizar-usuario.php" method="POST"> 




    <div class="form">
            <h1>Registro        </h1>    




            <div class="grupo">
                <input type="text" name="nombre" id="" required value="<?=$_SESSION['usuario']['nombre']; ?>" ><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            
            <div class="grupo">
                <input type="text" name="apellidos" id="" required value="<?=$_SESSION['usuario']['apellidos']; ?>" ><span class="barra"></span>
                <label>Apellidos</label>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>


            <div class="grupo">
                <input type="email" name="email" id="" required  value="<?=$_SESSION['usuario']['email']; ?>" ><span class="barra"></span>
                <label>Email</label>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>


         
            <div class="grupo">
                <input type="tel" name="tel" id=""pattern="[0-9]{10}" maxlength="10" value="<?=$_SESSION['usuario']['tel']; ?>" ><span class="barra"></span>
                <label>Tel</label>
            </div>



                
            <button type="submit" name="submit"  >Actualizar Datos</button>





	</form>
	<?php borrarErrores(); ?>

</div> <!--fin principal-->






















 </div>

 
 </div>























 
 <?php include 'includes/footer.php'?>