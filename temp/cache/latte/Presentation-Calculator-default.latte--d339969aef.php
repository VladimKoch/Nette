<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Calculator/default.latte */
final class Template_d339969aef extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Calculator/default.latte';

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

		echo '<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo '</div>

<div id="content">
';
		if (isset($result)) /* line 7 */ {
			echo '	<h2>Výsledek je: ';
			echo LR\Filters::escapeHtmlText($result) /* line 7 */;
			echo '</h2>
';
		}
		$ʟ_tmp = $this->global->uiControl->getComponent('calculatorForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 8 */;

		echo '

	<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 11 */;
		echo '">Zpět</a>
</div>';
	}


	/** n:block="title" on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Kalkulačka!</h1>
';
	}
}
