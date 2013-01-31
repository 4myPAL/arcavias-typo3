<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2011
 * @license LGPLv3, http://www.arcavias.com/en/license
 * @package Controller
 * @subpackage ExtJS
 * @version $Id: Factory.php 867 2012-06-28 16:14:46Z fblasel $
 */


/**
 * Price list type controller factory.
 *
 * @package Controller
 * @subpackage ExtJS
 */
class Controller_ExtJS_Price_List_Type_Factory
	extends Controller_ExtJS_Common_Factory_Abstract
	implements Controller_ExtJS_Common_Factory_Interface
{
	public static function createController( MShop_Context_Item_Interface $context, $name = null )
	{
		if ( $name === null ) {
			$name = $context->getConfig()->get('classes/controller/extjs/price/list/type/name', 'Default');
		}

		if ( ctype_alnum($name) === false )
		{
			$classname = is_string($name) ? 'Controller_ExtJS_Price_List_Type_' . $name : '<not a string>';
			throw new Controller_ExtJS_Exception( sprintf( 'Invalid class name "%1$s"', $classname ) );
		}

		$iface = 'Controller_ExtJS_Common_Interface';
		$classname = 'Controller_ExtJS_Price_List_Type_' . $name;

		$manager = self::_createController( $context, $classname, $iface );
		return self::_addControllerDecorators( $context, $manager, 'price/list/type' );
	}
}