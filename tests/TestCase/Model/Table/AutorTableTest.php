<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutorTable Test Case
 */
class AutorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AutorTable
     */
    protected $Autor;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Autor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Autor') ? [] : ['className' => AutorTable::class];
        $this->Autor = $this->getTableLocator()->get('Autor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Autor);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AutorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
