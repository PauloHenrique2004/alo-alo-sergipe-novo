<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blogs Model
 *
 * @method \App\Model\Entity\Blog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Blog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Blog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Blog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Blog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Blog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Blog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Blog findOrCreate($search, callable $callback = null, $options = [])
 */
class BlogsTable extends Table
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

        $this->setTable('blogs');
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

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        return $validator;
    }
}
