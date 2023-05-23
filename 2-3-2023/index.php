<?php
// implementation of abstract class 
abstract class Library{

    // implementation of constant 
    const batch_no = 2023;
    // implementation of final 
    final public function Batch(){
        echo "Batch Number is ".Library::batch_no."<BR>";
    }
    abstract public function Genre();
}
// implementation of Interface 
interface Book{
    public function author();
}
class Fiction extends Library implements Book{
    public function Genre(){
        echo "Fiction genre book is called <BR>";
    }
    public function author(){
        echo "Book author is Harold Robbins <BR>";
    }
}
// implementation of traits
trait stock{
    public function count(){
        echo "This book is avaliable<BR>";
    }
}
class Autobiography extends Library{
    public function Genre(){
        echo "Autobiography genre book is called <BR>";
    }
    use stock;
}

$book1 = new Fiction();
$book2 = new Autobiography();
$book1->Genre();
$book1->Batch();

$book2->Genre();
$book2->count();
?>