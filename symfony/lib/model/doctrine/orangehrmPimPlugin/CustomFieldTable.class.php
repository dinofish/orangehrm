<?php

/**
 * CustomFieldTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CustomFieldTable extends PluginCustomFieldTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CustomFieldTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CustomField');
    }
}