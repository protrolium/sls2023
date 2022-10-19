<?php

use Latte\Runtime as LR;

/** source: /Applications/MAMP/htdocs/sls2023/site/templates/sections/nav-menu.latte */
final class Template890031c663 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!-- This is the off-canvas sidebar -->
<div id="menu" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
        <nav
            id="tm-menu"
            class="tm-boxed-padding"
            uk-navbar
>
            <div class="uk-navbar-center uk-visible@m">
                <ul class="uk-navbar-nav">
';
		foreach ($home->children() as $item) /* line 12 */ {
			echo '                <li>
                    <a
                    href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->url)) /* line 14 */;
			echo '"';
			echo ($ʟ_tmp = array_filter([$rockfrontend->isActive($item) ? 'uk-active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 15 */;
			echo '
                    >
                    ';
			echo LR\Filters::escapeHtmlText($item->title) /* line 17 */;
			echo '
                    </a>
';
			if ($item->numChildren()) /* line 21 */ {
				echo '                    <div
                    class="uk-navbar-dropdown"
                    >
                    <ul class="uk-nav uk-navbar-dropdown-nav">
';
				foreach ($item->children() as $child) /* line 25 */ {
					echo '                        <li';
					echo ($ʟ_tmp = array_filter([$rockfrontend->isActive($child) ? 'uk-active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 26 */;
					echo '
                        >
                        <a href="';
					echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($child->url)) /* line 28 */;
					echo '">';
					echo LR\Filters::escapeHtmlText($child->title) /* line 28 */;
					echo '</a>
                        </li>
';

				}

				echo '                    </ul>
                    </div>
';
			}
			echo '                </li>
';

		}

		echo '                </ul>
            </div>
            </nav>
        </ul>
    </div>
</div>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['item' => '12', 'child' => '25'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
