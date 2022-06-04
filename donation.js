function donate(){
    Email.send({
        Host: 'smtp.gmail.com',
        To: document.getElementById('emaill').value,
        Subject: 'Payment Confirmation',
        Body: 'Thank you for your generousity, a donation of R'+document.getElementById('amount').value+'was made. This will be used to assist in various ways. We appriciate your love and care.'
    })
    .then(function(message){
        alert ('mail sent successfully!')
    })
}