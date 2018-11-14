<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<!--<meta name="viewport" content="width=width=device-width, initial-scale=0.4">-->
	
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />
	
	<?$APPLICATION->ShowHead();?>
	
	<!--[if lte IE 6]>
	<style type="text/css">
		
		#support-question { 
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/question.png', sizingMethod = 'crop'); 
		}
		
		#support-question { left: -9px;}
		
		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/overlay.png', sizingMethod = 'crop');
		}
		
	</style>
	<![endif]-->
	

	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/script.js"></script>

</head>
<body>

	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div id="page-wrapper">
		
			<div style="font-size:28px;position:absolute;top:340px;left:40px;z-index:100;color:red;text-shadow: 2px 2px 0px #fff;">ВНИМАНИЕ! Клуб пока не работает. Открытие в 2019 г.</div>
			<div class="ramka ugol_left_top"></div>
			<div class="ramka ramka_top"></div>
			<div class="ramka ugol_right_top"></div>
			<div class="ramka ramka_right"></div>
			<div class="ramka ugol_right_bottom"></div>
			<div class="ramka ramka_bottom"></div>
			<div class="ramka ugol_left_bottom"></div>
			<div class="ramka ramka_left"></div>
			
		
			
	
			<div id="header">
			<?if($APPLICATION->GetCurPage(false)==SITE_DIR){?>
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/company_name.php",
					Array(),
					Array("MODE"=>"html")
				);?>
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/header_img_start.php",
					Array(),
					Array("MODE"=>"html")
				);?>
				
			<?} else {?>
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/header_img_all.php",
					Array(),
					Array("MODE"=>"html")
				);?>
				<a href="/contacts/feedback/"><button type="button" class="top_button"><img src="/images/konvert.png"> <div>Обратная связь</div></button></a>
				<div id="left-menu">
						
						<br />
						<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
							"ROOT_MENU_TYPE" => "left",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
						</div>	
<!--						
				<div id="breadcrumb">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
						"START_FROM" => "1",
						"PATH" => "",
						"SITE_ID" => SITE_ID
						),
						false
					);?>
				</div>
				-->
			<?}?>

				
				<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
					"ROOT_MENU_TYPE" => "top",
					"MENU_CACHE_TYPE" => "Y",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "N",
					"ALLOW_MULTI_SELECT" => "N"
					),
					false
				);?>
			</div>


				
		
			<div id="content-wrapper">
				<div id="content">
					<div id="workarea-wrapper">		
						<div id="workarea">
							<div id="workarea-inner">
							<?if($APPLICATION->GetCurPage(false)!=SITE_DIR){?>
								<br /><h5><?$APPLICATION->ShowTitle(false);?></h5> 
							<?}?>
