<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p>
	Блок с информацией
</p>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
Array()
);?><br>
</p>
<p>
	<br>
</p>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>