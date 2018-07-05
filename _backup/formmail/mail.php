<?php

require "../defaults/defaults.php";

// Verstuur een email met het visitekaartje naar plaatser van het bericht.

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
$file = "../images/rvv-visitekaartje.jpg";
$attachment = $mail->getFile($file);
$naam = "rvv-visitekaartje.jpg";
$mail->addAttachment($attachment,$naam);
// plaats de headers in de email en verstuur deze email
$mail->setText($bericht);
$mail->setFrom('Buro Rij en Verkeersveiligheid <info@burorvv.nl>');
$mail->setSubject('Uw vraag aan Buro Rij en Verkeersveiligheid');
$emailadres = "$p_email";
$result = $mail->send(array($emailadres));

header("Location: mail2.php"); 
//header("Location: web-mail.php?toegevoegd=J"); 

?>