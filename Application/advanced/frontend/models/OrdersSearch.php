<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Orders;
use backend\models\Items;

/**
 * OrdersSearch represents the model behind the search form about `frontend\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'qty', 'item_id'], 'integer'],
            [[ 'item_id', 'cus_fname', 'cus_lname', 'order_date_created'], 'safe'],
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
        $query = Orders::find();

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

        $query->joinWith('items');

        // grid filtering conditions
        $query->andFilterWhere([
            'order_id' => $this->order_id,
            'item_id' => $this->item_id,
            'qty' => $this->qty,
            'order_date_created' => $this->order_date_created,
        ]);

        $query->andFilterWhere(['like', 'cus_fname', $this->cus_fname])
            ->andFilterWhere(['like', 'cus_lname', $this->cus_lname])
           ->andFilterWhere(['like', 'items.item_name', $this->item_id]);

        return $dataProvider;
    }
}
