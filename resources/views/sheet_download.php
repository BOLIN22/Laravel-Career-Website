<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sheet Download</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="download-section">
    <h2>Position Information Sheet</h2>
    <p>A preview of the relevant documents is shown below.</p>
    <img src="/images/sheet_preview.jpg" alt="image" style="max-width: 100%; height: auto;">
    <p>If you want to get the entire sheet, please click the button below.</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Download</a>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Payment Required</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/images/payment_qrcode.jpg" alt="Payment QR Code" 
                style="max-width: 100%; max-height: 300px;height: auto;display: block;margin: 0 auto;">
                <p>Please scan the QR code to make the payment.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Reconsider</button>
                <button type="button" class="btn btn-primary" id="confirmPaymentButton">Payment successful</button>
            </div>
        </div>
    </div>
</div>

<script src="/js/download_sh.js"></script>


</body>
</html>