<?php
 
if (isset($_POST['submit'])) { 
 $tires=$_POST['tires'];
  $oil=$_POST['oil'];
  $spark_plugs=$_POST['Spark_Plugs'];
  if (($tires=='12')&& ($oil=="4") && ($spark_plugs=="20")) {
  echo "Tires: 12, Oil: 4, Spark Plugs: 20 ";
   }
  else {
  	echo "The insert information is not correct";
  }
}
?>