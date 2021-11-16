
<script type="text/javascript">
	
	function validar(){
		var copia = document.getElementById("txtcopia").value;
		var captcha = document.getElementById("captcha").value;
				
		if(copia == captcha){
			window.open("http://www.google.com.pe");
		}else{

      button.disabled = true;

		}
	}

</script>



<?php

//numeros y letras aleatorios

		function codigo_captcha(){
      $numero1 = rand(0,9);
      $letra1 = chr(rand(65,90));
      $numero2 = rand(0,9);
      $letra2 = chr(rand(65,90));
      $numero3 = rand(0,9);
      $letra3 = chr(rand(65,90));
      


     
      $codigo = $numero1.$letra1.$numero2.$letra2.$numero3.$letra3;
      
      return $codigo;
    }

      

?>



	<tr>
		<td>
			<input type="text" name="txtcopia" id="txtcopia" size="10   onselectstart = "return false;">
		</td>
		<td>
			<input type="text" name="captcha"   id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha" size="4" readonly>
		</td>
	</tr>		
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="button" name="entrar" id="entrar" value="SIGUIENTE" class="boton" onclick="validar();">
		</td>
	</tr>
	</table>
</center>

</body>
</html>















