<?php

// Visibility.php

class visibility{

    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';

    function tampilkanData (){
        echo "Akses di dalam kelas <br>";
        echo "public:" . $this->public . "<br>";
        echo "private:" . $this->private . "<br>";
        echo "protected:" . $this->protected . "<br>";
    }
}