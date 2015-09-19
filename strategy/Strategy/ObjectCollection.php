<?php

class ObjectCollection {
    private $elements;
    /* An ObjectCollection Has-A ComparerInterface
        ANY object could Have-A ComparerInterface.
    */
    private $comparer;

    public function __construct(array $elements = array()) {
        $this->elements = $elements;
    }

    public function sort() {
        if(!$this->comparer) {
            throw new \LogicException('Comparer is not set');
        }

        $callback = array($this->comparer, 'compare');
        uasort($this->elements, $callback);
    }

    // Pass a newly created object which implements the interface
    public function setComparer(ComparerInterface $comparer) {
        $this->comparer = $comparer;
    }

    public function display() {
        echo "<pre>";
        print_r($this->elements);
        echo "</pre>";
    }
}