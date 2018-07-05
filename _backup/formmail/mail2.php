<?php

// Verstuur een email naar de ontvanger

session_start();

$p_naam = $_SESSION['ses_naam'];
$p_email = $_SESSION['ses_email'];
$p_vraag = $_SESSION['ses_vraag'];
$p_tel = $_SESSION['ses_tel'];

error_reporting(E_ALL);
require_once('htmlMimeMail.php');

// Maak een email nieuw object
$mail = new htmlMimeMail();

// E-Mail naar de klant

$bericht="
================================
Buro Rij en Verkeersveiligheid
================================

Hoi $p_naam,

Hoi $p_naam,

Dank u wel voor het onderstaande bericht.
Indien nodig zal Buro RVV zo spoedig mogelijk
reageren op het opgegeven emailadres of telefoonnummer.
($p_email / $p_tel)

Uw vraag
========
$p_vraag


M.vr.gr.
Buro Rij en Verkeersveiligheid
www.burorvv.nl

";

// Plaats de bijlage's in de mail
//$file = "../images/rvv-visitekaartje.jpg";
//$attachment = $mail->getFile($file);
//$naam = "rvv-visitekaartje.jpg";
//$mail->addAttachment($attachment,$naam);
// plaats de headers in de email en verstuur deze email
$van = "$p_naam <$p_email>";
$mail->setText($bericht);
$mail->setFrom($van);
$mail->setSubject('Vraag via www.burorvv.nl');
$emailadres = "info@burorvv.nl";
$result = $mail->send(array($emailadres));

header("Location: web-mail.php?toegevoegd=J"); 

?>