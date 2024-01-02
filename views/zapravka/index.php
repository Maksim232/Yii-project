<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

$trAvtozapravka = Url::to(['/zapravka/avtozapravka']);
$trFirma = Url::to(['/zapravka/firma']);
$trKlients = Url::to(['/zapravka/klients']);
$trProdigy = Url::to(['/zapravka/prodigy']);
$trSvaz = Url::to(['/zapravka/zaprosi']);
$trToplivo = Url::to(['/zapravka/toplivo']);

?>

<div class="Lab2">
<h1>Запросы для лабы #2</h1>
</div>
<h2>База данных Автозаправок</h2>
<div class="d-grid gap-3 col-2 mx-auto">
<button onclick="document.location='<?=$trAvtozapravka?>'" class="btn btn-outline-secondary">Avtozapravki</button>
<button onclick="document.location='<?=$trFirma?>'" class="btn btn-outline-secondary">Firma</button>
<button onclick="document.location='<?=$trKlients?>'" class="btn btn-outline-secondary">Klients</button>
<button onclick="document.location='<?=$trProdigy?>'" class="btn btn-outline-secondary">Prodagy</button>
<button onclick="document.location='<?=$trToplivo?>'" class="btn btn-outline-secondary">Toplivo</button>
<button onclick="document.location='<?=$trSvaz?>'" class="btn btn-outline-secondary">Запросы</button>
</div>
