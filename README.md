# OJS Payment API Plugin

## Manual Book

### Installation

1. Download the plugin from the repository.
2. Extract the plugin files to the `plugins/payments/api` directory of your OJS installation.
3. Log in to the OJS admin dashboard.
4. Navigate to `Settings` > `Website` > `Plugins`.
5. Find the "Payment API Plugin" in the list and click "Enable".

### Configuration

1. In the OJS admin dashboard, navigate to `Settings` > `Website` > `Plugins`.
2. Find the "Payment API Plugin" and click "Settings".
3. Fill in the required fields:
   - **API URL**: The URL of the payment API.
   - **API Key**: The API key provided by the payment service.
4. Click "Save" to apply the settings.

### Usage

1. When a user makes a payment, the plugin will communicate with the payment API to process the transaction.
2. The payment status can be viewed in the OJS admin dashboard under `Payments`.
3. Invoices can be generated and viewed by navigating to the `Invoices` section in the OJS admin dashboard.
