<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задать вопрос");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"template",
	Array(
		"EMAIL_TO" => "info@club-tigrenok.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваш вопрос принят. В ближайшее время мы с вами свяжемся по указанному E-Mail адресу.",
		"REQUIRED_FIELDS" => array("NAME","EMAIL","MESSAGE"),
		"USE_CAPTCHA" => "Y"
	)
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>