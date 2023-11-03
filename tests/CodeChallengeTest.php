<?php
// Reggister namespace Begin
namespace ngotulan\codechallenge;
// Reggister namespace End

// Reggister extension Begin
use PHPUnit\Framework\TestCase;
// Reggister extension End

require __DIR__ . "/../src/CodeChallenge.php";

final class CodeChallengeTest extends TestCase{
    // Test Case Class Constructor
    public function testClassConstructor()
    {
         /**
        * @param array     $arraySrc
        * @param int       $numberOfRotation
        */     
        $arraySrc=[1,2,3,4,5];
        $numberOfRotation=4;
        $codeChallenge = new CodeChallenge([1,2,3,4,5], 4);
        $this->assertEquals($arraySrc, $codeChallenge->arraySrc);
        $this->assertSame($numberOfRotation, $codeChallenge->numberOfRotation);        
    }

    public function testClassConstructorFromFile_TestCase1()
    {
         /**
        * @param array     $arraySrc
        * @param int       $numberOfRotation
        */     
        $arraySrc=[1,2,3,4,5];
        $numberOfRotation=4;
        // Test Function Load From File Begin
        $codeChallenge = new CodeChallenge();        
        $codeChallenge->initDataFromFile("test_case_files/test_case_01.txt");
        $this->assertEquals($arraySrc, $codeChallenge->arraySrc); 
        $this->assertSame($numberOfRotation, $codeChallenge->numberOfRotation);// Must be int and Equal
        // Test Function Load From File End
        /**
        * @param array     $expectedResultRotLeft
        */
        $expectedResultRotLeft=[5,1,2,3,4];
        $expectedNumberRotated=4;
        // Test Class Function Rotate Left Begin
        $this->assertEquals($expectedResultRotLeft, $codeChallenge->rotLeft($codeChallenge->arraySrc,$codeChallenge->numberOfRotation));
        $this->assertSame($expectedNumberRotated, $codeChallenge->numberOfRotated);// Must be int and Equal
        // Test Class Function Rotate Left End
    }

    public function testClassConstructorFromFile_TestCase2()
    {
         /**
        * @param array     $arraySrc
        * @param int       $numberOfRotation
        */     
        $arraySrc=['a','b','c','d','e'];
        $numberOfRotation=4;
        // Test Function Load From File Begin
        $codeChallenge = new CodeChallenge();        
        $codeChallenge->initDataFromFile("test_case_files/test_case_02.txt");
        $this->assertEquals($arraySrc, $codeChallenge->arraySrc); 
        $this->assertSame($numberOfRotation, $codeChallenge->numberOfRotation);// Must be int and Equal
        // Test Function Load From File End
        /**
        * @param array     $expectedResultRotLeft
        */
        $expectedResultRotLeft=['e','a','b','c','d'];
        $expectedNumberRotated=4;
        // Test Class Function Rotate Left Begin
        $this->assertEquals($expectedResultRotLeft, $codeChallenge->rotLeft($codeChallenge->arraySrc,$codeChallenge->numberOfRotation));
        $this->assertSame($expectedNumberRotated, $codeChallenge->numberOfRotated);
        // Test Class Function Rotate Left End
    }

    // Test Case 1
    public function testClassFunctionRotLeftTestCase1()
    {
        /**
        * @param array     $arraySrc
        * @param int       $numberOfRotation
        */
        $arraySrc=[1,2,3,4,5];
        $numberOfRotation=4;
        $codeChallenge = new CodeChallenge([1,2,3,4,5], 4);
        /**
        * @param array     $expectedResultRotLeft
        */
        $expectedResultRotLeft=[5,1,2,3,4];
        $expectedNumberRotated=4;
        // Test Class Constructor Begin
        $this->assertEquals($arraySrc, $codeChallenge->arraySrc);
        $this->assertSame($numberOfRotation, $codeChallenge->numberOfRotation);
        // Test Class Constructor End

        // Test Class Function Rotate Left Begin
        $this->assertEquals($expectedResultRotLeft, $codeChallenge->rotLeft($codeChallenge->arraySrc,$codeChallenge->numberOfRotation));
        $this->assertSame($expectedNumberRotated, $codeChallenge->numberOfRotated);
        // Test Class Function Rotate Left End

        // For View step by step
        // var_dump($codeChallenge->stepArray);
        // For View step by step
    }
    // Test Case 2
    public function testClassFunctionRotLeftTestCase2()
    {
        /**
        * @param array     $arraySrc
        * @param int       $numberOfRotation
        */
        $arraySrc=[1];
        $numberOfRotation=4;
        $codeChallenge = new CodeChallenge([1], 4);
        /**
        * @param array     $expectedResultRotLeft
        */
        $expectedResultRotLeft=[1];
        $expectedNumberRotated=0;
        // Test Class Constructor Begin
        $this->assertEquals($arraySrc, $codeChallenge->arraySrc);
        $this->assertSame($numberOfRotation, $codeChallenge->numberOfRotation);
        // Test Class Constructor End

        // Test Class Function Rotate Left Begin
        $this->assertEquals($expectedResultRotLeft, $codeChallenge->rotLeft($codeChallenge->arraySrc,$codeChallenge->numberOfRotation));
        $this->assertSame($expectedNumberRotated, $codeChallenge->numberOfRotated);
        // Test Class Function Rotate Left End
    }
}