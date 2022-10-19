<?php

use Latte\Runtime as LR;

/** source: /Applications/MAMP/htdocs/sls2023/site/templates/sections/main.latte */
final class Template9535e532be extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<main>
    I am the rendered MAIN and you are viewing ';
		echo LR\Filters::escapeHtmlText($page->title) /* line 2 */;
		echo "\n";
		if ($page->editable()) /* line 3 */ {
			echo '    <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($page->editUrl())) /* line 3 */;
			echo '">edit</a>
';
		}
		echo '
    <div>
    ';
		echo $page->get('body') /* line 6 */;
		echo '
    </div>

</main>';
	}
}
