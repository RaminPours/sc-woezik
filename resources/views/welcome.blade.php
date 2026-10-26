<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aanmeldingsformulier 2026-2027 | SC Woezik</title>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
    </head>
    <body class="bg-white font-sans leading-relaxed text-gray-800">
       
        <main class="mx-auto my-8 w-full max-w-8xl px-4 pb-12 text-left sm:px-6">

            <h1 
                class="mb-6 text-3xl font-semibold text-black"
                >Aanmeldingsformulier lid worden
            </h1>

            <section class="mb-5 max-w-5xl text-sm space-y-8">
                <h3 class="font-semibold">
                        Wet Bescherming Persoonsgegevens:
                </h3>
                <p>
                    De ingevulde persoonsgegevens worden gebruikt voor het doel zoals in de privacy policy is opgenomen.
                </p>

                <p>
                    <a class="text-blue-800 underline underline-offset-2" href="https://www.scwoezik.nl/wp-content/uploads/2019/09/Privacy-policy-SC-Woezik.pdf" target="_blank" rel="noopener noreferrer">
                        Privacy policy
                    </a>
                </p>

                <p class="text-red-500">
                    Door het invullen en verzenden van onderstaande gegevens, gaat U ermee akkoord dat SC Woezik de voor U geldende contributie via het bedrijf Club Collect gaat laten innen.
                </p>

                <p class="text-red-500">
                    Club Collect stuurt daarvoor dan een link naar uw mailadres of uw mobiel telefoonnummer.
                    We nemen de aanmelding dan ook alléén in behandeling wanneer minstens één van beide wordt ingevuld.
                </p>
            </section>

            <div>
                <div class="space-y-5">
                    <div class="my-5">
                        <label>Achternaam <span>*</span>
                            <input name="achternaam" required>
                        </label>
                    </div>
                    <fieldset>
                        <legend>Geslacht <span>*</span></legend>
                        <div class="choices">
                            <label>
                                <input type="radio" name="geslacht" value="man" required> Man
                            </label>
                            <label>
                                <input type="radio" name="geslacht" value="vrouw" required> Vrouw
                            </label>
                        </div>
                    </fieldset>
                    <div class="my-5">
                        <label>Roepnaam <span>*</span>
                            <input name="roepnaam" required>
                        </label>
                    </div>
                    <div class="my-5">
                        <label>Voorletters <span>*</span>
                            <input name="voorletters" required>
                        </label>
                    </div>
                    <div class="my-5">
                        <label>Geboortedatum <span>*</span>
                            <input type="date" name="geboortedatum" required>
                        </label>
                    </div>
                </div>
                <fieldset>
                    <legend>Adres <span>*</span></legend>
                    <div class="my-5">
                        <label class="text-sm font-normal">Straat + huisnummer
                            <input name="adres" required>
                        </label>
                    </div>
                    <div class="grid grid-cols-[minmax(0,1fr)_minmax(0,1fr)] gap-4">
                        <div class="min-w-0">
                            <label class="text-sm font-normal">Stad
                                <input name="stad" required>
                            </label>
                        </div>
                        <div class="min-w-0">
                            <label class="text-sm font-normal">Postcode
                                <input name="postcode" required>
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="space-y-5">
                    <div class="my-5">
                        <label>Telefoon <span>*</span>
                            <input type="tel" name="telefoon" required>
                        </label>
                    </div>
                    <div class="my-5">
                        <label>E-mailadres <span>*</span>
                            <input type="email" name="email" required>
                        </label>
                    </div>
                </div>
                <div class="my-5">
                    <label>Voorkeur voor team / teamgenoten: (we proberen zoveel mogelijk rekening te houden met ieders wensen)<span>*</span>
                        <input name="teamvoorkeur" required>
                    </label>
                </div>
                <fieldset>
                    <legend>Senioren dagkeuze</legend>
                    <div class="choices">
                        <label>
                            <input type="checkbox" name="senioren_dag[]" value="Zaterdagmiddag"> Zaterdagmiddag
                        </label>
                        <label>
                            <input type="checkbox" name="senioren_dag[]" value="Zondagochtend"> Zondagochtend
                        </label>
                        <label>
                            <input type="checkbox" name="senioren_dag[]" value="Zondagmiddag"> Zondagmiddag
                        </label>
                        <label>
                            <input type="checkbox" name="senioren_dag[]" value="Vrijdag 7x7"> Vrijdag 7x7
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Senioren wedstrijdtype</legend>
                    <div class="choices">
                        <label>
                            <input type="radio" name="wedstrijdtype" value="recreatief"> Recreatief
                        </label>
                        <label>
                            <input type="radio" name="wedstrijdtype" value="prestatief"> Prestatief
                        </label>
                    </div>
                </fieldset>
                <div class="my-5">
                    <label>Hij/Zij
                        <select name="hij_zij">
                        <option>Hij</option>
                        <option>Zij</option>
                        </select>
                    </label>
                    <p>is</p>
                </div>
                <div class="my-5">
                    <label>Wel of niet eerder lid geweest van een voetbalvereniging?
                        <select name="eerder_lid">
                        <option value="wel">Wel</option>
                        <option value="niet" selected>Niet</option>
                        </select>
                    </label>
                </div>
                <div class="my-5">
                    <label>Zo ja, welke vereniging?
                        <input name="vorige_vereniging">
                    </label>
                </div>
                <div class="space-y-5">
                    <div class="my-5">
                        <label>Welke periode
                            <input name="periode">
                        </label>
                    </div>
                    <div class="my-5">
                        <label>Laatste elftal
                            <input name="laatste_elftal">
                        </label>
                    </div>
                </div>
                <fieldset class="knvb-choice my-5">
                    <legend>KNVB relatiecode/bondsnummer reeds bekend? <span>*</span></legend>
                    <div class="choices">
                        <label>
                            <input type="radio" name="knvb_bekend" value="ja" required> Ja
                        </label>
                        <label>
                            <input type="radio" name="knvb_bekend" value="nee" required> Nee
                        </label>
                    </div>
                    <div class="knvb-details my-5">
                        <label>KNVB relatiecode/bondsnummer <span>*</span>
                            <input name="knvb_nummer" autocomplete="off">
                        </label>
                    </div>
                </fieldset>
                <div class="my-5">
                    <strong>Bij een overschrijving geldt ook het volgende:</strong>
                    <p class="mt-2">&bull; Als het een overschrijving vanaf een andere club is, dan moeten ook &euro;10,- overschrijfkosten betaald worden. Dit zal mee ge&iuml;nd worden via de contributie.</p>
                </div>
                <fieldset>
                    <legend>Bij aanmelding van uw kind kunt u zich ook aanmelden als vrijwilliger<span>*</span></legend>
                    <div class="choices">
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Begeleiding team"> Begeleiding team
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger commerciële commissie"> Vrijwilliger commerciële commissie
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger communicatie"> Vrijwilliger communicatie
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger EHBO"> Vrijwilliger EHBO
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger horeca"> Vrijwilliger horeca
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger scheidsrechter"> Vrijwilliger scheidsrechter
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger accomodatie (klussen e.d.)"> Vrijwilliger accomodatie (klussen e.d.)
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger coörd. JC"> Vrijwilliger coörd. JC
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger evenementen"> Vrijwilliger evenementen
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger wedstrijd coördinatie zaterdag"> Vrijwilliger wedstrijd coördinatie zaterdag
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger beheer"> Vrijwilliger beheer
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwiliger clubhuisdienst"> Vrijwiliger clubhuisdienst
                        </label>
                        <label>
                            <input type="checkbox" name="vrijwilliger[]" value="Vrijwilliger: ik ben al vrijwilliger bij de club"> Vrijwilliger: ik ben al vrijwilliger bij de club
                        </label>
                    </div>
                    <p class="my-3 text-sm text-gray-600">U kunt hier uw keuze aangeven. Laat vervolgens in het veld daaronder uw gegevens achter zodat wij met u contact op kunnen nemen</p>
                </fieldset>
                <div class="my-5">
                    <label>Uw gegevens
                        <textarea name="vrijwilliger_gegevens" rows="4"></textarea>
                    </label>
                </div>
                <div class="my-5">
                    <label>Datum <span>*</span>
                        <input type="date" name="datum" required>
                    </label>
                </div>
                <p class="my-3 text-sm text-gray-600">* Elke aanmelding zal worden bevestigd via een e-mail van de ledenadministratie.</p>
                <button type="button">Versturen</button>
            </div>
        </main>
    </body>
</html>
