<main>
  <section>
    <h2>Koszyk</h2>
    <ul>
      <li>
        <img src="product1.jpg" alt="Produkt 1">
        <h3>Produkt 1</h3>
        <p>Cena: 99,99 zł</p>
      </li>
      <li>
        <img src="product2.jpg" alt="Produkt 2">
        <h3>Produkt 2</h3>
        <p>Cena: 149,99 zł</p>
      </li>
      <li>
        <img src="product3.jpg" alt="Produkt 3">
        <h3>Produkt 3</h3>
        <p>Cena: 199,99 zł</p>
      </li>
    </ul>
  </section>
  <section>
    <h2>Podsumowanie</h2>
    <p>Łączna kwota do zapłaty: 449,97 zł</p>
    <form>
      <h3>Dane płatności</h3>
      <label for="card-number">Numer karty kredytowej:</label>
      <input type="text" id="card-number" name="card-number" required>
      <label for="card-name">Imię i nazwisko na karcie:</label>
      <input type="text" id="card-name" name="card-name" required>
      <label for="expiry-date">Data ważności karty:</label>
      <input type="text" id="expiry-date" name="expiry-date" required>
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required>
      <h3>Wybierz metodę płatności:</h3>
      <div class="payment-methods">
        <label>
          <input type="radio" name="payment-method" value="credit-card" checked>
          Karta kredytowa
        </label>
        <label>
          <input type="radio" name="payment-method" value="paypal">
          PayPal
        </label>
        <label>
          <input type="radio" name="payment-method" value="bitcoin">
          Bitcoin
        </label>
      </div>
      <button type="submit">Zapłać</button>
    </form>
  </section>
</main>
