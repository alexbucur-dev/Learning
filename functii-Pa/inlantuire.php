<?php
class Rectangle {
    public $x = 0;
    public $y = 0;

    // seteaza valori pentru laturile $x si $y
    public function setXY($x, $y){
        $this->x = $x;
        $this->y = $y;

        return $this;     // returneaza instanta de obiect
    }

    // returneaza aria
    public function area(){
        return $this->x * $this->y;
    }

    // returneaza perimetru
    public function perimeter(){
        return 2 * ($this->x + $this->y);
    }
}
class setTag {
    private $id = '';        // atributul id
    private $class = '';     // atributul class

    // seteaza $id
    public function setId($id){
        $this->id = ' id="'. $id .'"';

        return $this;     // returneaza instanta de obiect
    }

    // seteaza $class
    public function setClass($class){
        $this->class = ' class="'. $class .'"';

        return $this;     // returneaza instanta de obiect
    }

    // returneaza tag-ul HTML si continutul
    public function getTagCnt($tag, $cnt){
        return '<'. $tag .$this->id. $this->class .'>'. $cnt .'</'. $tag. '>';
    }
}

// creaza o instanta de obiect a clasei
$obTag = new setTag;

// variabile cu tipul tag-ului si continut
$tag = 'div';
$cnt = 'https://marplo.net';

// apeleaza metodele inlantuite pt. setare ID, "class", creaza un <div> cu aceshte atribute si continut
echo $obTag->setId('some_id')->setClass('cls')->getTagCnt($tag, $cnt);

/* Rezultat:
 <div id="some_id" class="cls">https://marplo.net</div>
*/