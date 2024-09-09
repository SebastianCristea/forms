# forms

Tema: Crearea unui Formular Complex pentru Înregistrare Utilizator
Cerințe:
Crearea unui formular de înregistrare utilizator:

Formularul va avea următoarele câmpuri:
Nume (text)
Prenume (text)
Adresă de email (email, validare necesară)
Parolă (password, cu pattern pentru a cere o parolă complexă)
Confirmare parolă (password, trebuie să fie egală cu parola)
Număr de telefon (tel, validare necesară)
Data nașterii (date)
Culoarea preferată (color)
Site web personal (url, opțional)
Săptămâna preferată a anului (week)
Postcod (text, validare pe pattern-ul de cod poștal UK)
Genul (radio buttons: masculin, feminin, altul)
Termeni și condiții (checkbox, obligatoriu de bifat)
Structura și validarea datelor:

Folosește fieldset pentru a organiza secțiunile formularului.
Adaugă placeholder și title pentru a ghida utilizatorul.
Toate câmpurile obligatorii trebuie să fie validate corespunzător (ex. email valid, parolă cu minimum 8 caractere, etc.).
Dacă utilizatorul nu completează corect formularul, trebuie să primească un mesaj de eroare corespunzător.
Metoda de trimitere:

Folosește metoda POST pentru trimiterea datelor.
Datele vor fi prelucrate în PHP și afișate cu var_dump().
Formularul trebuie să includă și opțiuni avansate:

Un select cu opțiuni multiple pentru a alege limbile vorbite.
Un slider (range input) pentru a selecta nivelul de experiență într-un anumit domeniu.
Un text area unde utilizatorul poate descrie scurt pasiunea sa.
Exemple de pattern-uri și validări:

Parolă: Cel puțin 8 caractere, o literă mare, o cifră și un caracter special.
Postcod UK: [A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}.
