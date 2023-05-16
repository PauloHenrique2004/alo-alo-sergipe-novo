<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NoticiaRelacionada Entity
 *
 * @property int $id
 * @property int $noticia_id
 * @property int $noticia_relacionada_id
 *
 * @property \App\Model\Entity\Noticia $noticia
 * @property \App\Model\Entity\NoticiaRelacionada[] $noticia_relacionadas
 */
class NoticiaRelacionada extends Entity
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
        'noticia_id' => true,
        'noticia_relacionada_id' => true,
        'noticia' => true,
        'noticia_relacionadas' => true
    ];
}
