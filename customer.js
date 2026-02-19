function sendMoney() {
var senderUsername = document.getElementById('enterSName').value; var recipientUsername = document.getElementById('enterName').value; var amount = document.getElementById('enterAmount').value;
// Perform validation (you may add more validation as needed) if (senderUsername && recipientUsername && amount) {
// Perform the transaction logic (you may add your logic here)
// For demonstration purposes, let's just display a success message
var successMessage = `Transaction successful!\n${senderUsername} sent Rs.${amount} to
${recipientUsername}`; alert(successMessage);
// Update and display transaction history updateTransactionHistory(senderUsername, recipientUsername, amount);
// Clear input fields document.getElementById('enterSName').value = ''; document.getElementById('enterName').value = ''; document.getElementById('enterAmount').value = '';
} else 
  {
alert('Please fill in all fields before sending money.');
}

function updateTransactionHistory(sender, recipient, amount) {
var transactionHistoryList = document.getElementById('transaction-history-body'); var listItem = document.createElement('li');
listItem.textContent = `${sender} sent Rs.${amount} to ${recipient}`; transactionHistoryList.appendChild(listItem);
}
