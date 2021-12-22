<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Libro Model
 *
 * @property \App\Model\Table\CategoriaTable&\Cake\ORM\Association\BelongsToMany $Categoria
 * @property \App\Model\Table\PedidoTable&\Cake\ORM\Association\BelongsToMany $Pedido
 *
 * @method \App\Model\Entity\Libro newEmptyEntity()
 * @method \App\Model\Entity\Libro newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Libro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Libro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Libro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Libro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Libro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Libro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Libro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Libro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Libro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Libro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Libro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LibroTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('libro');
        $this->setDisplayField('idlibro');
        $this->setPrimaryKey('idlibro');

        $this->belongsToMany('Categoria', [
            'foreignKey' => 'libro_id',
            'targetForeignKey' => 'categorium_id',
            'joinTable' => 'categoria_libro',
        ]);
        $this->belongsToMany('Pedido', [
            'foreignKey' => 'libro_id',
            'targetForeignKey' => 'pedido_id',
            'joinTable' => 'libro_pedido',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('idlibro')
            ->allowEmptyString('idlibro', null, 'create');

        $validator
            ->scalar('titulo_libro')
            ->maxLength('titulo_libro', 200)
            ->requirePresence('titulo_libro', 'create')
            ->notEmptyString('titulo_libro');

        $validator
            ->scalar('isbn')
            ->maxLength('isbn', 20)
            ->allowEmptyString('isbn');

        $validator
            ->integer('id_autor')
            ->allowEmptyString('id_autor');

        $validator
            ->integer('id_editorial')
            ->allowEmptyString('id_editorial');

        $validator
            ->date('fecha_publicacion')
            ->allowEmptyDate('fecha_publicacion');

        $validator
            ->numeric('precio')
            ->allowEmptyString('precio');

        $validator
            ->integer('numero_paginas')
            ->allowEmptyString('numero_paginas');

        $validator
            ->scalar('portada')
            ->maxLength('portada', 200)
            ->allowEmptyString('portada');

        $validator
            ->scalar('resumen')
            ->maxLength('resumen', 16777215)
            ->allowEmptyString('resumen');

        return $validator;
    }
}
