<?php

class MobWeb_LogoutRedirect_Model_Observer
{
	public function controllerActionPostdispatchCustomerAccountLogout($observer)
	{
		$target = Mage::getStoreConfig('customer/logout_redirect_target/target');
		$observer->getControllerAction()->setRedirectWithCookieCheck($target ? $target : '/');
	}
}