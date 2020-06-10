<?php
$anon_lass_obj = new class{
    public $greeting = 'hello';
    public $id = 754;
    const SETT = 'some configuration';

    public function getValue()
    {
        return 'some returned value';
    }
    public  function  getvalueWithArg($str1){
        return 'return value is '.$str1;
    }
};
echo "<br>";
echo $anon_lass_obj->greeting;
echo "<br>";
echo $anon_lass_obj->id;
echo "<br>";
echo $anon_lass_obj::SETT;
echo "<br>";
echo $anon_lass_obj->getValue();
echo "<br>";
echo $anon_lass_obj->getvalueWithArg('aptech');
echo "<br>";
echo "<br>";
