<?php
use kartik\tree\TreeView;
use app\models\TreeTable;

echo TreeView::widget([
    // single query fetch to render the tree
    'query' =>  TreeTable::find()->addOrderBy('name'),
    'headingOptions' => ['label' => 'Categories'],
    'fontAwesome' => false,     // optional
    'isAdmin' => false,         // optional (toggle to enable admin mode)
    'displayValue' => 1,        // initial display value
    //'softDelete' => true,    // normally not needed to change
    //'cacheSettings' => ['enableCache' => true] // normally not needed to change
]);