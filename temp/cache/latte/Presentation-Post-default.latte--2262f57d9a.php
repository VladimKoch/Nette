<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Post/default.latte */
final class Template_2262f57d9a extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Post/default.latte';

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
			foreach (array_intersect_key(['comment' => '19'], $this->params) as $ʟ_v => $ʟ_l) {
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
   <div id="current-time"></div>
   

<div id="content">

    <h2>';
		echo LR\Filters::escapeHtmlText($post->title) /* line 11 */;
		echo '</h2>
    <p>';
		echo LR\Filters::escapeHtmlText($post->content) /* line 12 */;
		echo '</p>
    <p><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 13 */;
		echo '">zpět na příspěvky</a></p>
   ';
		if ($user->isLoggedIn()) /* line 14 */ {
			echo ' <p><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:default', [$post->id])) /* line 14 */;
			echo '">Upravit příspěvek</a></p>';
		}
		echo '
    <h2>Vložit nový komentář</h2>
';
		$ʟ_tmp = $this->global->uiControl->getComponent('commentForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 16 */;

		echo '
    <h2>Komentáře:</h2>
';
		foreach ($comments as $comment) /* line 19 */ {
			echo '    <div>
    <strong>';
			echo LR\Filters::escapeHtmlText($comment->name) /* line 20 */;
			echo '</strong>
    <p>';
			echo LR\Filters::escapeHtmlText($comment->content) /* line 21 */;
			echo '</p>
    </div>
';

		}

		echo '
</div>
';
	}


	/** n:block="title" on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Congratulations!</h1>
';
	}
}
