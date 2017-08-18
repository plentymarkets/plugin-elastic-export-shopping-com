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
            Der Dateiname muss auf <b>.csv</b> oder <b>.txt</b> enden.
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
            Händler-SKU
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Die <b>Artikel-ID</b> des Artikels.
        </td>
    </tr>
    <tr>
        <td>
            Hersteller
        </td>
        <td>
            <b>Inhalt:</b> Der <b>Herstellers</b> des Artikels. Der <b>Externe Name</b> unter <b>Einstellungen » Artikel » Hersteller</b> wird bevorzugt, wenn vorhanden.
        </td>
    </tr>
    <tr>
        <td>
            EAN
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Barcode</b>.
        </td>
    </tr>
    <tr>
        <td>
            Produktname
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Artikelname</b>.
        </td>
    </tr>
    <tr>
        <td>
            Produktbeschreibung
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Beschreibung</b>.
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
    <tr>
        <td>
            Produkt-URL
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Der <b>URL-Pfad</b> des Artikels abhängig vom gewählten <b>Mandanten</b> in den Formateinstellungen.
        </td>
    </tr>
    <tr>
        <td>
            Produktbild-URL
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Erlaubte Dateitypen:</b> jpg, gif, bmp, png.<br>
            <b>Inhalt:</b> Der <b>URL-Pfad</b> des ersten Artikelbilds entsprechend der Formateinstellung <b>Bild</b>. Artikelbilder werden vor Variantenbilder priorisiert.
        </td>
    </tr>
    <tr>
        <td>
            Kategorie
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Der <b>Kategoriepfad der Standardkategorie</b> für den in den Formateinstellungen definierten <b>Mandanten</b>.
        </td>
    </tr>
    <tr>
        <td>
            Verfügbar
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Erlaubte Werte:</b> Ja, Nein<br>
            <b>Inhalt:</b> Der <b>Artikel Verfügbarkeitszustand</b> des Artikels. Dies hat den Wert <b>Ja</b> als vordefinierten Wert.
        </td>
    </tr>
    <tr>
        <td>
            Verfügbarkeitdetails
        </td>
        <td>
            <b>Inhalt:</b> Übersetzung gemäß der Formateinstellung <b>Artikelverfügbarkeit überschreiben</b>.
        </td>
    </tr>
    <tr>
        <td>
            Versand: Landtarif
        </td>
        <td>
            <b>Pflichtfeld</b><br>
            <b>Inhalt:</b> Entsprechend der Formateinstellung <b>Versandkosten</b>.
        </td>
    </tr>
    <tr>
        <td>
            Produktgewicht
        </td>
        <td>
            <b>Inhalt:</b> Das <b>Gewicht</b> wie unter <b>Artikel » Artikel bearbeiten » Artikel öffnen » Variante öffnen » Einstellungen » Maße</b> definiert.
        </td>
    </tr>
    <tr>
        <td>
            Produkttyp
        </td>
        <td>
            <b>Inhalt:</b> Der Wert eines Merkmals vom Typ <b>Text</b> oder <b>Auswahl</b>, das mit <b>product_type</b> verknüpft ist.
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
</table>

## 4 Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-shopping-com/blob/master/LICENSE.md).
