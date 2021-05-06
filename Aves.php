<?php

interface Aves
{
    public function setLocalizacao($longitude, $latitude);
    public function setAltitude($altitude);
    public function renderizar();
}
?>
