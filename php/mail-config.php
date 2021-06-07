<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/
//mailgun API Key authorization
$mailgunApiKey = "-- 90ac0eb7-e6f62238 --";
$mailgunDomain = " -- www.jawaunyoung.net --";
// your Google reCAPTCHA keys here
$siteKey = '-- 6Lfc3hgbAAAAAGGhjzRpiMcf-xkO6_vK64xG5GTb --';
$secret = '-- 6Lfc3hgbAAAAAB-8uB_gL0o3860k7sBlMweXvW92 --';
/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "mail@email.com" => "Recipient Name"];
$MAIL_RECIPIENT = ["mail@mail.com"];