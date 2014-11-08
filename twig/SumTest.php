<?

namespace Killsoft;

require_once 'PHPUnit/Framework.php';

class TestSum extends PHPUnit_Framework_TestCase
{

    public function testAddValues($a, $b)
    {
     $this->assertEquals(
              3, $this->object->addValues(1,2));
    }   
}
