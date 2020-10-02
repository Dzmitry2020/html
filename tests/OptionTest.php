<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Option;

class OptionTest extends TestCase
{
    public function testOption(): void
    {
        $this->assertIsString(
            (new Option())->html()
        );

        $this->assertEquals(
            "<option></option>",
            (new Option())->html()
        );

        $this->assertEquals(
            "<option>Option 1</option>",
            (new Option())->setInnerText('Option 1')->html()
        );

        $this->assertEquals(
            "<option value='1'>Option 1</option>",
            (new Option())->setValue('1')->setInnerText('Option 1')->html()
        );

        $this->assertEquals(
            "<option selected value='1'>Option 1</option>",
            (new Option())
                ->selected()
                ->setValue('1')
                ->setInnerText('Option 1')
                ->html()
        );

        $this->assertEquals(
            "<option value='1'>Option 1</option>",
            (new Option())
                ->selected()
                ->selected(false)
                ->setValue('1')
                ->setInnerText('Option 1')
                ->html()
        );
    }
}
