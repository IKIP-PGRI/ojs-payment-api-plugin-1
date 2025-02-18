<form id="apiPaymentSettingsForm" method="post" action="{url op="save"}">
    <div class="form-group">
        <label for="apiUrl">{translate key="plugins.payments.api.settings.apiUrl"}</label>
        <input type="text" id="apiUrl" name="apiUrl" value="{$apiUrl|escape}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="apiKey">{translate key="plugins.payments.api.settings.apiKey"}</label>
        <input type="text" id="apiKey" name="apiKey" value="{$apiKey|escape}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="otherSetting">{translate key="plugins.payments.api.settings.otherSetting"}</label>
        <input type="text" id="otherSetting" name="otherSetting" value="{$otherSetting|escape}" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{translate key="common.save"}</button>
    </div>
</form>
