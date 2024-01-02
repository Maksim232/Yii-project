<?php
use yii\widgets\ActiveForm;
use app\models\Reception;
use yii\helpers\Url;
use yii\helpers\Html;
$trAvtozapravka = Url::to(['zapravka/toplivocrup']);

$this->title="Топливо";
?>
<?php $form = ActiveForm::begin(); ?>

<div class='container'>
    <h1>таблица "Топливо"</h1>
    <a onclick="document.location='<?=$trAvtozapravka?>'" class="btn btn-secondary">Добавить запись</a>
    <table>
        <tr>
            <th>vid_topliva</th>
            <th>ed_izmirenia</th>
            <th>cena</th>
            <th>Изменение</th>
            <th>Удаление</th>
        </tr>
        <?php foreach($ToplivoZp as $ToplivoZp){ ?>
<tr>
            <td><?= $ToplivoZp['vid_topliva'] ?></td>
            <td><?= $ToplivoZp['ed_izmirenia'] ?></td>
            <td><?= $ToplivoZp['cena'] ?></td>
            <td><?= HTML::a('&#9998', ['zapravka/toplivocrup','id' => $ToplivoZp['id_topliva']]) ?></td> 
            <td><?= HTML::a('&#10006', ['zapravka/toplivodel','id' => $ToplivoZp['id_topliva']],[ 
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