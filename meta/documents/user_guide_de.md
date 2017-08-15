# User Guide für das ElasticExportShoppingCOM Plugin

<div class="container-toc"></div>

## 1 Bei Shopping.com registrieren

Shopping.com ist ein internationaler Produkt- und Preisvergleichsdienst.

## 2 Das Format ShoppingCOM-Plugin in plentymarkets einrichten

Um dieses Format nutzen zu können, benötigen Sie das Plugin Elastic Export.

Auf der Handbuchseite [Daten exportieren](https://www.plentymarkets.eu/handbuch/datenaustausch/daten-exportieren/#4) werden die einzelnen Formateinstellungen beschrieben.

In der folgenden Tabelle finden Sie spezifische Hinweise zu den Einstellungen, Formateinstellungen und empfohlenen Artikelfiltern für das Format **ShoppingCOM-Plugin**.
<table>
    <tr>
        <th>
            Einstellung
        </th>
        <th>
            Erläuterung
        </th>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Einstellungen
        </td>
    </tr>
    <tr>
        <td>
            Format
        </td>
        <td>
            <b>ShoppingCOM-Plugin</b> wählen.
        </td>
    </tr>
    <tr>
        <td>
            Bereitstellung
        </td>
        <td>
            <b>URL</b> wählen.
        </td>
    </tr>
    <tr>
        <td>
            Dateiname
        </td>
        <td>
            Der Dateiname muss auf <b>.csv</b> oder <b>.txt</b> enden, damit Shopping.com die Datei erfolgreich importieren kann.
        </td>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Artikelfilter
        </td>
    </tr>
    <tr>
        <td>
            Aktiv
        </td>
        <td>
            <b>Aktiv</b> wählen.
        </td>
    </tr>
    <tr>
        <td>
            Märkte
        </td>
        <td>
            Eine oder mehrere Auftragsherkünfte wählen. Die gewählten Auftragsherkünfte müssen an der Variante aktiviert sein, damit der Artikel exportiert wird.
        </td>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Formateinstellungen
        </td>
    </tr>
    <tr>
        <td>
            Auftragsherkunft
        </td>
        <td>
            Die Auftragsherkunft wählen, die beim Auftragsimport zugeordnet werden soll.
        </td>
    </tr>
    <tr>
        <td>
            Vorschautext
        </td>
        <td>
            Diese Option ist für dieses Format nicht relevant.
        </td>
    </tr>
    <tr>
        <td>
            Bild
        </td>
        <td>
            <b>Erstes Bild</b> wählen.
        </td>
    </tr>
    <tr>
        <td>
            Angebotspreis
        </td>
        <td>
            Diese Option ist für dieses Format nicht relevant.
        </td>
    </tr>
    <tr>
        <td>
            MwSt.-Hinweis
        </td>
        <td>
            Diese Option ist für dieses Format nicht relevant.
        </td>
    </tr>
    <tr>
        <td>
            Artikelverfügbarkeit überschreiben
        </td>
        <td>
            Diese Einstellung muss aktiviert sein, da Shopping.com nur spezifische Werte akzeptiert, die hier eingetragen werden müssen.<br>
            Weitere Informationen dazu in Kapitel <b>Übersicht der verfügbaren Spalten</b>.
        </td>
    </tr>
</table>


## 3 Übersicht der verfügbaren Spalten

<table>
    <tr>
        <th>
            Spaltenbezeichnung
        </th>
        <th>
            Erläuterung
        </th>
    </tr>
    <tr>
        <td>
            ID
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Die <b>SKU</b> der Variante auf Basis der gewählten Auftragsherkunft in den Formateinstellungen.
        </td>
    </tr>
    <tr>
        <td>
            Titel
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Beschränkung:</b> kein HTML-Code erlaubt<br>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Artikelname</b>.
        </td>
    </tr>
    <tr>
        <td>
            Beschreibung
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Beschränkung:</b> kein HTML-Code erlaubt<br>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Beschreibung</b>.
        </td>
    </tr>
    <tr>
        <td>
            Kategorie
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Der <b>Kategoriepfad der Standard-Kategorie</b> für den in den Formateinstellungen definierten <b>Mandanten</b>.
        </td>
    </tr>
    <tr>
        <td>
            Artikel-URL
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Der <b>URL-Pfad</b> des Artikels abhängig vom gewählten <b>Mandanten</b> in den Formateinstellungen.
        </td>
    </tr>
    <tr>
        <td>
            Bild-URL
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Beschränkung:</b> <b>Mindestgröße:</b> 450 x 450 Pixel. <b>Maximalgröße:</b> 1000 x 1000 Pixel, <b>Erlaubte Dateitypen:</b> jpg, gif, bmp, png<br>
            <b>Inhalt:</b> URL zu dem Bild gemäß der Formateinstellungen <b>Bild</b>. Variantenbilder werden vor Artikelbildern priorisiert.
        </td>
    </tr>
    <tr>
        <td>
            Zusätzliche Bild-URL
        </td>
        <td>
            <b>Beschränkung:</b> <b>Mindestgröße:</b> 450 x 450 Pixel. <b>Maximalgröße:</b> 1000 x 1000 Pixel, <b>Erlaubte Dateitypen:</b> jpg, gif, bmp, png<br>
           <b>Inhalt:</b> Liste von Bild-URLs von bis zu 10 zusätzlichen Bildern gemäß der Formateinstellungen <b>Bild</b>. Variantenbilder werden vor Artikelbildern priorisiert.
        </td>
    </tr>
    <tr>
        <td>
            Zustand
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Der <b>Zustand API</b> der Variante. <b>[0]Neu</b> wird als <b>Neu</b> übertragen. Alle anderen Einstellungen werden als **Gebraucht** übertragen.
        </td>
    </tr>
    <tr>
        <td>
            Bestand
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Erlaubte Werte:</b> Auf Lager, Nicht vorrätig, Verfügbar, Auf Vorbestellung<br>
            <b>Inhalt:</b> Übersetzung gemäß der Formateinstellung <b>Artikelverfügbarkeit überschreiben</b>.
        </td>
    </tr>
    <tr>
        <td>
            Marke
        </td>
        <td>
            <b>Inhalt:</b> Der <b>Name des Herstellers</b> des Artikels. Der <b>Externe Name</b> unter <b>Einstellungen » Artikel » Hersteller</b> wird bevorzugt, wenn vorhanden.
        </td>
    </tr>
    <tr>
        <td>
            EAN
        </td>
        <td>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Barcode</b>.
        </td>
    </tr>
    <tr>
        <td>
            Artikelnummer
        </td>
        <td>
            <b>Inhalt:</b> Das <b>Modell</b> unter <b>Artikel » Artikel bearbeiten » Artikel öffnen » Variante öffnen » Einstellungen » Grundeinstellungen</b>.
        </td>
    </tr>
    <tr>
        <td>
            Versandkosten
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Versandkosten</b>.
        </td>
    </tr>
    <tr>
        <td>
            Geschlecht
        </td>
        <td>
            <b>Erlaubte Werte:</b> männlich, weiblich, nicht geschlechtspezifisch<br>
            <b>Inhalt:</b> Der Wert eines Merkmals vom Typ <b>Text</b> oder <b>Auswahl</b>, das mit <b>Shopzilla.de » Geschlecht</b> verknüpft wurde.
        </td>
    </tr>
    <tr>
        <td>
            Altersgruppe
        </td>
        <td>
            <b>Erlaubte Werte:</b> Erwachsene, Kinder<br>
            <b>Inhalt:</b> Der Wert eines Merkmals vom Typ <b>Text</b> oder <b>Auswahl</b>, das mit <b>Shopzilla.de » Altersgruppe</b> verknüpft wurde.
        </td>
    </tr>
    <tr>
        <td>
            Größe
        </td>
        <td>
            <b>Inhalt:</b> Der Wert eines Attributs, bei dem die Attributverknüpfung für <b>Google Shopping</b> mit <b>Text</b> gesetzt wurde. Alternativ der Wert eines Merkmals vom Typ <b>Text</b> oder <b>Auswahl</b>, das mit <b>Shopzilla.de » Größe</b> verknüpft wurde.
        </td>
    </tr>
    <tr>
        <td>
            Farbe
        </td>
        <td>
            <b>Inhalt:</b> Der Wert eines Attributs, bei dem die Attributverknüpfung für <b>Google Shopping</b> mit <b>Farbe</b> gesetzt wurde. Alternativ der Wert eines Merkmals vom Typ <b>Text</b> oder <b>Auswahl</b>, das mit <b>Shopzilla.de » Farbe</b> verknüpft wurde.
        </td>
    </tr>
    <tr>
        <td>
            Material
        </td>
        <td>
            <b>Inhalt:</b> Der Wert eines Attributs, bei dem die Attributverknüpfung für <b>Google Shopping</b> mit <b>Material</b> gesetzt wurde. Alternativ der Wert eines Merkmals vom Typ <b>Text</b> oder <b>Auswahl</b>, das mit <b>Shopzilla.de » Material</b> verknüpft wurde.
        </td>
    </tr>
    <tr>
        <td>
            Muster
        </td>
        <td>
            <b>Inhalt:</b> Der Wert eines Attributs, bei dem die Attributverknüpfung für <b>Google Shopping</b> mit <b>Muster</b> gesetzt wurde. Alternativ der Wert eines Merkmals vom Typ <b>Text</b> oder <b>Auswahl</b>, das mit <b>Shopzilla.de » Muster</b> verknüpft wurde.
        </td>
    </tr>
    <tr>
        <td>
            Produktgruppe
        </td>
        <td>
            <b>Pflichtfeld bei Variantenartikeln</b><br>
            <b>Inhalt:</b> Die Artikel-ID des Artikels.
        </td>
    </tr>
    <tr>
        <td>
            Grundpreis
        </td>
        <td>
            <b>Inhalt:</b> Die <b>Grundpreisinformation</b> im Format "Preis / Einheit". (Beispiel: 10,00 EUR / Kilogramm)
        </td>
    </tr>
    <tr>
        <td>
            Empfohlener Preis
        </td>
        <td>
            <b>Inhalt:</b> Der <b>Verkaufspreis</b> vom Preis-Typ <b>UVP</b> der Variante.
        </td>
    </tr>
    <tr>
        <td>
            Preis
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Der <b>Verkaufspreis</b> der Variante.
        </td>
    </tr>
</table>

## 4 Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-shopping-com/blob/master/LICENSE.md).
