SensioFrameworkExtraBundle
==========================

The default Symfony2 ``FrameworkBundle`` implements a basic but robust and
flexible MVC framework. `SensioFrameworkExtraBundle`_ extends it to add sweet
conventions and annotations. It allows for more concise controllers.

Installation
------------

`Download`_ the bundle and put it under the ``Sensio\Bundle\`` namespace.
Then, like for any other bundle, include it in your Kernel class::

    public function registerBundles()
    {
        $bundles = array(
            ...

            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        );

        ...
    }

If you plan to use or create annotations for controllers, make sure to update
your ``autoload.php`` by adding the following line::

    Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));


Configuration
-------------

All features provided by the bundle are enabled by default when the bundle is
registered in your Kernel class.

The default configuration is as follow:

.. configuration-block::

    .. code-block:: yaml

        sensio_framework_extra:
            router:   { annotations: true }
            request:  { converters: true }
            view:     { annotations: true }
            cache:    { annotations: true }
            security: { annotations: true }

    .. code-block:: xml

        <!-- xmlns:sensio-framework-extra="http://symfony.com/schema/dic/symfony_extra" -->
        <sensio-framework-extra:config>
            <router annotations="true" />
            <request converters="true" />
            <view annotations="true" />
            <cache annotations="true" />
            <security annotations="true" />
        </sensio-framework-extra:config>

    .. code-block:: php

        // load the profiler
        $container->loadFromExtension('sensio_framework_extra', array(
            'router'   => array('annotations' => true),
            'request'  => array('converters' => true),
            'view'     => array('annotations' => true),
            'cache'    => array('annotations' => true),
            'security' => array('annotations' => true),
        ));

You can disable some annotations and conventions by defining one or more
settings to false.

Annotations for Controllers
---------------------------

Annotations are a great way to easily configure your controllers, from the
routes to the cache configuration.

Even if annotations are not a native feature of PHP, it still has several
advantages over the classic Symfony2 configuration methods:

* Code and configuration are in the same place (the controller class);
* Simple to learn and to use;
* Concise to write;
* Makes your Controller thin (as its sole responsibility is to get data from
  the Model).

.. tip::

   If you use view classes, annotations are a great way to avoid creating
   view classes for simple and common use cases.

The following annotations are defined by the bundle:

.. toctree::
   :maxdepth: 1

   annotations/routing
   annotations/converters
   annotations/view
   annotations/cache
   annotations/security

This example shows all the available annotations in action::

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

    /**
     * @Route("/blog")
     * @Cache(expires="tomorrow")
     */
    class AnnotController extends Controller
    {
        /**
         * @Route("/")
         * @Template
         */
        public function indexAction()
        {
            $posts = ...;

            return array('posts' => $posts);
        }

        /**
         * @Route("/{id}")
         * @Method("GET")
         * @ParamConverter("post", class="SensioBlogBundle:Post")
         * @Template("SensioBlogBundle:Annot:show.html.twig", vars={"post"})
         * @Cache(smaxage="15", lastmodified="post.getUpdatedAt()", etag="'Post' ~ post.getId() ~ post.getUpdatedAt()")
         * @Security("has_role('ROLE_ADMIN') and is_granted('POST_SHOW', post)")
         */
        public function showAction(Post $post)
        {
        }
    }

As the ``showAction`` method follows some conventions, you can omit some
annotations::

    /**
     * @Route("/{id}")
     * @Cache(smaxage="15", lastModified="post.getUpdatedAt()", ETag="'Post' ~ post.getId() ~ post.getUpdatedAt()")
     * @Security("has_role('ROLE_ADMIN') and is_granted('POST_SHOW', post)")
     */
    public function showAction(Post $post)
    {
    }

The routes need to be imported to be active as any other routing resources,
see :ref:`Annotated Routes Activation<frameworkextra-annotations-routing-activation>` for
details.

.. _`SensioFrameworkExtraBundle`: https://github.com/sensio/SensioFrameworkExtraBundle
.. _`Download`: http://github.com/sensio/SensioFrameworkExtraBundle
