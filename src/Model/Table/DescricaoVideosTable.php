<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DescricaoVideos Model
 *
 * @method \App\Model\Entity\DescricaoVideo get($primaryKey, $options = [])
 * @method \App\Model\Entity\DescricaoVideo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DescricaoVideo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DescricaoVideo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DescricaoVideo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DescricaoVideo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DescricaoVideo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DescricaoVideo findOrCreate($search, callable $callback = null, $options = [])
 */
class DescricaoVideosTable extends Table
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

        $this->setTable('descricao_videos');
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
            ->scalar('tittulo')
            ->maxLength('tittulo', 255)
            ->requirePresence('tittulo', 'create')
            ->allowEmptyString('tittulo', false);

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->allowEmptyString('descricao', false);

        return $validator;
    }
}
