<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/26/2019
 * Time: 6:46 PM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{

    //These tests are for the htmlTags.php file and if they return the correct values
    public function testTableStart(): void{
        $this -> assertTrue(
            htmlTags::tableStart() == '<table class="table">'
        );
    }

    public function testTableEnd(): void{
        $this -> assertTrue(
            htmlTags::tableEnd() == '</table>'
        );
    }

    public function testTableHeadStart(): void{
        $this -> assertTrue(
            htmlTags::tableHeadStart() == '<thead>'
        );
    }

    public function testTableHeadEnd(): void{
        $this -> assertTrue(
            htmlTags::tableHeadEnd() == '</thead>'
        );
    }

    public function testTableRowStart(): void{
        $this -> assertTrue(
            htmlTags::tableRowStart() == '<tr>'
        );
    }

    public function testTableRowEnd(): void{
        $this -> assertTrue(
            htmlTags::tableRowEnd() == '</tr>'
        );
    }

    public function testRowEntry(): void{
        $var = "Test";
        $this -> assertTrue(
            htmlTags::rowEntry($var) == '<td>' .$var. '</td>'
        );
    }

    public function testTableBodyEnd(): void{
        $this->assertTrue(
            htmlTags::tableBodyEnd() == '</tbody>'
        );
    }

    public function testTHeaderColumn(): void{
        $test = 'hello';
        $this -> assertTrue(
            htmlTags::tHeaderColumn($test) == '<th scope = "col">' .$test. '</th>'
        );
    }

    public function testTHeaderRow(): void{
        $test = 'hello';
        $this -> assertTrue(
            htmlTags::tHeaderRow($test) == '<th scope = "row">' .$test. '</th>'
        );
    }

    public function testTableBodyStart(): void{
        $this -> assertTrue(
            htmlTags::tableBodyStart() == '<tbody>'
        );
    }




    //These tests are for testing if the method exists
    public function testPrintBeginOfTableExists():void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'printBeginOfTable')
        );
    }

    public function testPrintRowEndBodyStartForTableExists(): void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'printRowEndBodyStartForTable')
        );
    }

    public function testPrintTableBodyEndAndWholeTableEndExists(): void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'printTableBodyEndAndWholeTableEnd')
        );
    }

    public function testTableBodyEndExists(): void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'tableBodyEnd')
        );
    }

    public function testTableStartExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableStart')
        );
    }

    public function testTableEndExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableEnd')
        );

    }

    public function testTableHeadStartExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableHeadStart')
        );

    }

    public function testTableHeadEndExists():void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableHeadEnd')
        );

    }

    public function testTableRowStartExists():void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableRowStart')
        );

    }

    public function testTableRowEndExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableRowEnd')
        );

    }

    public function testTHeaderColumnExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tHeaderColumn')
        );

    }

    public function testTHeaderRowExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tHeaderRow')
        );

    }

    public function testRowEntryExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'rowEntry')
        );

    }

    public function testTableBodyStartExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableBodyStart')
        );

    }




    //These are the arrayFunctions.php tests
    public function testCombineArray():void {
        $array1 = array(1,2,3);
        $array2 = array(4,5, 6);
        $combinedArray = ArrayFunctions::combineArray($array1,$array2);

        $this -> assertTrue(
            $combinedArray[1] == 4 && $combinedArray[2] == 5 && $combinedArray[3] == 6, "Arrays are Combined"
        );
    }
    public function testInstantiateArray() :void
    {
        $testArray = ArrayFunctions::instantiateArray();
        $this -> assertIsArray(
            $testArray
        );
    }
    public function testArrayKeys() :void{
        $testArray = array("key1" => 1, "key2" => 2);
        $keys = ArrayFunctions::arrayKeys($testArray);


        self::assertTrue(
            $keys[0] == "key1"
        );
    }
    public function testArrayCount():void{
        $testArray = array(1,2,3);

        $this->assertEquals(3,ArrayFunctions::arrayCount($testArray));
    }
    public function testCombineArrayExists(): void{
        $this->assertTrue(
            method_exists(ArrayFunctions::class,'combineArray')
        );
    }
    public function testInstantiateArrayExists(): void{
        $this->assertTrue(
            method_exists(ArrayFunctions::class,'instantiateArray')
        );
    }
    public function testArrayKeysExist(): void{
        $this->assertTrue(
            method_exists(ArrayFunctions::class,'arrayKeys')
        );
    }



    //File.php tests
    public function testReadCSVIntoArray(): void
    {
        $this->assertTrue(
            method_exists(File::class,'readCSVIntoArray')
        );
    }
    public function testReadCSVIntoArrayReturnsArray(): void{
        $var = File::readCSVIntoArray("data/data.csv",'Car');
        $this-> assertTrue(
            gettype($var)==gettype(array())
        );

        print_r($var);
    }



    //main.php tests
    public function testMainConstructExists(): void{
        $this -> assertTrue(
            method_exists(main::class,'__construct')
        );

    }
    public function testDestructExists(): void{
        $this -> assertTrue(
            method_exists(main::class,'__destruct')
        );
    }


    //csvFunctions.php tests
    public function testCSVOpenExists():void
    {
        $this->assertTrue(
            method_exists(csvFunctions::class,'openFile')
        );
    }
    public function testCSVRowExists():void
    {
        $this->assertTrue(
            method_exists(csvFunctions::class,'getCSVRow')
        );
    }
    public function testCSVCloseExists():void
    {
        $this->assertTrue(
            method_exists(csvFunctions::class,'closeCSV')
        );
    }


    //generic tests
    public function testFileInstantiate(): void
    {
        $file = new File();
        $this-> assertInstanceOf(File::class,$file);
    }

    public function testCSVExists() :void
    {
        $this -> assertFileExists('data\data.csv');
    }

    public function testDirectoryExists():void
    {
        $this -> assertDirectoryExists('data');
    }












    



















}
