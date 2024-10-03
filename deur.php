<?php

class Deur {
    private bool $opSlot;
    private bool $deuropening;
    public string $deurNaam;

    public function __construct(string $deurNaam) {
        $this->opSlot = true; // De deur is op slot en moet worden geopend met een sleutel
        $this->deuropening = false; // De deur is dicht en moet met de klink worden opengemaakt
        $this->deurNaam = $deurNaam; // De deur krijgt de opgegeven naam
    }

    public function sleutelGebruiken(string $richting) {
        switch($richting) {
            case "links":
                $this->opSlot = false; // Deur ontgrendeld
                echo "Deur ontgrendeld\n";
                break;
            case "rechts":
                $this->opSlot = true; // Deur vergrendeld
                echo "Deur is op slot\n";
                break;
            default:
                echo "Ongeldige richting\n";
                break;
        }
    }

    public function deurOpenen() {
        if ($this->opSlot) {
            echo "Deur is nog op slot en kan niet open\n";
            return false;
        }
        $this->deuropening = true; // De deur is open
        echo "Deur is geopend!\n";
        return true;
    }

    public function doorDeurLopen() {
        if ($this->opSlot) {
            echo "Deur is nog op slot en kan niet open\n";
            echo "Je stoot tegen de {$this->deurNaam}\n";
        } elseif (!$this->deuropening) {
            echo "Deur is nog dicht en kan niet doorheen worden gelopen\n";
            echo "Je stoot tegen de {$this->deurNaam}\n";
        } else {
            echo "Je bent in je huiskamer!\n";
        }
    }
}
?>
