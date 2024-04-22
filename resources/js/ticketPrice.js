document.getElementById('type').addEventListener('change', function() {
    var priceInput = document.getElementById('price');
    switch(this.value) {
        case 'monthly':
            priceInput.value = '35';
            break;
        case 'annual':
            priceInput.value = '220';
            break;
        default:
            priceInput.value = '';
    }
});