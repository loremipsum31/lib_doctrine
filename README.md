# lib_doctrine
#### lib_doctrine for Lepton CMS 2 series

Doctrine entities have to be in modules/MODULE_NAME/Entity folder with the namespace ModuleName\Entity

##### To generate the database with the entity

Open a terminal, go to the modules/lib_doctrine folder and type

```
vendor/bin/doctrine orm:schema-tool:update --force
```

All the documentation about doctrine can be see here http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/

------

##### Exemple doctrine entities

```php
#modules/news/Entity/News.php
<?php
namespace News\Entity;

/**
 * @ORM\Table(name="lep_mod_news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var \Section
     * @ORM\ManyToOne(targetEntity="\Section", cascade={"persist"})
     * @ORM\JoinColumn(name="section_id", referencedColumnName="section_id", nullable=true)
     */
    protected $section;

    /**
     * @var \Page
     * @ORM\ManyToOne(targetEntity="\Page", cascade={"persist"})
     * @ORM\JoinColumn(name="page_id", referencedColumnName="page_id", nullable=true)
     */
    protected $page;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    protected $active = false;
    
    //Getter and setter must be define
```

##### Exemple view "view.php"

```php
<?php
/** @var $entityManager \Doctrine\ORM\EntityManager */
global $entityManager;
if (!isset($entityManager)) {
	require_once(LEPTON_PATH."/modules/lib_doctrine/library.php");
}

$news = $entityManager->getRepository('News\Entity\News')->findBy(array(
	'section' => $section_id,
));

if (true === $twig_util->resolve_path("view.lte") ) {
	echo $parser->render(
		"@news/view.lte",
		array(
			'news' => $news
		)
	);
}
```
##### Exemple view "view.lte"

```twig
{% for post in news %}
	{{ post.title }}
{% endfor %}
```


