<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $Id
 * @property int $Id_user
 * @property string $FirstName
 * @property string $LastName
 * @property string $Adress
 * @property string $E-mail
 * @property string $Password
 * @property string $Image
 * @property int $Telephone
 * @property \Cake\I18n\Time $Created
 * @property \Cake\I18n\Time $modified
 */
class Member extends Entity
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
        'Id' => false
    ];
}
