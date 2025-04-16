<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Api/default.latte */
final class Template_cbefb8b381 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Api/default.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['data' => '8'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
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
		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo '</div>
    <div id="content">
    <ul>
';
		foreach ($datas as $data) /* line 8 */ {
			echo '            <li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Api:show', [$data['id']])) /* line 9 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($data['id']) /* line 9 */;
			echo ': ';
			echo LR\Filters::escapeHtmlText($data['title']) /* line 9 */;
			echo '</a></li>
';

		}

		echo '    </ul>

    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 13 */;
		echo '" class="text-warning">Zpět</a>
    </div>

';
	}


	/** n:block="title" on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Data</h1>
';
	}
}
