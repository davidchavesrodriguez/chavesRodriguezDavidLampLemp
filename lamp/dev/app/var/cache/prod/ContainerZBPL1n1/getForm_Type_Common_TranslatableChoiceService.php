<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.common.translatable_choice' shared service.

return $this->services['form.type.common.translatable_choice'] = new \PrestaShopBundle\Form\Admin\Type\TranslatableChoiceType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getAvailableLanguages(), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("PS_BO_ALLOW_EMPLOYEE_FORM_LANG"), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->cookie->employee_form_lang, ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getInt("PS_LANG_DEFAULT"));
