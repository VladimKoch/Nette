<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Post/new.latte */
final class Template_ab87ea2ca7 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Post/new.latte';

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

		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '



<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 8 */;
		echo '</div>

<div id="content">


';
		$ʟ_tmp = $this->global->uiControl->getComponent('postForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 14 */;

		echo '
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 16 */;
		echo '">Zpět na hlavní stránku</a>

</div>
';
	}


	/** n:block="title" on line 8 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Congratulations!</h1>
';
	}
}
