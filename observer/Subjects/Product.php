<?php

class Product implements SubjectInterface {
    private $price;
    private $observers = array();

    public function attach(ObserverInterface $observer) {
        $this->observers[] = $observer;
        echo get_class($observer) . ' attached.<br>';
    }

    public function detach(ObserverInterface $observer) {
        $index = array_search($observer, $this->observers);

        if($index) {
            unset($this->observers[$index]);
        }
    }

    public function notify() {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setPrice($price) {
        $this->price = $price;
        $this->notify();
    }
}