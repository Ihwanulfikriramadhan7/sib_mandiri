<?php
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function infoBuku() {
        echo "Judul: {$this->judul}, Penulis: {$this->penulis}";
    }
}

class BukuDigital extends Buku {
    public $ukuranFile;

    public function __construct($judul, $penulis, $ukuranFile) {
        parent::__construct($judul, $penulis);
        $this->ukuranFile = $ukuranFile;
    }

    public function infoBuku() {
        parent::infoBuku();
        echo ", Ukuran File: {$this->ukuranFile} MB";
    }
}

// Contoh penggunaan
$buku1 = new Buku("Belajar PHP", "John Doe");
$buku2 = new BukuDigital("Pemrograman Web", "Jane Smith", 100);

$buku1->infoBuku(); // Output: Judul: Belajar PHP, Penulis: John Doe
$buku2->infoBuku(); // Output: Judul: Pemrograman Web, Penulis: Jane Smith, Ukuran File: 5 MB


?>