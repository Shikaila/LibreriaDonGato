<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuario Model
 *
 * @method \App\Model\Entity\Usuario newEmptyEntity()
 * @method \App\Model\Entity\Usuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuarioTable extends Table
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

        $this->setTable('usuario');
        $this->setDisplayField('idusuario');
        $this->setPrimaryKey('idusuario');
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
            ->integer('idusuario')
            ->allowEmptyString('idusuario', null, 'create');

        $validator
            ->integer('roles')
            ->requirePresence('roles', 'create')
            ->notEmptyString('roles');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('contraseña')
            ->maxLength('contraseña', 45)
            ->requirePresence('contraseña', 'create')
            ->notEmptyString('contraseña');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 200)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 45)
            ->allowEmptyString('apellidos');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 200)
            ->allowEmptyString('correo');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 11)
            ->allowEmptyString('telefono');

        return $validator;
    }
}
