<?php

namespace frontend\modules\house\models;

use Yii;

/**
 * This is the model class for table "village".
 *
 * @property integer $village_id
 * @property string $address_id
 * @property string $village_moo
 * @property string $village_name
 * @property string $hos_guid
 * @property string $village_code
 * @property string $latitude
 * @property string $longitude
 * @property string $out_region
 * @property string $village_guid
 * @property string $doctor_code
 * @property integer $stroke_color
 * @property integer $fill_color
 * @property string $entry_datetime
 * @property string $out_region_date
 * @property integer $family_count
 */
class Village extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'village';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['village_id', 'address_id', 'village_moo', 'village_name'], 'required'],
            [['village_id', 'stroke_color', 'fill_color', 'family_count'], 'integer'],
            [['entry_datetime', 'out_region_date'], 'safe'],
            [['address_id'], 'string', 'max' => 6],
            [['village_moo', 'village_code'], 'string', 'max' => 10],
            [['village_name'], 'string', 'max' => 200],
            [['hos_guid', 'village_guid'], 'string', 'max' => 38],
            [['latitude', 'longitude'], 'string', 'max' => 50],
            [['out_region'], 'string', 'max' => 1],
            [['doctor_code'], 'string', 'max' => 9],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'village_id' => 'Village ID',
            'address_id' => 'Address ID',
            'village_moo' => 'Village Moo',
            'village_name' => 'Village Name',
            'hos_guid' => 'Hos Guid',
            'village_code' => 'Village Code',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'out_region' => 'Out Region',
            'village_guid' => 'Village Guid',
            'doctor_code' => 'Doctor Code',
            'stroke_color' => 'Stroke Color',
            'fill_color' => 'Fill Color',
            'entry_datetime' => 'Entry Datetime',
            'out_region_date' => 'Out Region Date',
            'family_count' => 'Family Count',
        ];
    }
	public function getVillname() {
        return $this->village_name.' หมู่ '.$this->village_moo;
    }
	
}
