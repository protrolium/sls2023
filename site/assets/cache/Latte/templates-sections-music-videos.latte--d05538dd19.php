<?php

use Latte\Runtime as LR;

/** source: /Applications/MAMP/htdocs/sls2023/site/templates/sections/music-videos.latte */
final class Templated05538dd19 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<main>
    <h1>';
		echo LR\Filters::escapeHtmlText($page->artist) /* line 2 */;
		echo ' ';
		echo LR\Filters::escapeHtmlText($page->title) /* line 2 */;
		echo '</h1>
';
		if ($page->editable()) /* line 3 */ {
			echo '    <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($page->editUrl())) /* line 3 */;
			echo '">edit</a>
';
		}
		echo '
    <div>
    ';
		echo $page->get('video_embed') /* line 6 */;
		echo '
    </div>

</main>';
	}
}
