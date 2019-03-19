<?php

defined('_JEXEC') or die('Restricted access');

/**
 * Mycomponent Model
 *
 * @since  0.0.1
 */
class MycomponenteModelMycomponente extends JModelItem
{
    protected $message;

    /**
     * Get the message
     *
     * @return  Regresa  un string que es el mensaje que vera display de la vista
     */
    public function getEntregarMensaje()
    {
        if (!isset($this->message))
        {
            $jinput = JFactory::getApplication()->input;
            $id     = $jinput->get('campo-selector', 1, 'INT');

            switch ($id)
            {
                case 2:
                    $this->message = 'Jese ES un Pipi';
                    break;
                default:
                case 1:
                    $this->message = 'Rai es china';
                    break;
            }
        }

        return $this->message;
    }
}