function surligne(champ,erreur)
{
	if(erreur)
	{champ.style.border="none";
	champ.style.borderBottom="1px solid red";
	}else
	champ.style.borderBottom="1px solid green";
}

function verifchamp(champ)
{
	if ( champ.value.length<1)
	{surligne(champ,true);
     return false;

	}
	else
		{surligne(champ,false);
     return true;
    }

}

function verifForm(f)
{ 
 var nom=verifchamp(f.nom);
 var prenom=verifchamp(f.prenom);
 var lieu=verifchamp(f.lieu);
  var specialite=verifchamp(f.specialite);
if(nom && prenom && lieu && specialite)
	return true;
else
{
	return false;
}



}