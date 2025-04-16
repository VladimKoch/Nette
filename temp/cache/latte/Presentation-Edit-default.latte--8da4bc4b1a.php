<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Edit/default.latte */
final class Template_8da4bc4b1a extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Edit/default.latte';

	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '



<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo '</div>

<div id="content">

    <h2>';
		echo LR\Filters::escapeHtmlText($post->title) /* line 12 */;
		echo '</h2>
    <p>';
		echo LR\Filters::escapeHtmlText($post->content) /* line 13 */;
		echo '</p>

';
		$ʟ_tmp = $this->global->uiControl->getComponent('postForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 15 */;

		echo '
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 17 */;
		echo '">Zpět na hlavní stránku</a>

</div>
';
	}


	/** n:block="title" on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Congratulations!</h1>
';
	}
}
