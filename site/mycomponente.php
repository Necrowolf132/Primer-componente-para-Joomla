<?php

// Evita el acceso si no mediante el administrador de joomla
defined('_JEXEC') or die('Restricted access');

//Obtiene una instancia del objeto de uso general controlador con el prefijo de mycomponente
$controller = JControllerLegacy::getInstance('Mycomponente');

// Realiza la tarea de solicitud de datos
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redireciona al controlador.php
$controller->redirect();

?>