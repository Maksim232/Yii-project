<?php
use yii\widgets\ActiveForm;
use app\models\Reception;
use yii\helpers\Url;
use yii\helpers\Html;
$trAvtozapravka = Url::to(['zapravka/avtozapravkacrup']);

$this->title="Заправки";
?>

<?php $form = ActiveForm::begin(); ?>

<div class='container'>
    <h1>таблица "Заправки"</h1>
    <a onclick="document.location='<?=$trAvtozapravka?>'" class="btn btn-secondary">Добавить запись</a>
    <table>
        <tr>
            <th>id_avtozapravki</th>
            <th>name_firm</th>
            <th>adress</th>
            <th>vid_topliva</th>
            <th>cena</th>
            <th>Изменение</th>
            <th>Удаление</th>
        </tr>
        <?php foreach($AvtoZp as $AvtoZp){ ?>
<tr>
            <td><?= $AvtoZp['id_avtozapravki'] ?></td>
            <td><?= $AvtoZp['name_firm'] ?></td>
            <td><?= $AvtoZp['adress'] ?></td>
            <td><?= $AvtoZp['vid_topliva'] ?></td>
            <td><?= $AvtoZp['cena'] ?></td>
            <td><?= HTML::a('&#9998', ['zapravka/avtozapravkacrup','id' => $AvtoZp['id_kolonki']]) ?></td> 
            <td><?= HTML::a('&#10006', ['zapravka/avtozapravkadel','id' => $AvtoZp['id_kolonki']],[ 
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