document.getElementById('confirmPaymentButton').addEventListener('click', function () {
        
    const downloadUrl = '/downloads/position-information-sheet.zip';

    // Creating a hidden link element
    const link = document.createElement('a');
    link.href = downloadUrl;
    link.download = 'position-information-sheet.zip';

    // Adding links to documents
    document.body.appendChild(link);

    // Analogue click to initiate download
    link.click();

    // Remove the link from the document after download
    document.body.removeChild(link);

    // Hide Modal Box
    $('#paymentModal').modal('hide');
});