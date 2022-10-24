<?php

class RepertoireUtilisateurs {
    private $mailer;

    function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    function sauvegarderUtilisateur () {
        //insert en bdd
        $this->mailer->envoyerEmail();
    }
}