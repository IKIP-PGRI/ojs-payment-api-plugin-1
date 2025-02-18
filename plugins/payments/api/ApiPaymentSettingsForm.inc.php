<?php

import('lib.pkp.classes.form.Form');

class ApiPaymentSettingsForm extends Form {

    /** @var ApiPaymentPlugin */
    var $plugin;

    /**
     * Constructor
     * @param $plugin ApiPaymentPlugin
     */
    function __construct($plugin) {
        $this->plugin = $plugin;
        parent::__construct($plugin->getTemplatePath() . 'settingsForm.tpl');

        // Add form validation checks
        $this->addCheck(new FormValidator($this, 'apiUrl', 'required', 'plugins.payments.api.settings.apiUrlRequired'));
        $this->addCheck(new FormValidator($this, 'apiKey', 'required', 'plugins.payments.api.settings.apiKeyRequired'));
    }

    /**
     * Fetch the form
     * @param $request PKPRequest
     * @param $template string
     * @return string
     */
    function fetch($request, $template = null) {
        $templateMgr = TemplateManager::getManager($request);
        $templateMgr->assign('apiUrl', $this->plugin->getSetting($request->getContext()->getId(), 'apiUrl'));
        $templateMgr->assign('apiKey', $this->plugin->getSetting($request->getContext()->getId(), 'apiKey'));
        return parent::fetch($request, $template);
    }

    /**
     * Save the form settings
     * @param $request PKPRequest
     * @return bool
     */
    function execute($request) {
        $context = $request->getContext();
        $this->plugin->updateSetting($context->getId(), 'apiUrl', $this->getData('apiUrl'));
        $this->plugin->updateSetting($context->getId(), 'apiKey', $this->getData('apiKey'));
        return true;
    }
}
