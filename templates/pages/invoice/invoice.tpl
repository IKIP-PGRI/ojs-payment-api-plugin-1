<div class="invoice-details">
    <h2>{translate key="invoice.details"}</h2>
    <p><strong>{translate key="invoice.number"}:</strong> {$invoice.invoiceNumber|escape}</p>
    <p><strong>{translate key="invoice.amount"}:</strong> {$invoice.amount|escape}</p>
    <p><strong>{translate key="invoice.status"}:</strong> {$invoice.status|escape}</p>
    <a href="{url op="downloadInvoice" submissionId=$invoice.submissionId}" class="btn btn-primary">{translate key="invoice.downloadPdf"}</a>
</div>
