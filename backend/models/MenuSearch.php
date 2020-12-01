<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Menu;

/**
 * MenuSearch represents the model behind the search form of `common\models\Menu`.
 */
class MenuSearch extends Menu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'page_id', 'c_order', 'target_blank', 'status', 'visible_top', 'visible_side'], 'integer'],
            [['name_uz', 'name_en', 'name_ru', 'link', 'slug_uz', 'slug_en', 'slug_ru'], 'safe'],
            [['position'],  'default', 'value' => 1],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Menu::find();

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
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'page_id' => $this->page_id,
            'c_order' => $this->c_order,
            'target_blank' => $this->target_blank,
            'status' => $this->status,
            'visible_top' => $this->visible_top,
            'visible_side' => $this->visible_side,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'slug_uz', $this->slug_uz])
            ->andFilterWhere(['like', 'slug_en', $this->slug_en])
            ->andFilterWhere(['like', 'slug_ru', $this->slug_ru]);

        return $dataProvider;
    }
}
