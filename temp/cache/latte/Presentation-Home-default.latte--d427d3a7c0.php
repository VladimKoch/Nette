<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Home/default.latte */
final class Template_d427d3a7c0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Home/default.latte';

	public const Blocks = [
		0 => ['content' => 'blockContent', 'title' => 'blockTitle'],
		'snippet' => ['mySnippet' => 'blockMySnippet'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '33'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 5 */;
		echo '</div>

   <div id="current-time"></div>
<div id="content">
';
		if ($user->loggedIn) /* line 10 */ {
			echo '	<h2>Ahoj ';
			echo LR\Filters::escapeHtmlText($username) /* line 10 */;
			echo '</h2>
';
		}
		if (!$user->isLoggedIn()) /* line 11 */ {
			echo '	<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:login')) /* line 11 */;
			echo '">Login</a> | <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:sign')) /* line 11 */;
			echo '">SginUp</a>
';
		} else /* line 12 */ {
			echo '	<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 12 */;
			echo '">Odhlásit se</a>|<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Table:default')) /* line 12 */;
			echo '">Tabulka</a>|<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Api:default')) /* line 12 */;
			echo '">Api</a>|<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Calculator:default')) /* line 12 */;
			echo '">Kalkulačka</a>|<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ImgApi:default')) /* line 12 */;
			echo '">ImgConvert</a>|<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Tomaj:default')) /* line 12 */;
			echo '">Users</a>';
		}
		echo '
	
	<br>
	<br>

	<div class="pagination">';
		if ($page > 1) /* line 17 */ {
			echo '

				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [1])) /* line 19 */;
			echo '">První</a>
				&nbsp;|&nbsp;
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [$page - 1])) /* line 21 */;
			echo '">Předchozí</a>
				&nbsp;|&nbsp;
				';
		}
		echo 'Stránka ';
		echo LR\Filters::escapeHtmlText($page) /* line 23 */;
		echo ' z ';
		echo LR\Filters::escapeHtmlText($lastPage) /* line 23 */;
		echo '

';
		if ($page < $lastPage) /* line 25 */ {
			echo '				&nbsp;|&nbsp;
					<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [$page + 1])) /* line 27 */;
			echo '">Další</a>&nbsp;|&nbsp;<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [$lastPage])) /* line 27 */;
			echo '">Poslední</a>
';
		}
		echo '	</div>

	<br>

';
		foreach ($posts as $post) /* line 33 */ {
			echo '	<div class="posts">
		<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Post:default', [$post->id])) /* line 34 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($post->title) /* line 34 */;
			echo '</a>
		<p>';
			echo LR\Filters::escapeHtmlText($post->content) /* line 35 */;
			echo '</p>
		<br>
	</div>
';

		}

		echo '
	<div>
';
		if ($user->isLoggedIn()) /* line 40 */ {
			echo '	<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Post:new')) /* line 40 */;
			echo '">Vložit nový příspěvek</a>';
		}
		echo '
	</div>




	
	<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('click!')) /* line 47 */;
		echo '" class="btn btn-primary ajax">Zapamatuj čas</a>






	
	';
		echo '<div id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('mySnippet')), '">';
		$this->renderBlock('mySnippet', [], null, 'snippet') /* line 55 */;
		echo '</div>



</div>






';
	}


	/** n:block="title" on line 5 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Congratulations!</h1>
';
	}


	/** {snippet mySnippet} on line 55 */
	public function blockMySnippet(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('mySnippet', 'static') /* line 55 */;
		try {
			echo '
		<div>
		<p>čas:';
			echo LR\Filters::escapeHtmlText($time) /* line 57 */;
			echo '</p>
		</div>
	';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}
}
