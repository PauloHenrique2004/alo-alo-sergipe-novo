<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoria Entity
 *
 * @property int $id
 * @property string $categoria
 * @property int|null $menu_ordem
 * @property bool $menu_outros
 * @property bool $ocultar
 * @property bool $exibir_ultimas_noticias
 * @property int|null $layout
 *
 * @property \App\Model\Entity\Blog[] $blogs
 */
class Categoria extends Entity
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
        'categoria' => true,
        'menu_ordem' => true,
        'menu_outros' => true,
        'ocultar' => true,
        'exibir_ultimas_noticias' => true,
        'layout' => true,
        'blogs' => true
    ];
}
