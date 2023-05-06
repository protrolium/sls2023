<?php

use Latte\Runtime as LR;

/** source: /Applications/MAMP/htdocs/sls2023/site/templates/sections/hero.latte */
final class Templatedabb6b2f1e extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section>
';
		if (isMobileDevice() == true) /* line 2 */ {
			echo '        <div 
            class="uk-background-cover" 
            data-src="';
			echo LR\Filters::escapeHtmlAttr($pages->find('id=1059|1060|1064|1192|1259|1075|1271|1267|1084|1074|1208')->shuffle()->first->featured_image->first->url) /* line 5 */;
			echo '" 
            uk-img
        >
';
		}
		echo '
        <div class="uk-height-viewport uk-cover-container">
';
		if (isMobileDevice() != true) /* line 11 */ {
			echo '                <video width="1280" height="720" autoplay playsinline loop muted uk-cover>
                    <source src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($config->urls->assets)) /* line 13 */;
			echo 'video/reel-no-text-1024k.webm" type="video/webm; codecs=vp9">
                    <source src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($config->urls->assets)) /* line 14 */;
			echo 'video/reel-no-text-1024k.mp4" type="video/mp4" width="1280" height="720">
                </video>
                
';
		}
		echo '        </div>

</section>';
	}
}
