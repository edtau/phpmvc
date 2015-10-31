Redovisning
====================================

Kmom01:
------------------------------------

####Svårigheter
En svårighet är att förstå hur ramverket fungerar men framför allt de tekniker som ramverket
bygger på och hur dessa tillämpas, mycket kod och komplexitet att sätta sig in i och det
var egentligen det största problemet
dock är det som gäller för de mesta ramverk. Inledningströskeln brukar vara ganska svår och ta tid.
Inte helt lätt att få det att fungera bra med github heller, kort sagt det problematiska med
denna uppgift är
den stora mängd dokumentation att sätta sig in i.

####Lösningar
Leka, testa, prova, experimentera, visst är det viktigt att läsa dokumentation men framför
allt testa och lek.

####Erfarenheter
Kämpa på och acceptera att det tar tid att sätta sig in i ett komplex ramverk och dess tekniker.

####Resultatet
Jag är nöjd med att få allting att fungera enligt kraven och tagit de första stegen att
förstå Anax-MVC.

####Vilken utvecklingsmiljö använder du?
Jag använder mig av två datorer, en laptop och en stationär dator, båda datorerna har jag
installerat Windows 10 på,
en stor fördel med github när man som jag gör sitter på lite olika ställen och arbetar är då
att jag alltid har tillgång
till koden vilken är synkroniserad, det är smidigt att uppdatera den samma.
XAMPP som utvecklingsmiljö och oftast Sublime som editor. Jag tycker github är ett så pass
viktigt verktyg att det kanske
till och med vore bra att ha även ett kurs i bara github alternativt ett moment i kursen
där git verkligen får användas fullt ut.

####Är du bekant med ramverk sedan tidigare?
Ja jag har testat en del olika ramverk, min favorit är codeigninter men jag har också
provat .NET MVC som även det är oerhört kompetent. Jag är lite tveksam till påståendet att
ramverken är så lika att kan du ett går det snabbt att lära sig ett nytt, principerna brukar
vara ganska lika men det är fortfarande en ganska hög inlärningströskel att
behärska ett nytt ramverk, nästan som att lära sig att skriva kod i ett nytt språk.

####Är du sedan tidigare bekant med de lite mer avancerade begrepp som introduceras?
Ja de mesta av begreppen som dependence injection har jag använt och testat samt har en
någorlunda förståelse för dock saknar jag erfarenheten som krävs för att fullt ut förstå nyttan
och hur och när de olika teknikerna ska tillämpas, vilket jag hoppas ska bli något klarare efter
denna kursen.

####Din uppfattning om Anax, och speciellt Anax-MVC?
Anax gick fort att komma in och arbeta med men jag tycker det är något begränsat och
jag gillade inte alls hur html-koden blandades in i klasserna och när det kommer till en
lite större applikation blir det lätt rörligt samt en hel del duplicerad kod, det kändes också
som att det krävdes nästan lite fulhack för att få det att funka som
önskat, Anax är på intet sätt dåligt men primärt ser jag användnignsområde för en mindre applikation.
Anax-MVC gillar jag dock skarpt och då tänker jag på uppdelning av koden, separation av
html och logik, mycket bättre!


Kmom02:
------------------------------------

####Hur känns det att jobba med Composer?
I början var det inte helt lätt att få kläm på hur det fungerar och det var lite bökigt att få
klart över vilken mapp man skulle installera composer och därtill använda kommandotolken i Windows
som tack gode gud är något bättre i Windows 10 men fortfarande upplever jag den som mer besvärlig än
terminalen i OSX och Linux, så egentligen var kanske den största svårigheten inte composer i
sig utan att använda kommandotolken som känns ruskigt ovant.
Jag kan absolut se fördelarna med det dock mycket smidigt att lägga till paket och dessutom
hålla dem uppdaterade.

####Vad tror du om de paket som finns i Packagist, är det något du kan tänka dig att
####använda och hittade du något spännande att inkludera i ditt ramverk?
Jag tittade bara igenom Packagist som hastigast och då primärt på paket och ramverk som jag
tidigare använt som codeiginter, det kändes viktigare att försöka förstå så mycket som möjligt av
hur ANAX-MVC fungerar så jag lade mest fokus på det, Packagist kommer jag dock att återvända
till framöver.

####Hur var begreppen att förstå med klasser som kontroller som tjänster som dispatchas,
####fick du ihop allt?
Denna delen tycker jag var mycket avancerad, dels inte helt lätt att förstå hur tjänsterna fungerar
och var som ligger var, jag läste på phalcons sida och det gav en del men jag känner fortfarande
att jag är långt ifrån att behärska detta, men det ger sig väl allteftersom kursen fortskrider.
"När man använder en hel klass som kontroller så hämtas den som en tjänst från $di." Till exempel
är inte helt lätt att förstå direkt hur det förhåller sig
med det, som jag tycker mig förstå nu allafall är att kontrollen injectas och blir tillgänglig den
vägen. Men som sagt inte helt glasklart även om jag kan förstå det teoretiska är det inte helt lätt
att omvandla det praktiskt, likaså med genomgången på phalcon av dispatch och DI, bra och
pedagogoisk fast det kommer krävas en hel del träning för att kunna använda och förstå
det praktiskt också.

####Hittade du svagheter i koden som följde med phpmvc/comment? Kunde du förbättra något?
Några svagheter är att felhantering saknas, jag brydde mig inte om att testa att lösa någon
felhanterar pga tidsbrist och det inte känns som att det är lägepå att fokusera på det i nuläget.
En annan sak som jag kanske missat att det finns hjälp med men som jag hade stora svårigheter
med är att det är svårt att testa koden och därför inte helt lätt att felsöka.

####Reflektioner svårigheter
Jag tycker den här uppgiften var lite i mastigaste laget faktiskt, inte att få själva
kommentatorhistorien att fungera utan att lära sig alla delar som pakethanteringen
och övriga begrepp. Annars var det till att sitta och testa, prova sig fram och titta på
andra exempel för att få det att funka.
En tanke som slog mig när jag var klar nu är att det nog är lämpligt att byta namn på kontrollerna
i vendor paketet så att de inte skrivs över om jag uppdaterar koden eller
drar hem en ny kopia, för tillfället har jag bara kopierat mina kontroller men det är värt att
fundera på hur man bäst gör med det i framtiden.

Kmom03:
------------------------------------

####Vad tycker du om CSS-ramverk i allmänhet och vilka tidigare erfarenheter har du av dem?
Jag har tidigare erfarenhet av bootstrap och i tidigare kursmoment har jag använt mig av ett
ramverk som heter skeletton. Ramverk snabbar på utvecklingen riktigt mycket och förenklar men
jag tycker också det kommer med vissa nackdelar, en nackdel är beroendet till ett specifikt ramverk
och sidor byggda med exempelvis bootstrap kan lätt få ett ganska likriktat utseende, dessutom kan
användande av ramverk påverka kunskapsnivån och det är lätt att bli lite lat. I det stora hela är
det dock ett utmärkt verktyg, speciellt om man inte är designer.

####Vad tycker du om LESS, lessphp och Semantic.gs?
Jag har aldrig testat LESS förut och såg inte riktigt fördelarna med det men jag måste säga att
det är grymt att använda variabler. Style.php har jag haft vissa irriterande problem med som att det
inte fungerade att radera cach-filen utan den var tvungen att tas bort helt vilket jag glömde ett
flertal gånger varpå ingen css-kod skapades, tog också en hel del tid att testa less-filerna då
de behövde generaras och ha koll på cach-filen inte ställde till det.
Semantic.gs funkar fint men jag kommer nog att hålla mig till bootstrap eller någon av de
 kloner som finns i framtiden då jag tycker det är betydligt enklare än att behöva hålla på och räkna som
 i semantic.gs.

####Vad tycker du om gridbaserad layout, vertikalt och horisontellt?
Mycket bra och det blir en fin uppdelning av struktur och  design vad gäller färger etc.
####Har du några kommentarer om Font Awesome, Bootstrap, Normalize?
Font Awsome kommer jag absolut fortsätta använda och så även Bootstrap samt Normalize. Det finns
intressant kloner av bootstrap som jag är nyfiken på. Normalize är i stort sett ett måste för att
får ordning på sidan med tanke på problemet hur webläsarna tolkar olika.

####Beskriv ditt tema, hur tänkte du när du gjorde det, gjorde du några utsvävningar?
Jag har haft sådana problem med den här uppgiften att jag nöjde mig med att ändra lite färger och
skriva ut de regioner som angavs i specifiktionen, jag arbetade mer med att få sidan responsive istället
och lära mig mer om den biten, tex ville jag att menyn skulle fungera på mobiler också.

####Antog du utmaningen som extra uppgift?
Nej jag har halkat efter så mycket att det inte finns tid för att göra mer än det nödvändigaste.

####Reflektion
Det här momentet har tagit helt sjukt mycket tid och det har varit en lång kejda av problem :
1. Jag kunde inte få rutnätet att fungera hur jag än gjorde, det fungerade endast i Firefox. Den enda
förklaringen jag kan finna för det är jag inte hade skrivit viewport i min template fil.
2. Jag läste och testade style.php för att dagen efter börja med övningen, i texten stod kopiera
style.php till anax-katalogen vilket jag gjorde istället för katalogen.
3. Min ordning på de importerade less-filerna ställde också till det.
4. Det var också besvärligt att få det att fungera eftersom jag ändrade mina css-filer till min ME-sida
så jag valde att kopiera orginalet från dbwebb.

Trots att det upplevs som stressande att halka efter så här så är jag ändå glad att jag haft alla
dessa problem eftersom jag inte bara har lärt mig LESS utan också har en bättre förståelse
för hur ANAX-MVX fungerar.
Att arbeta med regioner och teman gillar jag riktigt mycket, uppdelningen av kod i struktur och
design vad gäller färger etc är suverän.
