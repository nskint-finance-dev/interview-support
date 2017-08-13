<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CheckResult Entity
 *
 * @property int $check_id
 * @property int $check_count
 * @property int $check_user
 * @property \Cake\I18n\FrozenDate $check_date
 * @property string $check_item
 * @property string $check_result
 * @property string $created_user
 * @property \Cake\I18n\FrozenTime $created
 * @property string $modified_user
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $delete_flag
 * @property \Cake\I18n\FrozenTime $delete_date
 *
 * @property \App\Model\Entity\Check $check
 */
class CheckResult extends Entity
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
        'check_id' => false
    ];
}
