
<div class="login-cont" >   
<form action="php/login.php" method="POST" >
    
        <div class="form">
            <h4>Iniciar Session</h4>


            <?php if(isset($_SESSION['error_login'])): ?>
        <div class="alerta alerta-error">
            <?=$_SESSION['error_login'];?>
        </div>
    
    <?php endif; ?>


            <div class="grupo">
            
            <div class="grupo">
                <input type="email" name="email" id="" required  ><span class="barra"></span>
                <label>Email</label>
            </div>
         



           

            <div class="grupo">
                <input type="password" name="password" id="" required><span class="barra"></span>
                <label>Contraseña</label>
            

                   </div>

                   
           




            <button type="submit" name="submit">     Registrar    </button>
            

            </form>
            <a href="registro.php"> Registrarse </a>
           
          

 

    </div>

    </div>
