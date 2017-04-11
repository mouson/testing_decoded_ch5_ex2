<?php
namespace Tests\Unit;

use Tests\TestCase;

class LinkUrlFunctionTest extends TestCase
{
    public function testGeneratesAnchorTag()
    {
        /** Arrange */

        /** Assume */
        $expected = "<a href='http://localhost/dogs/1'>Show Dog</a>";

        /** Act */
        $actual = link_url('dogs/1', 'Show Dog');

        /** Assert */
        $this->assertEquals($expected, $actual);
    }
}
