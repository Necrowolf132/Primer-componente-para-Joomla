<?php

defined('_JEXEC') or die('Restricted access');

/**
 * Clase que expulsara la vista html para My Componente
 *
 * @since  0.0.1
 */
class MycomponenteViewMycomponente extends JViewLegacy
{
    /**
     * Reproduce la vista del componente joomla My Componente
     *
     * @param   El string  $tpl  El nombre del archivo de plantilla a analizar; Busca automáticamente a través de las rutas de la plantilla.
     *
     * @return  void
     */
    function display($tpl = null)
    {
        //Asigna los datos a la vista.
        $this->msg1 = 'Hooola Perro';
        $this->msg2 = $this->get('EntregarMensaje');
        $this->console = $this->getModel();//$this->_defaultModel;

        // Check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

            return false;
        }
        // Reproduce la vista
        parent::display($tpl);
    }
}