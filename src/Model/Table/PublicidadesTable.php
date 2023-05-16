<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Publicidades Model
 *
 * @method \App\Model\Entity\Publicidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Publicidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Publicidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Publicidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publicidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publicidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Publicidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Publicidade findOrCreate($search, callable $callback = null, $options = [])
 */
class PublicidadesTable extends Table
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

        $this->setTable('publicidades');
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
            ->allowEmptyFile('imagem');

        $validator
            ->scalar('link')
            ->maxLength('link', 255)
            ->allowEmptyString('link');

        $validator
            ->allowEmptyString('local');

        return $validator;
    }
}
