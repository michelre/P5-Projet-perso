function HeureCheck()
	{
	time = new Date;
	heure = time.getHours();
	min = time.getMinutes();
	sec = time.getSeconds();
	jour = time.getDate();
	mois = time.getMonth()+1;
	annee = time.getFullYear();
	if (sec < 10)
		sec0 = "0";
	else
		sec0 = "";
	if (min < 10)
		min0 = "0";
	else
		min0 = "";
	if (heure < 10)
		heure0 = "0";
	else
		heure0 = "";
	DinaHeure = heure0 + heure + ":" + min0 + min + ":" + sec0 + sec;
	which = DinaHeure
	if (document.getElementById){
		document.getElementById("heure").innerHTML=which;
	}
	setTimeout("HeureCheck()", 1000)
	}
window.onload = HeureCheck;
