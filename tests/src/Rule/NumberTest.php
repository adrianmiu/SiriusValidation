<?php

namespace Sirius\Validation\Rule;

use Sirius\Validation\Rule\Number as Rule;

class NumberTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidation()
    {
        $this->assertTrue($this->rule->validate('0'));
        $this->assertTrue($this->rule->validate('0.3'));
        $this->assertFalse($this->rule->validate('0,3'));
    }
}
