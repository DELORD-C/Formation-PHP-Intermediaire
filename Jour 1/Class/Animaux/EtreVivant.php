<?php

namespace Animaux;

interface EtreVivant {
    function seNourrir (Int $quantité);
    function dormir (Int $durée);
}