<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evento Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $resumo
 * @property string $descricao
 * @property \Cake\I18n\FrozenDate $data
 * @property |null $imagem
 * @property string|null $imagem_dir
 * @property string|null $outros_eventos
 */
class Evento extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'resumo' => true,
        'descricao' => true,
        'data' => true,
        'hora' => true,
        'imagem' => true,
        'capa' => true,
        'imagem_dir' => true,
        'outros_eventos' => true
    ];
}
