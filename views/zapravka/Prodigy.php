<?php

use app\models\Klients;
use yii\widgets\ActiveForm;
use app\models\Reception;
use yii\helpers\Url;
use yii\helpers\Html;
$trAvtozapravka = Url::to(['zapravka/prodigycrup']);
$this->title="Продажи";
?>
<?php $form = ActiveForm::begin(); ?>
<div class='container'>
    <h1>таблица "Продажи"</h1>
    <a onclick="document.location='<?=$trAvtozapravka?>'" class="btn btn-secondary">Добавить запись</a>
    
    <table>
        <tr>
            <th>date_prodag</th>
            <th>card_chet_klient</th>
            <th>id_avtozapravki</th>
            <th>id_topliva</th>
            <th>kolichestvo</th>
            <th>Изменение</th>
            <th>Удаление</th>
        </tr>
        <?php foreach($ProdigyZp as $ProdigyZp){ ?>
<tr>
            <td><?= $ProdigyZp['date_prodag'] ?></td>
            <td><?= $ProdigyZp['klients']['fio'] ?></td>
            <td><?= $ProdigyZp['id_avtozapravki'] ?></td>
            <td><?= $ProdigyZp['toplivo']['id_topliva'] ?></td>
            <td><?= $ProdigyZp['kolichestvo'] ?></td>
            <td><?= HTML::a('&#9998', ['zapravka/prodigycrup','id' => $ProdigyZp['id']]) ?></td> 
            <td><?= HTML::a('&#10006', ['zapravka/prodigydel','id' => $ProdigyZp['id']],[ 
               'class' => 'btn-table', 'data' => ['confirm' => ('Вы уверены что хотите удалить запись?')] 
            ]) ?></td>
</tr>
<?php } ?>
    </table>

</div>

<?php ActiveForm::end(); ?>
<style>

table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}

thead th:nth-child(1) {
  width: 30%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 35%;
}

th,
td {
  padding: 20px;
}
</style>