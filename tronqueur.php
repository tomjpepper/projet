<?php
function tronquer_texte($texte, $longeur_max = 210)
	{ 
		if (strlen($texte) > $longeur_max)    
		{
			$texte = substr($texte, 0, $longeur_max);
			$texte .= "...";
		}    
		return $texte; 
	}
?>