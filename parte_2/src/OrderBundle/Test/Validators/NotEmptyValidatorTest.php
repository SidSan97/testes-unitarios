<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\NotEmptyValidator;
use PHPUnit\Framework\TestCase;

class NotEmptyValidatorTest extends TestCase
{
    
    /**
     * @dataProvider valueProvider
     */
    public function testIsValid($value, $expectedResult)
    {
        $notEmptyValidator = new NotEmptyValidator($value);

        $isValid = $notEmptyValidator->isValid();
        $this->assertEquals($expectedResult, $isValid);
        
    }

    public function valueProvider()
    {
        return [
            'shouldBeValideWhenValueIsNotEmpty' => ['value' => 'foo', 'expectedResult' => true],
            'shouldNotBeValideWhenValueIsEmpty' => ['value' => '', 'expectedResult' => true]
        ];
    }

    //com data provider, funcao ficou inutil
    /*public function testShouldBeValidWhenValueIsNotEmpty()
    {
        $notEmptyValue = "foo";
        $notEmptyValidator = new NotEmptyValidator($notEmptyValue);

        $isValid = $notEmptyValidator->isValid();
        $this->assertTrue($isValid);
    }*/

}