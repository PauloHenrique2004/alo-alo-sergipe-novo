<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Academias Model
 *
 * @method \App\Model\Entity\Academia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Academia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Academia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Academia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Academia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Academia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Academia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Academia findOrCreate($search, callable $callback = null, $options = [])
 */
class AcademiasTable extends Table
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

        $this->setTable('academias');
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

            'logo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'logo_dir', // defaults to `dir`
                    'size' => 'logo_size', // defaults to `size`
                    'type' => 'logo_type', // defaults to `type`
                ],
            ],

            'pdf' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'pdf_dir', // defaults to `dir`
                    'size' => 'pdf_size', // defaults to `size`
                    'type' => 'pdf_type', // defaults to `type`
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
            ->allowEmptyString('video');

        $validator
            ->allowEmptyFile('imagem');


        $validator
            ->allowEmptyString('logo');


        $validator
            ->scalar('descricao_logo')
            ->requirePresence('descricao_logo', 'create')
            ->allowEmptyString('descricao_logo', false);

        $validator
            ->allowEmptyString('pdf');

        return $validator;
    }
}
