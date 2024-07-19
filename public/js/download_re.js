document.getElementById('confirmPaymentButton').addEventListener('click', function () {
        
    const downloadUrl = '/downloads/Recruitment market visualization report.pdf';

    // Creating a hidden link element
    const link = document.createElement('a');
    link.href = downloadUrl;
    link.download = 'Recruitment market visualization report.pdf';

    // Adding links to documents
    document.body.appendChild(link);

    // Analogue click to initiate download
    link.click();

    // Remove the link from the document after download
    document.body.removeChild(link);

    // Hide Modal Box
    $('#paymentModal').modal('hide');
});