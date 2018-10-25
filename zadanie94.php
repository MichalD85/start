<form action="zadanie94.php" mothod="POST">
    <p>Imie <input type="text" name="imie"></p>
    <p>Nazwisko <input type="text" name="nazwisko"></p>
    <p>Email <input type="email" name="email"></p>
    <p>Haslo <input type="password" name="haslo"></p>
    <p>Powtorz haslo: <input type="password" name="haslopowtorka"></p>
    <p><input type="submit"></p>
</form>

<?php

if (!empty($_POST))
{
    $user = [($_POST["imie"]), ($_POST["nazwisko"]), ($_POST["email"]), ($hashaslo = md5($_POST["haslo"]))];
    
    $filanee = 
    
    file_put_contents($filename, $user)
  
  
   
}


/*file_put_contents(md5($usgr["email"]); 
serialize($usgr));

*/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

