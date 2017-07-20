<?php

namespace frontend\modules\house\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\house\models\House;

/**
 * HouseSearch represents the model behind the search form about `frontend\modules\house\models\House`.
 */
class HouseSearch extends House
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['house_id', 'village_id', 'location_area_id', 'family_count', 'house_type_id', 'head_person_id', 'house_subtype_id'], 'integer'],
            [['address', 'road', 'census_id', 'hos_guid', 'latitude', 'longitude', 'last_update', 'house_guid', 'village_guid', 'doctor_code', 'utm_lat', 'utm_long', 'house_social_survey_staff', 'house_condo_roomno', 'house_condo_name', 'house_housing_development_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = House::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'house_id' => $this->house_id,
            'village_id' => $this->village_id,
            'location_area_id' => $this->location_area_id,
            'family_count' => $this->family_count,
            'last_update' => $this->last_update,
            'house_type_id' => $this->house_type_id,
            'head_person_id' => $this->head_person_id,
            'house_subtype_id' => $this->house_subtype_id,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'road', $this->road])
            ->andFilterWhere(['like', 'census_id', $this->census_id])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'house_guid', $this->house_guid])
            ->andFilterWhere(['like', 'village_guid', $this->village_guid])
            ->andFilterWhere(['like', 'doctor_code', $this->doctor_code])
            ->andFilterWhere(['like', 'utm_lat', $this->utm_lat])
            ->andFilterWhere(['like', 'utm_long', $this->utm_long])
            ->andFilterWhere(['like', 'house_social_survey_staff', $this->house_social_survey_staff])
            ->andFilterWhere(['like', 'house_condo_roomno', $this->house_condo_roomno])
            ->andFilterWhere(['like', 'house_condo_name', $this->house_condo_name])
            ->andFilterWhere(['like', 'house_housing_development_name', $this->house_housing_development_name]);

        return $dataProvider;
    }
}
