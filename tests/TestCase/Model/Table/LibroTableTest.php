<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LibroTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LibroTable Test Case
 */
class LibroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LibroTable
     */
    protected $Libro;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Libro',
        'app.Categoria',
        'app.Pedido',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Libro') ? [] : ['className' => LibroTable::class];
        $this->Libro = $this->getTableLocator()->get('Libro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Libro);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LibroTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
