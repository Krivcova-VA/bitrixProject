<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Заголовок окна браузера");
$APPLICATION->SetPageProperty("keywords", "Отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы ");
?>

<p>заголовок - <?$APPLICATION->ShowTitle()?></p>
<p>заголовок2 - <?$APPLICATION->ShowTitle(false)?></p>
<p>test - <?$APPLICATION->ShowProperty("test")?></p>
<p>title - <?$APPLICATION->ShowProperty("title")?></p>
<p>keywords - <?$APPLICATION->ShowProperty("keywords")?></p>
<p>description - <?$APPLICATION->ShowProperty("description")?></p>

<?$APPLICATION->SetPageProperty("test", "значение 2");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>