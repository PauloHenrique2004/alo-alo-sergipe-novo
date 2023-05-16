<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fotos Model
 *
 * @property \App\Model\Table\AlbunsTable|\Cake\ORM\Association\BelongsTo $Albuns
 *
 * @method \App\Model\Entity\Foto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Foto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Foto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Foto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Foto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Foto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Foto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Foto findOrCreate($search, callable $callback = null, $options = [])
 */
class FotosTable extends Table
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

        $this->setTable('fotos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Albuns', [
            'foreignKey' => 'albun_id',
            'joinType' => 'INNER'
        ]);

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
            ->allowEmptyFile('imagem');


        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['albun_id'], 'Albuns'));

        return $rules;
    }
}
