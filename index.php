<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<?php

?>

<form action="script.php" method="GET">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name">
    <label for="mail">Mail</label>
    <input type="text" id="mail" name="mail">
    <label for="age">Age</label>
    <input type="text" id="age" name="age">
    <button type="submit">Submit</button>
</form>