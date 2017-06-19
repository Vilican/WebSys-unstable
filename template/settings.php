<?php

if (isset($_GET["chpass"])) {

$page["title"] = "Uživatelské nastavení - změna hesla";

$page["content"] = $message .'
<form action="index.php?p=settings&chpass" method="post">
<table style="border-spacing:10px">
<tr><td>Staré heslo:</td><td><input type="password" name="oldpass" class="form-control"></td></tr>
<tr><td>Nové heslo:</td><td><input type="password" name="newpass" class="form-control"></td></tr>
<tr><td>Heslo znovu:</td><td><input type="password" name="newpass2" class="form-control"></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Změnit" class="btn btn-default"></td></tr>
</table><input type="hidden" name="csrf" value="'. $csrf .'"></form>';

} elseif (isset($_GET["emailval"])) {

$page["title"] = "Uživatelské nastavení - ověření emailu";

$page["content"] = $message .'
<form action="index.php?p=settings" method="post">
<table style="border-spacing:10px">
<tr><td>Avatar:</td><td><p><img src="upload/avatars/'. $path .'" class="avatar img-responsive" alt="Profilový obrázek"></p><p><a class="btn btn-primary" href="index.php?p=settings&newavatar">Změnit avatara</a></p></td></tr>
<tr><td>Heslo:</td><td><a class="btn btn-primary" href="index.php?p=settings&chpass">Změnit heslo</a></td></tr>
<tr><td>Přihlašovací jméno:</td><td><input type="text" name="loginname" value="'. restore_value(santise($usr["loginname"]), santise($_POST["loginname"])) .'" class="form-control"></td></tr>
<tr><td>Uživatelské jméno:</td><td><input type="text" name="username" value="'. restore_value(santise($usr["username"]), santise($_POST["username"])) .'" class="form-control"></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" value="'. restore_value(santise($usr["email"]), santise($_POST["email"])) .'" class="form-control"></td></tr>
'. $email_val . $next_fields .'
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Aktualizovat" class="btn btn-default"></td></tr>
</table><input type="hidden" name="csrf" value="'. $csrf .'"></form>';

} else {

$page["title"] = "Uživatelské nastavení";

$page["content"] = $message .'
<form action="index.php?p=settings" method="post">
<table style="border-spacing:10px">
<tr><td>Avatar:</td><td><p><img src="upload/avatars/'. $path .'" class="avatar img-responsive" alt="Profilový obrázek"></p><p><a class="btn btn-primary" href="index.php?p=settings&newavatar">Změnit avatara</a></p></td></tr>
<tr><td>Heslo:</td><td><a class="btn btn-primary" href="index.php?p=settings&chpass">Změnit heslo</a></td></tr>
<tr><td>Přihlašovací jméno:</td><td><input type="text" name="loginname" value="'. restore_value(santise($usr["loginname"]), santise($_POST["loginname"])) .'" class="form-control"></td></tr>
<tr><td>Uživatelské jméno:</td><td><input type="text" name="username" value="'. restore_value(santise($usr["username"]), santise($_POST["username"])) .'" class="form-control"></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" value="'. restore_value(santise($usr["email"]), santise($_POST["email"])) .'" class="form-control"></td></tr>
'. $email_val . $next_fields .'
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Aktualizovat" class="btn btn-default"></td></tr>
</table><input type="hidden" name="csrf" value="'. $csrf .'"></form>';

}

require "template/page.php";