<?php
class Deur {
    private $isUnlocked = false;

    public function draaiSleutel($richting) {
        if ($richting === 'links' || $richting === 'rechts') {
            if ($this->isUnlocked) {
                return "De deur is al ontgrendeld!";
            } else {
                $this->isUnlocked = true;
                return "De deur is nu ontgrendeld door de sleutel naar $richting te draaien.";
            }
        } else {
            return "Ongeldige richting! Draai de sleutel naar 'links' of 'rechts' om te ontgrendelen.";
        }
    }

    public function openDeur() {
        if ($this->isUnlocked) {
            return "Je opent de deur met de klink en stapt naar binnen!";
        } else {
            return "Je stoot tegen de voordeur! De deur is nog op slot!";
        }
    }

    public function vergrendelDeur() {
        if ($this->isUnlocked) {
            $this->isUnlocked = false;
            return "De deur is vergrendeld.";
        } else {
            return "De deur is al vergrendeld!";
        }
    }
}
?>
