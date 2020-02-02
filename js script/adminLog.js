function wipe() {
    //Recuperation des ID des documents
    var valueLogin = document.getElementById("login").value;
    var valuePassword = document.getElementById("password").value;


    //met le texte vide puis applique un placeholder
    document.getElementById ("login").value ="";
    valueLogin.placeholder = "Login";

    //met le texte vide puis applique un placeholder
    document.getElementById ("password").value ="";
    valuePassword.placeholder = "password";


    if(valueLogin.length <3 || valuePassword.length<6 ){
    	//modifie le contenue du <p> a la postion 1 dans le flux de la page
    	document.getElementsByTagName('p')[1].innerHTML=("Le Password ou Login est incorrect");
			//modifie le style du titre pour que au moment de l'affichage du paragraphe
			//les boutons en dessous ne bouge pas sur la page
			document.getElementsByTagName('h1')[0].style.paddingBottom="3.9em";

    }

    else{
      //modifie le contenue du <p> a la postion 1 dans le flux de la page
      document.getElementsByTagName('p')[1].innerHTML=("Hehe le PHP est pas codé !");

      }
  }
