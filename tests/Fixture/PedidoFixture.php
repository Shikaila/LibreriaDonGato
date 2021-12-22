<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidoFixture
 */
class PedidoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pedido';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idpedido' => 1,
                'fecha' => '2021-12-22',
                'total' => 1,
                'direccion_envio' => 'Lorem ipsum dolor sit amet',
                'id_usuario' => 1,
            ],
        ];
        parent::init();
    }
}
