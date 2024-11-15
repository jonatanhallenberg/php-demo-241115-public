# Uppgift 1: Lägg till Fält (Enkel)

Lägg till följande fält i formuläret:

- Telefonnummer (med validering för endast siffror)
- Ämne (en dropdown med minst 3 olika val)

# Uppgift 2: Utökad Validering (Medel)

- Lägg till validering för namnfältet (minst 2 tecken, inga siffror)
- Validera att meddelandet är minst 10 tecken långt
- Visa olika färger på felmeddelanden vs. succémeddelanden

# Uppgift 3 (db): Actors.php

- I movies.php: lägg till en länk till actors.php för varje film
- Skapa en ny actors.php-fil som:
  - Tar emot en movieId parameter via query parameter
  - Visar filmens titel
  - Listar alla skådespelare i den valda filmen
  - Har en tillbakalänk till filmlistan
  - Använder prepared statements för säker databashantering
  - Har felhantering för ogiltiga film-ID:n