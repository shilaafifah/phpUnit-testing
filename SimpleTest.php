// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework phpunit


//Class yang mau di Test
<?php
use PHPUnit\Framework\TestCase;

require_once "WordCount.php";

//class untuk run testing.
class SimpleTest extends TestCase{
    public function testCountWords(){
        //kita pakai class yang mau kita pakai testCountWords
        $Wc = new Wordcount();

        $TestSentence = "My name is joko"; // 4 Kata ..
        $WordCount = $Wc->countWord($TestSentence);

        $this->assertEquals(4, $WordCount);
    }
}