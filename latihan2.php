<?php
{
    class segitiga{
        public $setengah = 0.5;
        public $alas = 10.0;
        public $tinggi = 15.0;
        public $a,$b,$c;

        public function hitungLuas()
        {
            return (0.5 * $this->alas * $this->tinggi);
        }
      
        
        public function keliling()
        {
            return ( $this->a + $this->b + $this->c);
        }
      
       
    }

    $luasSegitiga = new segitiga();
    $luasSegitiga->a = 10;
    $luasSegitiga->b = 15;
    $luasSegitiga->c = 10;
    
    echo "Alas Segitiga : " .$luasSegitiga->alas. "<br>";
    echo "Tinggi Segitiga : " .$luasSegitiga->tinggi. "<br>";
    echo "Sisi 1 : " . $luasSegitiga->a. "<br>";
    echo "Sisi 2 : " . $luasSegitiga->b. "<br>";
    echo "Sisi 3 : " . $luasSegitiga->c. "<br>";
    echo "Luas Segitiga : " .$luasSegitiga->hitungLuas(). "<br>";
    echo "Keliling Segitiga : " .$luasSegitiga->keliling(). "<br>";
   
}
?>