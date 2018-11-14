<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

							</div>
							
						</div>
							
					</div>	
				
				</div>
				
			</div>
	
			<!--<div id="space-for-footer"></div>-->
			<?if($APPLICATION->GetCurPage(false)==SITE_DIR){?>
				<div class="img_home">
				<?$APPLICATION->IncludeFile(
						SITE_DIR."include/home_text.php",
						Array(),
						Array("MODE"=>"html")
					);?>
					
				</div>
			<?} else {?>
				<a href="#" class="scrollup">Наверх</a>
				<div id="telephone">
							<nobr><?$APPLICATION->IncludeFile(
									SITE_DIR."include/phone.php",
									Array(),
									Array("MODE"=>"html")
								);?></nobr>
							</div>
			<?}?>
		</div>
		
		<div id="footer">
		
			
			<div id="informer">
				<!-- Yandex.Metrika informer -->
				<a href="https://metrika.yandex.ru/stat/?id=51133997&amp;from=informer"
				target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/51133997/3_0_FFFFFFFF_EDEDEDFF_0_pageviews"
				style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="51133997" data-lang="ru" /></a>
				<!-- /Yandex.Metrika informer -->
			</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter51133997 = new Ya.Metrika2({
                    id:51133997,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51133997" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="copyright">
			<?$APPLICATION->IncludeFile(
									SITE_DIR."include/copyright.php",
									Array(),
									Array("MODE"=>"html")
								);?>
			</div>
			<div id="bottom-menu">			
			<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
				"ROOT_MENU_TYPE" => "bottom",
				"MENU_CACHE_TYPE" => "Y",
				"MENU_CACHE_TIME" => "36000000",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MAX_LEVEL" => "1",
				"CHILD_MENU_TYPE" => "bottom",
				"USE_EXT" => "N",
				"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?>
			</div>
		</div>	
		
</body>
</html>