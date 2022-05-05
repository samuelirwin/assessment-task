<?php

namespace Tests\Unit;

use App\Services\StringService;
use PHPUnit\Framework\TestCase;

class StringUppercaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_string_is_converted_to_uppercase()
    {
        $result1 = (new StringService)->convertStringToUppercase('PASLDPLASMD');
        $this->assertEquals(true, ctype_upper($result1));
    }

    public function test_if_string_does_not_contain_only_alphabets()
    {
        $result1 = (new StringService)->convertStringToUppercase( 'PASLDPL21209%ASMD');
        $this->assertEquals(false, ctype_upper($result1));
    }
}
