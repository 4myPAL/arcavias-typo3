<?php

if ( ! defined( 'TYPO3_MODE' ) ) {
	die ( 'Access denied.' );
}


t3lib_extMgm::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/', 'Arcavias configuration' );

$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_arcavias_custom_wizicon'] = t3lib_extMgm::extPath( $_EXTKEY ) . 'Classes/Custom/Wizicon.php';


if ( TYPO3_MODE === 'BE' )
{
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'user',
		'tx_arcavias_admin',
		'', // position
		array(
			'Admin' => 'index,do',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/Admin.xml',
		)
	);
}


$pluginName = str_replace( '_', '', $_EXTKEY );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_catalog-filter'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_catalog-filter', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/CatalogFilter.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'catalog-filter', 'Arcavias - Catalog filter' );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_catalog-filtersearch'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_catalog-filtersearch', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/CatalogFilterSearch.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'catalog-filtersearch', 'Arcavias - Catalog search filter' );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_catalog-list'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_catalog-list', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/CatalogList.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'catalog-list', 'Arcavias - Catalog list' );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_catalog-stage'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_catalog-stage', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/CatalogStage.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'catalog-stage', 'Arcavias - Catalog stage area' );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_catalog-detail'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_catalog-detail', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/CatalogDetail.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'catalog-detail', 'Arcavias - Catalog detail' );

Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'catalog-listsimple', 'Arcavias - Catalog simple search list' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'catalog-stock', 'Arcavias - Catalog stock source' );


$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_basket-small'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_basket-small', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/BasketSmall.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'basket-small', 'Arcavias - Basket small' );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_basket-standard'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_basket-standard', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/BasketStandard.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'basket-standard', 'Arcavias - Basket standard' );


$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_checkout-standard'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_checkout-standard', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/CheckoutStandard.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'checkout-standard', 'Arcavias - Checkout standard' );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_checkout-confirm'] = 'pi_flexform';
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'checkout-confirm', 'Arcavias - Checkout confirm' );

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_checkout-update'] = 'pi_flexform';
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'checkout-update', 'Arcavias - Checkout payment update' );


$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginName . '_account-history'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( $pluginName . '_account-history', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/AccountHistory.xml' );
Tx_Extbase_Utility_Extension::registerPlugin( $_EXTKEY, 'account-history', 'Arcavias - Account history' );

?>
