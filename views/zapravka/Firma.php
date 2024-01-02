<?php
use yii\widgets\ActiveForm;
use app\models\Reception;
use yii\helpers\Url;
use yii\helpers\Html;
$trAvtozapravka = Url::to(['zapravka/firmacrup']);

$this->title="Фирмы";
?>
<?php $form = ActiveForm::begin(); ?>

<div class='container'>
    <h1>таблица "Фирмы"</h1>
    <a onclick="document.location='<?=$trAvtozapravka?>'" class="btn btn-secondary">Добавить запись</a>
    <table>
        <tr>
            <th>name_firm</th>
            <th>ur_adress</th>
            <th>phone</th>
            <th>Изменение</th>
            <th>Удаление</th>
        </tr>
        <?php foreach($FirmaZp as $FirmaZp){ ?>
<tr>
            <td><?= $FirmaZp['name_firm'] ?></td>
            <td><?= $FirmaZp['ur_adress'] ?></td>
            <td><?= $FirmaZp['phone'] ?></td>
            <td><?= HTML::a('&#9998', ['zapravka/firmacrup','id' => $FirmaZp['id']]) ?></td> 
            <td><?= HTML::a('&#10006', ['zapravka/firmadel','id' => $FirmaZp['id']],[ 
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