<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feedback Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $texto
 * @property string|null $imagem
 * @property string|null $imagem_dir
 */
class Feedback extends Entity
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
        'nome' => true,
        'texto' => true,
        'profissao' => true,
        'imagem' => true,
        'imagem_dir' => true
    ];
}
