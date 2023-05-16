<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorias Model
 *
 * @property |\Cake\ORM\Association\HasMany $Noticias
 *
 * @method \App\Model\Entity\Categoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriasTable extends Table
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

        $this->setTable('categorias');
        $this->setDisplayField('categoria');
        $this->setPrimaryKey('id');


        $this->hasMany('Noticias', [
            'foreignKey' => 'categoria_id'
        ]);
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
            ->scalar('categoria')
            ->maxLength('categoria', 255)
            ->requirePresence('categoria', 'create')
            ->allowEmptyString('categoria', false);

        $validator
            ->integer('menu_ordem')
            ->allowEmptyString('menu_ordem');

        $validator
            ->boolean('menu_outros')
            ->requirePresence('menu_outros', 'create')
            ->allowEmptyString('menu_outros', false);

        $validator
            ->boolean('ocultar')
            ->requirePresence('ocultar', 'create')
            ->allowEmptyString('ocultar', false);

        $validator
            ->boolean('exibir_ultimas_noticias')
            ->requirePresence('exibir_ultimas_noticias', 'create')
            ->allowEmptyString('exibir_ultimas_noticias', false);

        $validator
            ->integer('layout')
            ->allowEmptyString('layout');

        return $validator;
    }
}
