<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 */
class UsuarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idusuario' => 1,
                'roles' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'contraseña' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ips',
            ],
        ];
        parent::init();
    }
}
