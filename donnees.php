<table>
    <tr>
        <th>Id</th>
        <td>1</td>
    </tr>
    <tr>
<th>Nom</th>
<td>
<?php
$nom = $_POST['nom'];
echo  $nom . '<br>';
?>
</tr>
</td>
<tr>
<th>Email</th>
<td>
<?php $mail = $_POST['mail'];
echo  $mail . '<br>';?>
</td>
</tr>
<tr>
    <th>Message</th>
    <td>
<?php $message = $_POST['message'];
echo $message . '<br>';
?>
</td>
</tr>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Créer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
 die("La connexion a échoué: " . mysqli_connect_error());
}

$nom = $_POST["nom"];
$email = $_POST["mail"];
$message = $_POST["message"];

$sql = "INSERT INTO messages (nom, email, message)
VALUES ('$nom', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
 echo "Nouvel enregistrement créé avec succès";
} else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
