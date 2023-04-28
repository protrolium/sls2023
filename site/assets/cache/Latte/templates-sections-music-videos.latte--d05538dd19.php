<?php

use Latte\Runtime as LR;

/** source: /Applications/MAMP/htdocs/sls2023/site/templates/sections/music-videos.latte */
final class Templated05538dd19 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<main class="page-content">
    <div class="uk-padding-small">
        
        <div class="uk-flex uk-flex-column uk-width-1-1 uk-height-viewport">
            
            <div class="uk-clearfix uk-blend-luminosity uk-hidden@m" uk-height-match>
                <div class="uk-inline">
                    <p class="uk-heading-small uk-text-lighter">
                    <a class="uk-text-secondary" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($page->parent->url)) /* line 10 */;
		echo '" alt="">
                        ';
		echo LR\Filters::escapeHtmlText(($this->filters->upper)($page->parent->title)) /* line 11 */;
		echo '</a> 
                        → <span class="uk-text-nowrap">';
		echo LR\Filters::escapeHtmlText(($this->filters->upper)($page->artist->first->title)) /* line 12 */;
		echo '</span>
                    </p>
                </div>

                <div class="uk-float-right uk-visible@m">
                    <p class="uk-heading-small uk-text-uppercase uk-text-lighter">
                        <span class="uk-text-muted">';
		echo ($this->filters->upper)($page->title) /* line 18 */;
		echo '</span>
                    </p>
                </div>
            </div>
            
            <div class="uk-clearfix uk-blend-luminosity uk-visible@m" uk-height-match uk-sticky="sel-target: .uk-navbar-container; end: !.page-content;">
                <div class="uk-inline">
                    <p class="uk-heading-small uk-text-lighter">
                    <a class="uk-text-secondary" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($page->parent->url)) /* line 27 */;
		echo '" alt="">
                        ';
		echo LR\Filters::escapeHtmlText(($this->filters->upper)($page->parent->title)) /* line 28 */;
		echo '</a> 
                        → <span class="uk-text-nowrap">';
		echo LR\Filters::escapeHtmlText(($this->filters->upper)($page->artist->first->title)) /* line 29 */;
		echo '</span>
                    </p>
                </div>

                <div class="uk-float-right uk-visible@m">
                    <p class="uk-heading-small uk-text-uppercase uk-text-lighter">
                        <span class="uk-text-muted">';
		echo ($this->filters->upper)($page->title) /* line 35 */;
		echo '</span>
                    </p>
                </div>
            </div>

            <div class="">

                <div 
                    class="page-item uk-width-1-1 video-container" 
                    uk-flex uk-scrollspy="cls:uk-animation-fade">
                        ';
		echo $page->get('video_embed_1') /* line 46 */;
		echo '
                </div>
                
                <div class="page-item uk-flex uk-grid-collapse" uk-grid uk-scrollspy="cls:uk-animation-fade">
                    <div class="uk-text-large uk-text-light uk-padding-large uk-width-1-2@m silkscreen-text">
                        
                        <p class="uk-margin-remove">
                            <span class="project-item-categories uk-text-small">Title:</span><br>
                            <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-padding-remove-right">
                                <span class="uk-text-lighter">';
		echo $page->title /* line 56 */;
		echo '</span>
                            </div>
                        
                        <p class="uk-margin-remove">
                            <span class="project-item-categories uk-text-small">Artist:</span><br>
                                <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-padding-remove-right">
';
		foreach ($page->artist as $artist) /* line 63 */ {
			echo '                                        <span class="uk-text-lighter">
                                            <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($artist->url)) /* line 65 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($artist->title) /* line 65 */;
			echo '</a>                                
                                        </span>
';

		}

		echo '                                </div>
                        
';
		if (($page ?? null)?->collaborator != '') /* line 71 */ {
			echo '                            <p class="uk-margin-remove">
                                <span class="project-item-categories uk-text-small">Collaborators:</span><br>
                                <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-padding-remove-right">
';
			foreach ($page->collaborator as $collaborator) /* line 75 */ {
				echo '                                        <span class="uk-text-lighter">
                                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($collaborator->url)) /* line 77 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($collaborator->title) /* line 77 */;
				echo '</a>
                                        </span>
';

			}

			echo '                                </div>
';
		}
		echo '
                        <p class="uk-margin-remove">
                            <span class="project-item-categories uk-text-small">Release Date:</span><br>
                            <span class="uk-text-lighter uk-padding-small">';
		echo LR\Filters::escapeHtmlText($page->date) /* line 86 */;
		echo '</span>

                        <p class="uk-margin-remove">
                            <span class="project-item-categories uk-text-small">Label:</span><br>
';
		foreach ($page->record_label as $label) /* line 91 */ {
			echo '                                <span class="uk-text-lighter uk-padding-small">                            
                                    <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($label->hyperlink)) /* line 93 */;
			echo '" target="_blank">';
			echo LR\Filters::escapeHtmlText($label->title) /* line 93 */;
			echo '</a>
                                </span>
';

		}

		echo '                            
                        </p>
                    </div>

                    ';
		echo LR\Filters::escapeHtmlText($rockfrontend->render('/sections/includes/project-body-text.latte')) /* line 101 */;
		echo '
                </div>

';
		if (($page ?? null)?->video_embed_2) /* line 105 */ {
			echo '                    <div class="page-item uk-width-1-1 video-container uk-margin-small" uk-flex>
                        ';
			echo $page->get('video_embed_2') /* line 107 */;
			echo '
                    </div>
';
		}
		echo '
                ';
		echo LR\Filters::escapeHtmlText($rockfrontend->render('/sections/includes/gallery.latte')) /* line 112 */;
		echo '

';
		if (($page ?? null)?->video_embed_3) /* line 115 */ {
			echo '                    <div class="page-item uk-width-1-1 video-container uk-margin-small" uk-flex>
                        ';
			echo $page->get('video_embed_3') /* line 117 */;
			echo '
                    </div>
';
		}
		echo '                
            </div>
        
        </div>

    </div>

</main>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['artist' => '63', 'collaborator' => '75', 'label' => '91'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
