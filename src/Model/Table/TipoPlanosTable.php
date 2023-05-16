<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoPlanos Model
 *
 * @method \App\Model\Entity\TipoPlano get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoPlano newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoPlano[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoPlano|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoPlano saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoPlano patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoPlano[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoPlano findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoPlanosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tipo_planos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->allowEmptyString('titulo', false);

        return $validator;
    }
}
