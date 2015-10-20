<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $province
 * @property string $postalcode
 * @property string $phonenumber
 * @property string $selectpizza
 * @property string $pizzasize
 * @property string $crusttype
 * @property string $toppinglist
 * @property string $user_type
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Order extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
