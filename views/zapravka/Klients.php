<?php
use yii\widgets\ActiveForm;
use app\models\Reception;
use yii\helpers\Url;
use yii\helpers\Html;
$trAvtozapravka = Url::to(['zapravka/klientscrup']);

$this->title="Клиенты";
?>
<?php $form = ActiveForm::begin(); ?>

<div class='container'>
    <h1>таблица "Клиенты"</h1>
    <a onclick="document.location='<?=$trAvtozapravka?>'" class="btn btn-secondary">Добавить запись</a>
    <table>
        <tr>
            <th>fio</th>
            <th>adress</th>
            <th>phonenumder</th>
            <th>Изменение</th>
            <th>Удаление</th>
        </tr>
        <?php foreach($KlientsZp as $KlientsZp){ ?>
<tr>
            <td><?= $KlientsZp['fio'] ?></td>
            <td><?= $KlientsZp['adress'] ?></td>
            <td><?= $KlientsZp['phonenumder'] ?></td>
            <td><?= HTML::a('&#9998', ['zapravka/klientscrup','id' => $KlientsZp['id']]) ?></td> 
            <td><?= HTML::a('&#10006', ['zapravka/klientsdel','id' => $KlientsZp['id']],[ 
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