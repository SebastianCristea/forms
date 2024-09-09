<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validarea parolei și confirmarea parolei
    if ($_POST['password'] !== $_POST['confirm_password']) {
        echo "Parolele nu se potrivesc!";
    } else {
        var_dump($_POST);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular de Înregistrare</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Informații Personale</legend>
            <div>
                <label for="fname">Nume:</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div>
                <label for="lname">Prenume:</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Parolă:</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{8,}" title="Trebuie să conțină cel puțin 8 caractere, o literă mare, o cifră și un caracter special" required>
            </div>
            <div>
                <label for="confirm_password">Confirmare Parolă:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div>
                <label for="tel">Telefon:</label>
                <input type="tel" id="tel" name="tel" required>
            </div>
            <div>
                <label for="dob">Data nașterii:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div>
                <label for="color">Culoarea preferată:</label>
                <input type="color" id="color" name="color">
            </div>
            <div>
                <label for="website">Site web personal:</label>
                <input type="url" id="website" name="website">
            </div>
            <div>
                <label for="postcode">Postcod:</label>
                <input type="text" id="postcode" name="postcode" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" title="Introduceți un cod poștal valid din UK" required>
            </div>
            <div>
                <label>Gen:</label><br>
                <input type="radio" id="masculin" name="gender" value="masculin" checked>
                <label for="masculin">Masculin</label><br>
                <input type="radio" id="feminin" name="gender" value="feminin">
                <label for="feminin">Feminin</label><br>
                <input type="radio" id="altul" name="gender" value="altul">
                <label for="altul">Altul</label><br>
            </div>

            <div>
                <select name="country">
                    <optgroup label="Europe">
                        <option value="germany">Germany</option>
                        <option value="france">France</option>
                        <option value="uk" selected>United Kingdom</option>
                    </optgroup>
                    <optgroup label="America">
                        <option value="brazil">Brazil</option>
                        <option value="canada">Canada</option>
                        <option value="usa">United States</option>
                    </optgroup>
                </select>
            </div>

            <div>
                <p>Acceptați următoarele:</p>
                <input type="checkbox" id="terms" name="agreements[]" value="terms" required>
                <label for="terms">Termenii și Condițiile</label><br>

                <input type="checkbox" id="cookies" name="agreements[]" value="cookies" required>
                <label for="cookies">Cookie-urile</label><br>

                <input type="checkbox" id="privacy" name="agreements[]" value="privacy" required>
                <label for="privacy">Politica de Confidențialitate</label><br>

                <input type="checkbox" id="news" name="agreements[]" value="news">
                <label for="news">Abonare la newsletter</label><br>
            </div>
        </fieldset>

        <fieldset>
            <legend>Preferințe</legend>
            <div>
                <label for="languages">Limbi vorbite:</label>
                <select id="languages" name="languages[]" multiple>
                    <option value="romana">Română</option>
                    <option value="engleza">Engleză</option>
                    <option value="franceza">Franceză</option>
                </select>
            </div>
            <div>
                <label for="experience">Nivel de experiență:</label>
                <input type="range" id="experience" name="experience" min="1" max="10">
            </div>
            <div>
                <label for="passion">Pasiunea ta:</label>
                <textarea id="passion" name="passion" rows="4" cols="40"></textarea>
            </div>
        </fieldset>

        <button type="submit">Înregistrează-te</button>
    </form>
</body>

</html>