function gotoUrl($url) {
    window.location = $url;
}

// validation création utilisateur
function valider()
{
    var ok = 1;

    if (document.getElementById('nom').value == "")
    {
        alert("Veuillez indiquer votre nom.");
        ok = 0;
        document.getElementById('nom').focus();
        return false;
    }
    if (document.getElementById('prenom').value == "")
    {
        alert("Veuillez indiquer votre prenom.");
        ok = 0;
        document.getElementById('prenom').focus();
        return false;
    }
    if (document.getElementById('tel').value == "")
    {
        alert("Veuillez indiquer votre téléphone.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (isNaN(document.getElementById('tel').value))
    {
        alert("Votre téléphone ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if ((document.getElementById('tel').value.length > 10) || (document.getElementById('tel').value.length < 10))
    {
        alert("Votre téléphone ne comporte pas 10 chiffres.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }

    if (isNaN(document.getElementById('tel').value))
    {
        alert("Votre téléphone portable ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if ((document.getElementById('telP').value.length > 10) || (document.getElementById('tel').value.length < 10))
    {
        alert("Votre téléphone portable ne comporte pas 10 chiffres.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (document.getElementById('mail').value == "")
    {
        alert("Veuillez indiquer votre adresse email.");
        ok = 0;
        document.getElementById('mail').focus();
        return false;
    }
    if ((document.getElementById('mail').value.indexOf("@", 0) < 0) || (document.getElementById('mail').value.indexOf(".", 0) < 0))
    {
        alert("Adresse email incorrecte. \nVeuillez corriger;");
        ok = 0;
        document.getElementById('mail').focus();
        return false;
    }
    
    
    if (ok == 1) {
        etapeIdentifiant();
    }

}

//Affichage etape suivante Identifiant
function etapeIdentifiant(){
    //rendre invisible
    document.getElementById('Formulaire_Information_generales').style.display='none';
    
    //rendre visible
    document.getElementById('Formulaire_Identifiants').style.display='block';
    
    //activer-désactiver les boutons
    document.getElementById('button-precedent').disabled = false;
    document.getElementById('button-suivant').disabled = true;
    document.getElementById('button-creer').disabled = false;
}

function etapePrecedent(){
    //rendre invisible
    document.getElementById('Formulaire_Identifiants').style.display='none';
    
    //rendre visible
    document.getElementById('Formulaire_Information_generales').style.display='block';
    
    //activer-désactiver les boutons
    document.getElementById('button-precedent').disabled = true;
    document.getElementById('button-suivant').disabled = false;
    document.getElementById('button-creer').disabled = true;
    
    
}

//Vlidation Identifiant
function valideI(){
    var ok = 1;
    
    if (document.getElementById('login').value == "")
    {
        alert("Veuillez indiquer votre login.");
        ok = 0;
        document.getElementById('login').focus();
        return false;
    }
    if (document.getElementById('mdp').value == "")
    {
        alert("Veuillez indiquer votre mot de passe.");
        ok = 0;
        document.getElementById('mdp').focus();
        return false;
    }
    if (document.getElementById('mdp').value.length < 7)
    {
        alert("Votre mot de passe doit comporter au moins 7 caractères.");
        ok = 0;
        document.getElementById('mdp').focus();
        return false;
    }
    if (document.getElementById('mdp2').value == "")
    {
        alert("Veuillez indiquer votre vérification de mot de passe.");
        ok = 0;
        document.getElementById('mdp2').focus();
        return false;
    }
    if (document.getElementById('mdp2').value.length < 7)
    {
        alert("Votre vérification de mot de passe doit comporté au moins 7 caractères.");
        ok = 0;
        document.getElementById('mdp2').focus();
        return false;
    }
    if ((document.getElementById('mdp').value) != (document.getElementById('mdp2').value))
    {
        alert("Vos mots de passes sont différents.");
        ok = 0;
        document.getElementById('mdp').focus();
        return false;
    }

    if (ok == 1) {
        document.submit();
    }
    
}
//VAlidation création entreprise
function validerE()
{
    var ok = 1;


    if (document.getElementById('nom').value == "")
    {
        alert("Veuillez indiquer le nom de l'entreprise.");
        ok = 0;
        document.getElementById('nom').focus();
        return false;
    }
    if (document.getElementById('ville').value == "")
    {
        alert("Veuillez indiquer la ville de l'entreprise.");
        ok = 0;
        document.getElementById('ville').focus();
        return false;
    }

    if (document.getElementById('ads').value == "")
    {
        alert("Veuillez indiquer l'adresse l'entreprise.");
        ok = 0;
        document.getElementById('ads').focus();
        return false;
    }
    if (document.getElementById('cp').value == "")
    {
        alert("Veuillez indiquer le code postal.");
        ok = 0;
        document.getElementById('cp').focus();
        return false;
    }
    if (isNaN(document.getElementById('cp').value))
    {
        alert("Le code postal ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('cp').focus();
        return false;
    }
    if ((document.getElementById('cp').value.length > 5) || (document.getElementById('cp').value.length < 5))
    {
        alert("Le code postal ne comporte pas 5 chifre.");
        ok = 0;
        document.getElementById('cp').focus();
        return false;
    }
    if (document.getElementById('tel').value == "")
    {
        alert("Veuillez indiquer le téléphone de l'entreprise.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (isNaN(document.getElementById('tel').value))
    {
        alert("Le téléphone ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if ((document.getElementById('tel').value.length > 10) || (document.getElementById('tel').value.length < 10))
    {
        alert("Le téléphone ne comporte pas 10 chifre.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (document.getElementById('fj').value == "")
    {
        alert("Veuillez indiquer sa forme juridique.");
        ok = 0;
        document.getElementById('fj').focus();
        return false;
    }
    if (ok == 1) {

        document.submit();

    }

}
   