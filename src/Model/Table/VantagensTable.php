<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vantagens Model
 *
 * @method \App\Model\Entity\Vantagen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vantagen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vantagen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vantagen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vantagen saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vantagen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vantagen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vantagen findOrCreate($search, callable $callback = null, $options = [])
 */
class VantagensTable extends Table
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

        $this->setTable('vantagens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'imagem' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'imagem_dir', // defaults to `dir`
                    'size' => 'imagem_size', // defaults to `size`
                    'type' => 'imagem_type', // defaults to `type`
                ],
            ],
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
            ->scalar('sub_titulo')
            ->maxLength('sub_titulo', 255)
            ->requirePresence('sub_titulo', 'create')
            ->allowEmptyString('sub_titulo', false);

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->allowEmptyString('titulo', false);

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->allowEmptyString('descricao', false);

        $validator
            ->allowEmptyFile('imagem');


        return $validator;
    }
}
