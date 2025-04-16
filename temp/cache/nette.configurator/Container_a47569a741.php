<?php
// source: C:\xampp\htdocs\web/config/common.neon
// source: C:\xampp\htdocs\web/config/services.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_a47569a741 extends Nette\DI\Container
{
	protected array $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'database.default.context' => 'database.default.explorer',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.explorer',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected array $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.explorer']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [
			2 => [
				'01',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\Routers\RouteList' => [['01']],
		'App\Model\ArticleManager' => [['02']],
		'Nette\Security\Authenticator' => [['03']],
		'Nette\Security\IAuthenticator' => [['03']],
		'App\Model\Auth' => [['03']],
		'App\Model\UserManager' => [['04']],
		'App\Model\ImageUploadFormFactory' => [['05']],
		'App\Model\PostManager' => [['06']],
		'App\Model\CalculatorManager' => [['07']],
		'Tomaj\NetteApi\Handlers\BaseHandler' => [['08']],
		'Tomaj\NetteApi\Handlers\ApiHandlerInterface' => [['08']],
		'App\MyApi\v1\Handlers\UsersListingHandler' => [['08']],
		'Tomaj\NetteApi\Link\ApiLink' => [['09']],
		'Tomaj\NetteApi\Misc\IpDetectorInterface' => [['010']],
		'Tomaj\NetteApi\Misc\IpDetector' => [['010']],
		'App\MyApi\v1\Forms\ImgForm' => [['011']],
		'Tomaj\NetteApi\Output\Configurator\ConfiguratorInterface' => [['apiOutputConfigurator']],
		'Tomaj\NetteApi\Output\Configurator\DebuggerConfigurator' => [['apiOutputConfigurator']],
		'Tomaj\NetteApi\Error\ErrorHandlerInterface' => [['apiErrorHandler']],
		'Tomaj\NetteApi\Error\DefaultErrorHandler' => [['apiErrorHandler']],
		'Tomaj\NetteApi\ApiDecider' => [['apiDecider']],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
			],
		],
		'App\Presentation\Api\ApiPresenter' => [2 => ['application.1']],
		'App\Presentation\Calculator\CalculatorPresenter' => [2 => ['application.2']],
		'App\Presentation\Edit\EditPresenter' => [2 => ['application.3']],
		'App\Presentation\Error\Error4xx\Error4xxPresenter' => [2 => ['application.4']],
		'App\Presentation\Error\Error5xx\Error5xxPresenter' => [2 => ['application.5']],
		'App\Presentation\Home\HomePresenter' => [2 => ['application.6']],
		'App\Presentation\ImgApi\ImgApiPresenter' => [2 => ['application.7']],
		'App\Presentation\Post\PostPresenter' => [2 => ['application.8']],
		'App\Presentation\Sign\SignPresenter' => [2 => ['application.9']],
		'App\Presentation\Table\TablePresenter' => [2 => ['application.10']],
		'App\Presentation\Tomaj\TomajPresenter' => [2 => ['application.11']],
		'NetteModule\ErrorPresenter' => [2 => ['application.12']],
		'NetteModule\MicroPresenter' => [2 => ['application.13']],
		'App\MyApi\v1\Handlers\UsersRepository' => [['012']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Core\RouterFactory::createRouter();
	}


	public function createService02(): App\Model\ArticleManager
	{
		return new App\Model\ArticleManager($this->getService('database.default.explorer'));
	}


	public function createService03(): App\Model\Auth
	{
		return new App\Model\Auth($this->getService('database.default.explorer'));
	}


	public function createService04(): App\Model\UserManager
	{
		return new App\Model\UserManager($this->getService('database.default.explorer'));
	}


	public function createService05(): App\Model\ImageUploadFormFactory
	{
		return new App\Model\ImageUploadFormFactory;
	}


	public function createService06(): App\Model\PostManager
	{
		return new App\Model\PostManager($this->getService('database.default.explorer'));
	}


	public function createService07(): App\Model\CalculatorManager
	{
		return new App\Model\CalculatorManager;
	}


	public function createService08(): App\MyApi\v1\Handlers\UsersListingHandler
	{
		return new App\MyApi\v1\Handlers\UsersListingHandler($this->getService('012'));
	}


	public function createService09(): Tomaj\NetteApi\Link\ApiLink
	{
		return new Tomaj\NetteApi\Link\ApiLink($this->getService('application.linkGenerator'));
	}


	public function createService010(): Tomaj\NetteApi\Misc\IpDetector
	{
		return new Tomaj\NetteApi\Misc\IpDetector;
	}


	public function createService011(): App\MyApi\v1\Forms\ImgForm
	{
		return new App\MyApi\v1\Forms\ImgForm;
	}


	public function createService012(): App\MyApi\v1\Handlers\UsersRepository
	{
		return new App\MyApi\v1\Handlers\UsersRepository($this->getService('database.default.explorer'));
	}


	public function createServiceApiDecider(): Tomaj\NetteApi\ApiDecider
	{
		$service = new Tomaj\NetteApi\ApiDecider($this);
		$service->addApi(
			new \Tomaj\NetteApi\EndpointIdentifier('GET', 1, 'users'),
			new \App\MyApi\v1\Handlers\UsersListingHandler($this->getService('012')),
			new \Tomaj\NetteApi\Authorization\NoAuthorization,
		);
		return $service;
	}


	public function createServiceApiErrorHandler(): Tomaj\NetteApi\Error\DefaultErrorHandler
	{
		return new Tomaj\NetteApi\Error\DefaultErrorHandler($this->getService('apiOutputConfigurator'));
	}


	public function createServiceApiOutputConfigurator(): Tomaj\NetteApi\Output\Configurator\DebuggerConfigurator
	{
		return new Tomaj\NetteApi\Output\Configurator\DebuggerConfigurator;
	}


	public function createServiceApplication__1(): App\Presentation\Api\ApiPresenter
	{
		$service = new App\Presentation\Api\ApiPresenter($this->getService('06'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__10(): App\Presentation\Table\TablePresenter
	{
		$service = new App\Presentation\Table\TablePresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__11(): App\Presentation\Tomaj\TomajPresenter
	{
		$service = new App\Presentation\Tomaj\TomajPresenter($this->getService('08'), $this->getService('011'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__12(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__13(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__2(): App\Presentation\Calculator\CalculatorPresenter
	{
		$service = new App\Presentation\Calculator\CalculatorPresenter($this->getService('07'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Presentation\Edit\EditPresenter
	{
		$service = new App\Presentation\Edit\EditPresenter($this->getService('database.default.explorer'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): App\Presentation\Error\Error4xx\Error4xxPresenter
	{
		$service = new App\Presentation\Error\Error4xx\Error4xxPresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\Presentation\Error\Error5xx\Error5xxPresenter
	{
		return new App\Presentation\Error\Error5xx\Error5xxPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__6(): App\Presentation\Home\HomePresenter
	{
		$service = new App\Presentation\Home\HomePresenter($this->getService('02'), $this->getService('http.request'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__7(): App\Presentation\ImgApi\ImgApiPresenter
	{
		$service = new App\Presentation\ImgApi\ImgApiPresenter($this->getService('011'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__8(): App\Presentation\Post\PostPresenter
	{
		$service = new App\Presentation\Post\PostPresenter($this->getService('02'), $this->getService('database.default.explorer'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__9(): App\Presentation\Sign\SignPresenter
	{
		$service = new App\Presentation\Sign\SignPresenter(
			$this->getService('database.default.explorer'),
			$this->getService('security.user'),
			$this->getService('04'),
			$this->getService('03'),
		);
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory'),
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'C:\xampp\htdocs\web/temp/cache/nette.application/touch',
		));
		$service->setMapping(['*' => 'App\Presentation\*\**Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('C:\xampp\htdocs\web/temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\web/temp/cache', $this->getService('cache.journal'));
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=web', /*sensitive{*/'root'/*}*/, null, []);
		Nette\Bridges\DatabaseTracy\ConnectionPanel::initialize(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen'),
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__explorer(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage'),
		);
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			public function __construct(
				private Container_a47569a741 $container,
			) {
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('C:\xampp\htdocs\web/temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setStrictTypes(true);
				$service->setStrictParsing(true);
				$service->enablePhpLinter(null);
				$service->setLocale(null);
				func_num_args() && $service->addExtension(new Nette\Bridges\ApplicationLatte\UIExtension(func_get_arg(0)));
				$service->addExtension(new Nette\Bridges\CacheLatte\CacheExtension($this->container->getService('cache.storage')));
				$service->addExtension(new Nette\Bridges\FormsLatte\FormsExtension);
				$service->addExtension(new App\Presentation\Accessory\LatteExtension);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'), false);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('03'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize(): void
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
			if ($logger instanceof Tracy\Logger) $logger->mailer = [
				new Tracy\Bridges\Nette\MailSender(
					$this->getService('mail.mailer'),
					null,
					$this->getByType('Nette\Http\Request', false)?->getUrl()->getHost(),
				),
				'send',
			];
		})();
	}
}
