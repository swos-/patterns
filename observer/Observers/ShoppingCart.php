<?php

class ShoppingCart implements ObserverInterface {
    public function update(SubjectInterface $subject) {
        echo get_class($subject) . ' has been updated.<br>';
    }
}