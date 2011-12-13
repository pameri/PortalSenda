<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'portada' => true,
       'estatica' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getportadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Senda\\PortalBundle\\Controller\\DefaultController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getestaticaRouteInfo()
    {
        return array(array (  0 => 'pagina',), array (  '_controller' => 'Senda\\PortalBundle\\Controller\\DefaultController::estaticaAction',), array (  'pagina' => 'soluciones|servicios|clientes|nosotros|contacto|copyright|privacidad|condiciones',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'soluciones|servicios|clientes|nosotros|contacto|copyright|privacidad|condiciones',    3 => 'pagina',  ),  1 =>   array (    0 => 'text',    1 => '/sitio',  ),));
    }
}
