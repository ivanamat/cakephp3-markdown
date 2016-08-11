# CakePHP 3.x - Markdown

## Installation

### Composer

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require ivanamat/cakephp3-markdown
```

### Git submodule

    git submodule add git@github.com:ivanamat/cakephp3-markdown.git plugins/Markdown
    git submodule init
    git submodule update

## Load

### Component

Load component in the `initialize()` function

```php
    class MyController extends AppController {

        public function initialize() {
            parent::initialize();

            $this->loadComponent('Markdown.Markdown');
        }

    }
```

...or load the component in the `array of components`.

```php
    class MyController extends AppController {

        public $components = [
            'Markdown' => [
                'className' => 'Markdown.Markdown'
            ]
        ];

    }
```

### Helper

Load helper in the `initialize()` function from your `View`

```php
    class AppView extends View {

        public function initialize() {
            parent::initialize();

            $this->loadHelper('Markdown.Markdown');
        }

    }
```

## Easy to use

### Controller
Example: Read .md file on the controller, parse and pass html code to view.

```php
    # MyController

    $md = file_get_contents('../README.md', true);
    $html = $this->Markdown->parse($md);
    $this->set(compact('html'));
```

### Helper
Example: Parse Markdown data on the view.

```php
    # MyController

    $md = '`This` string `is an example` of **Markdown** code';
    $this->set(compact('md'));
```

```ctp
    <!-- My view.ctp -->

    <?php echo $this->Markdown->parse($md); ?>
```

## About CakePHP 3.x - Markdown

CakePHP 3.x - Markdown uses the [Parsedown](http://parsedown.org/) third-party library.  
You can download [Parsedown](http://parsedown.org/) from official website: [http://parsedown.org/](http://parsedown.org/).

## Author

Iván Amat on [GitHub](https://github.com/ivanamat)  
[www.ivanamat.es](http://www.ivanamat.es/)