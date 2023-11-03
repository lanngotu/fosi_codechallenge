<?php 
// Reggister namespace Begin
namespace ngotulan\codechallenge;
// Reggister namespace End

class CodeChallenge
{
    public $arraySrc=[];            // Array Source from Input
    public $numberOfRotation=0;     // Number Rotation
    public $numberOfRotated=null;   // Number Rotated
    public $stepArray=[];           // Array step by step each rotation
     /**
     * @param array     $arraySrc
     * @param int       $numberOfRotation
     */
    public function __construct(array $arraySrc=[], int $numberOfRotation=0)
    {
        // Class initialization
        $this->arraySrc = $arraySrc;
        $this->numberOfRotation = $numberOfRotation;
        // Class initialization
    }
    public function initDataFromFile($sourceFile){        
        try{
            $lines=explode("\n", file_get_contents($sourceFile));
            if (count($lines)==2){
                $numberElement=0;
                $trimLine1=trim(preg_replace('/\s+/', ' ', $lines[0]));
                $trimLine2=trim(preg_replace('/\s+/', ' ', $lines[1]));
                $arrayInfo=explode(" ",$trimLine1);
                if (count($arrayInfo)==2){
                    $numberElement=$arrayInfo[0];
                    $this->numberOfRotation=(int)$arrayInfo[1];
                    $arrayRotate=explode(" ",$trimLine2);
                    if (count($arrayRotate)==$numberElement){
                        $this->arraySrc=$arrayRotate;
                    }
                    else{
                        // Error
                        throw new Exception("Number elements does not match with input data");
                    }
                }
                else{
                    // Error
                    throw new Exception("Wrong Format File at Line 1");
                }
            }
            else{
                // Error
                throw new Exception("Wrong Format File Only 2 Lines");
            }
        }
        catch (Exception $ex){
            // For Exception (Range Of Exception) (may be it is not happening)
            throw new Exception($ex->getMessage());
        }
    }
    public function rotLeft($arr,$n){
        /** Input
        * @param array     $arr List of elemnt will be rotated 
        * @param int       $n is Number Of Rotations
        */ 

        /** Output
        * Array     Result list of elemnt was rotated after $n rotation 
        */ 

        // Check Total Element is great than 1
        $totalElement=count($arr);
        if ($totalElement>1)
        {
            // totalElement>1 this is true
            // This condition is a step to stop recursion
            if ($n==0){
                $this->numberOfRotated=$this->numberOfRotation;
                array_push($this->stepArray,$arr);
                return $arr;
            }
            else{
                // This condition is not yet to stop recursion
                try {
                    // Get the first Element beforce remove it from Array
                    $firstElement=$arr[0];
                    // Remove first element from Array
                    $isOK=array_shift($arr);
                    // Push it  into from Array (end of array)
                    array_push($arr,$firstElement);
                    // $n minus 1 is great then 0 so we call recursion with $n-1
                    array_push($this->stepArray,$arr);
                    return $this->rotLeft($arr,$n-1);
                }
                catch (Exception $ex){
                    // For Exception (Range Of Exception) (may be it is not happening)
                    throw new Exception($ex->getMessage());
                }
            }
        }
        else{
            // No Rotation
            $this->numberOfRotated=0;
            return $arr;
        }
    }
}