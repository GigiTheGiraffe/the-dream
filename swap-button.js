const swapButton = document.getElementById("swapCurrencies");

swapButton.addEventListener("click", () => {
    let baseCurrencySelect = document.getElementById('baseCurrencySelect');
    let finalCurrencySelect = document.getElementById('finalCurrencySelect');
    //Pour stocker la valeur que l'on va effacer, il faut un stockage temporaire de cette valeur
    let temp = baseCurrencySelect.value;
    baseCurrencySelect.value = finalCurrencySelect.value;
    finalCurrencySelect.value = temp;
})