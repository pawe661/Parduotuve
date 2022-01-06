Prekių pirkimas ir administravimas

Sukurkite paprastą prekių užsakymo platformą. Mysql duomenų bazių NEBENAUDOJAME. Vietoj jų vėl pasitelkiame JSON failą (-us). Aplikaciją sudaro dvi pusės: klientams matoma erdvė ir administratoriui prieinama nuoroda. Administratorius turi būti prisijungęs, kad galėtų matyti ir redaguoti turinį. Administratorius turi turėti galimybę:

	1. Pridėti neribotą kiekį priekių kurios būtų saugomos šios aplikacijos duomenų bazėje. Kiekviena prekė turi turėti pavadinimą, aprašymą, kainą ir kainą su nuolaida (Jeigu tokia naudojama).
	2. Redaguoti prekes pakeičiant prieš tai įvestas reikšmes. 
	3. Ištrinti prekes.
	4. Atsijungti nuo sistemos.

Klientas turi turėti galimybę:
	1. Matyti visas sistemoje esančias prekes ir įvedus užsakomų prekių kiekį jas pridėti į krepšelį. Krepšelio prekės saugomos php sesijoje. Prekių sąraše klientas turi turėti galimybę jas išfiltruoti pagal pavadinimą arba pagal kainą.
	2. Peržiūrėti savo prekių krepšelį kuriame išvardintos visos prekės kurias ruošiamasi užsakyti bei taip pat turėti galimybę pakeisti išvardintų prekių kiekius.
	3. Matyti mygtuką “Pirkti” kurį paspaudus vartotojo krepšelio informacija yra išvaloma ir jis nukreipiamas atgal į prekių sąrašą.
	Techniniai reikalavimai užduočiai:
Naudokitės MVC principu. Nuorodų struktūrą galite pasirinkti individualiai. Apache rewrite funkcijos naudoti neprivaloma, tačiau patartina. Sukurkite Controllerį(-ius), Modelį(-ius) ir Views’ą(-us). Prireikus galite susikurti Helper klasę.
Nuorodų keliai (routes) turi būti aprašomi controller klasėje. 
Veiksmus susijusius su duomenų baze ar sesijos apdorojimu sudėkite į model klases.
Grąžinamą vizualinį turinį suskirstykite į atskirus failus views direktorijoje esančiuose failuose.
Visos klasės turi būti užkraunamos per PSR-4.

Naudotis composer requirementais GALIMA ir rekomenduojama :)

