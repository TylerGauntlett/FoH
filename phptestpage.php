<!-- Creates a table to organize the addtion -->
<table>
  <tr>
    <td>
    <?php 
	if (!empty($_POST["number1"])) {
		echo $_POST["number1"];
	}
	?>
    </td>
    
    <td>
    <?php 
    echo "+";
    ?>
    </td>	
  
   	<td>
   	<?php
	if (!empty($_POST["number2"])) {
	echo $_POST["number2"];
	}
	?>
    </td>
    
    <td>
    <?php 
    echo "=";
    ?>
    </td>	
    
    <td>
    <?php 
    $total = $_POST["number1"] + $_POST["number2"];
	echo $total;
    ?>
    </td>	
  </tr>

</table>