 <?php
require('../Controlador/conec.php');
 
$codigo=$_POST['codigo'];
$rs = mysqli_query($con,"SELECT * FROM productos where Codigo=$codigo");
  
                       $array=array();
                       
                       //$i=0;
                       while($row = mysqli_fetch_assoc($rs)){
                          $codigoPro =$row['Codigo'];
                          $nom=$row['Nombre'];
                          $PrecioU=$row['Precio_Unitario'];
                          $Des=$row['Descripcion'];
                          $Can=$row['Cantidad'];
                          
                      }
                      
                      mysqli_close($con);
                   
                    echo json_encode( array('Nombre'=> $nom,'Precio_Unitario'=> $PrecioU,'Descripcion'=> $Des,'Cantidad'=> $Can));

                    
?>  
