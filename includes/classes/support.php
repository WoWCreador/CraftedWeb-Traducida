<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
</head>
<?php
/* ___           __ _           _ __    __     _     
  / __\ __ __ _ / _| |_ ___  __| / / /\ \ \___| |__  
 / / | '__/ _` | |_| __/ _ \/ _` \ \/  \/ / _ \ '_ \ 
/ /__| | | (_| |  _| ||  __/ (_| |\  /\  /  __/ |_) |
\____/_|  \__,_|_|  \__\___|\__,_| \/  \/ \___|_.__/ 

		-[ Created by ©Nomsoft
		  `-[ Original core by Anthony (Aka. CraftedDev)

				-CraftedWeb Generation II-                  
			 __                           __ _   							   
		  /\ \ \___  _ __ ___  ___  ___  / _| |_ 							   
		 /  \/ / _ \| '_ ` _ \/ __|/ _ \| |_| __|							   
		/ /\  / (_) | | | | | \__ \ (_) |  _| |_ 							   
		\_\ \/ \___/|_| |_| |_|___/\___/|_|  \__|	- www.Nomsoftware.com -	   
                  The policy of Nomsoftware states: Releasing our software   
                  or any other files are protected. You cannot re-release    
                  anywhere unless you were given permission.                 
                  © Nomsoftware 'Nomsoft' 2011-2012. All rights reserved.  */
 
#################
# Unused class. #
#################
class support {
	
	public static function loadEmailForm() 
	{
		?><br/>
		<form action="?p=support&do=email" method="post">
        Asuntos: <bR/><select name="issue">
               <option>Problemas Tecnicos</option>
               <option>Denuncias</option>
               <option>otros...</option>       
        </select><br/>
        Describe tu problema: <br/>
        <textarea name="description" cols="50" rows="7"></textarea>
        </form>
		<?php
	}
	
}

?>