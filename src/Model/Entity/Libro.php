<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Libro Entity
 *
 * @property int $idlibro
 * @property string $titulo_libro
 * @property string|null $isbn
 * @property int|null $id_autor
 * @property int|null $id_editorial
 * @property \Cake\I18n\FrozenDate|null $fecha_publicacion
 * @property float|null $precio
 * @property int|null $numero_paginas
 * @property string|null $portada
 * @property string|null $resumen
 *
 * @property \App\Model\Entity\Categorium[] $categoria
 * @property \App\Model\Entity\Pedido[] $pedido
 */
class Libro extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
    ];
}
