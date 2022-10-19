<?php

use Latte\Runtime as LR;

/** source: /Applications/MAMP/htdocs/sls2023/site/templates/sections/header.latte */
final class Templateae866fc442 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<header>
    <!-- This is a button toggling the off-canvas -->
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-right">
            <button class="hamburger-nav" uk-toggle="target: #menu" type="button">
                <span uk-icon="icon: menu; ratio: 1.5;"></span>
            </button>
        </div>
    </nav>

    <!-- This is the off-canvas menu -->
    <div id="menu" uk-offcanvas="flip: true; mode: slide;">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <nav id="tm-menu" class="tm-boxed-padding" uk-navbar>
                <div class="uk-navbar">
                    <ul style="list-style: none;">
                        <li><a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($home->url)) /* line 19 */;
		echo '">';
		echo LR\Filters::escapeHtmlText($pages->get('/')->title) /* line 19 */;
		echo '</a></li>
';
		foreach ($home->children() as $item) /* line 20 */ {
			echo '                        <li>
                            <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->url)) /* line 21 */;
			echo '"';
			echo ($ʟ_tmp = array_filter([$rockfrontend->isActive($item) ? 'uk-active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 21 */;
			echo '>
                                ';
			echo LR\Filters::escapeHtmlText($item->title) /* line 22 */;
			echo '
                            </a>
                            <!-- displaying children in a dropdown -->
                        </li>
';

		}

		echo '                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['item' => '20'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
