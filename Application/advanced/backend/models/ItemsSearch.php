<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Items;
use backend\models\categories;

/**
 * ItemsSearch represents the model behind the search form about `backend\models\Items`.
 */
class ItemsSearch extends Items
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'item_selling_price', 'item_unit_cost'], 'integer'],
            [['item_name', 'item_date_created', 'item_description', 'category_id'], 'safe'],
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
        $query = Items::find();

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

        $query->joinWith('categories');

        // grid filtering conditions
        $query->andFilterWhere([
            'item_id' => $this->item_id,
            'category_id' => $this->category_id,
            'item_selling_price' => $this->item_selling_price,
            'item_unit_cost' => $this->item_unit_cost,
            'item_date_created' => $this->item_date_created,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name])
              ->andFilterWhere(['like', 'item_description', $this->item_description])
              ->andFilterWhere(['like', 'categories.category_type', $this->category_id]);
        return $dataProvider;
    }
}
