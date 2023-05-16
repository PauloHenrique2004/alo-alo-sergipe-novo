<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Foto Entity
 *
 * @property int $id
 * @property int $albun_id
 * @property string $titulo
 * @property string $descricao
 * @property string|null $imagem
 * @property string|null $imagem_dir
 *
 * @property \App\Model\Entity\Albun $albun
 */
class Foto extends Entity
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
        'albun_id' => true,
        'titulo' => true,
        'imagem' => true,
        'imagem_dir' => true,
        'albun' => true
    ];
}
