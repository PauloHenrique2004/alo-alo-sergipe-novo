<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NoticiaRelacionadas Model
 *
 * @property \App\Model\Table\NoticiasTable|\Cake\ORM\Association\BelongsTo $Noticias
 * @property \App\Model\Table\NoticiaRelacionadasTable|\Cake\ORM\Association\BelongsTo $NoticiaRelacionadas
 * @property \App\Model\Table\NoticiaRelacionadasTable|\Cake\ORM\Association\HasMany $NoticiaRelacionadas
 *
 * @method \App\Model\Entity\NoticiaRelacionada get($primaryKey, $options = [])
 * @method \App\Model\Entity\NoticiaRelacionada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NoticiaRelacionada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NoticiaRelacionada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NoticiaRelacionada saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NoticiaRelacionada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NoticiaRelacionada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NoticiaRelacionada findOrCreate($search, callable $callback = null, $options = [])
 */
class NoticiaRelacionadasTable extends Table
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

        $this->setTable('noticia_relacionadas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Noticias', [
            'foreignKey' => 'noticia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Noticias', [
            'foreignKey' => 'noticia_relacionada_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('NoticiaRelacionadas', [
            'foreignKey' => 'noticia_relacionada_id'
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
        $rules->add($rules->existsIn(['noticia_id'], 'Noticias'));
//        $rules->add($rules->existsIn(['noticia_relacionada_id'], 'NoticiaRelacionadas'));

        return $rules;
    }
}
