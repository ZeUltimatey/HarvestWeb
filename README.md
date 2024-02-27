1. Kas ir API?

API ir Application Programming Interface,
kas nodrošina savienojumu starp dažādām programmēšanas valodām,
sistēmām vai pakalpojumiem. Tas ļauj programmatūras komponentiem komunicēt un sadarboties,
izmantojot noteiktus noteikumus un protokolus.


2. Kā deklerēt mainīgo PHP valodā?

Piemēram: $mainigais = vērtība;


3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:

Laravel izmanto MVC (Model-View-Controller) arhitektūras modeli. 
Šī arhitektūra sadala aplikāciju trim daļām:

Modelis (Model) - Tas atbild par datu pārvaldību, kā arī attiecīgo uzvedību. 
Šeit ietilpst datubāzes mijiedarbība, datu validācija utt.

Skats (View) - Tas atbild par lietotāja saskarnes izveidi. 
Tas parasti ir HTML, kurā iekļauti datu renderēšanas un attēlošanas noteikumi.

Kontrolieris (Controller) - Tas pārvalda lietotāja pieprasījumus un izvēlnes logiku. 
Tas saņem ienākošos pieprasījumus, apstrādā tos un atgriež atbilstošu atbildi.



4. Kas ir ORM, kapēc to izmanto tīrā SQL vietā?

ORM ir Objektu-Relāciju kartēšanas tehnoloģija,
kas ļauj attēlot datubāzes tabulas kā objektus programmēšanas valodās.
Tās galvenais mērķis ir samazināt kodu, ko izmanto, strādājot ar datubāzēm,
un vienkāršot datu pārvaldību, atvieglojot datu manipulāciju un datu bāzes attēlošanu kā objektus.


5. Uzraksti Eloquent ORM pieprasījumu modelim User, 
kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. 
Lietotāju tabulas struktūra:

username	VARCHAR(255)
email	    VARCHAR(255)
password	VARCHAR(255)
rating	    DECIMAL(8, 2)
created_at	TIMESTAMP
updated_at	TIMESTAMP

$lietotaji = User::where('rating', '>', 4)->get();
