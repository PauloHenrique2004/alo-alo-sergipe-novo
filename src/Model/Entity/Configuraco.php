<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Configuraco Entity
 *
 * @property int $id
 * @property string|null $google_ads
 * @property string|null $google_analytics
 * @property string|null $whatsApp
 * @property string|null $maps
 * @property string|null $twitter
 * @property string|null $instagram
 * @property string|null $yotube
 * @property string|null $facebook
 */
class Configuraco extends Entity
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
        'google_ads' => true,
        'google_analytics' => true,
        'whatsApp' => true,
        'telefone' => true,
        'maps' => true,
        'twitter' => true,
        'instagram' => true,
        'youtube' => true,
        'facebook' => true,
        'sobre_rodape' => true
    ];
}
