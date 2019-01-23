# User Guide für das ElasticExportShoppingCOM Plugin

<div class="container-toc"></div>

## 1 Bei Shopping.com registrieren

Shopping.com ist ein internationaler Produkt- und Preisvergleichsdienst.

## 2 Das Format ShoppingCOM-Plugin in plentymarkets einrichten

Mit der Installation dieses Plugins erhalten Sie das Exportformat **ShoppingCOM-Plugin**, mit dem Sie Daten über den elastischen Export zu Shopping.com übertragen. Um dieses Format für den elastischen Export nutzen zu können, installieren Sie zunächst das Plugin **Elastic Export** aus dem plentyMarketplace, wenn noch nicht geschehen. 

Sobald beide Plugins in Ihrem System installiert sind, kann das Exportformat **ShoppingCOM-Plugin** erstellt werden. Weitere Informationen finden Sie auf der Handbuchseite [Elastischer Export](https://knowledge.plentymarkets.com/basics/datenaustausch/elastischer-export).

Neues Exportformat erstellen:

1. Öffnen Sie das Menü **Daten » Elastischer Export**.
2. Klicken Sie auf **Neuer Export**.
3. Nehmen Sie die Einstellungen vor. Beachten Sie dazu die Erläuterungen in Tabelle 1.
4. **Speichern** Sie die Einstellungen.
→ Eine ID für das Exportformat **ShoppingCOM-Plugin** wird vergeben und das Exportformat erscheint in der Übersicht **Exporte**.

In der folgenden Tabelle finden Sie Hinweise zu den einzelnen Formateinstellungen und empfohlenen Artikelfiltern für das Format **ShoppingCOM-Plugin**.

| **Einstellung**                                     | **Erläuterung**|
| :---                                                | :--- |                                            
| **Einstellungen**                                   | |
| **Name**                                            | Name eingeben. Unter diesem Namen erscheint das Exportformat in der Übersicht im Tab **Exporte**. |
| **Typ**                                             | Typ **Artikel** aus der Dropdown-Liste wählen. |
| **Format**                                          | Das Format **TreepodiaCOM-Plugin** wählen. |
| **Limit**                                           | Zahl eingeben. Wenn mehr als 9999 Datensätze an die Preissuchmaschine übertragen werden sollen, wird die Ausgabedatei für 24 Stunden nicht noch einmal neu generiert, um Ressourcen zu sparen. Wenn mehr mehr als 9999 Datensätze benötigt werden, muss die Option **Cache-Datei generieren** aktiv sein. |
| **Cache-Datei generieren**                          | Häkchen setzen, wenn mehr als 9999 Datensätze an die Preissuchmaschine übertragen werden sollen. Um eine optimale Perfomance des elastischen Exports zu gewährleisten, darf diese Option bei maximal 20 Exportformaten aktiv sein. |
| **Bereitstellung**                                  | Die Bereitstellung **URL** wählen. Mit dieser Option kann ein Token für die Authentifizierung generiert werden, damit ein externer Zugriff möglich ist. |
| **Dateiname**                                       | Der Dateiname muss auf **.csv** oder **.txt** enden, damit Shopping.com die Datei erfolgreich importieren kann. |
| **Token, URL**                                      | Wenn unter Bereitstellung die Option **URL** gewählt wurde, auf **Token generieren** klicken. Der Token wird dann automatisch eingetragen. Die URL wird automatisch eingetragen, wenn unter **Token** der Token generiert wurde. |
| **Artikelfilter**                                   | |
| **Artikelfilter hinzufügen**                        | Artikelfilter aus der Dropdown-Liste wählen und auf **Hinzufügen** klicken. Standardmäßig sind keine Filter voreingestellt. Es ist möglich, alle Artikelfilter aus der Dropdown-Liste nacheinander hinzuzufügen.<br/> **Varianten** = **Alle übertragen** oder **Nur Hauptvarianten übertragen** wählen.<br/> **Märkte** = Eine oder mehrere Auftragsherkünfte wählen. Die gewählten Auftragsherkünfte müssen an der Variante aktiviert sein, damit der Artikel exportiert wird.<br/> **Währung** = Währung wählen.<br/> **Kategorie** = Aktivieren, damit der Artikel mit Kategorieverknüpfung übertragen wird. Es werden nur Artikel, die dieser Kategorie zugehören, übertragen.<br/> **Bild** = Aktivieren, damit der Artikel mit Bild übertragen wird. Es werden nur Artikel mit Bildern übertragen.<br/> **Mandant** = Mandant wählen.<br/> **Markierung 1 - 2** = Markierung wählen.<br/> **Hersteller** = Einen, mehrere oder **ALLE** Hersteller wählen.<br/> **Aktiv** = **Aktiv** wählen. Nur aktive Varianten werden übertragen. |
| **Formateinstellungen**                             | |
| **Produkt-URL**                                     | Wählen, ob die URL des Artikels oder der Variante an die Preissuchmaschine übertragen wird. Varianten-URLs können nur in Kombination mit dem Ceres Webshop übertragen werden. |
| **Mandant**                                         | Mandant wählen. Diese Einstellung wird für den URL-Aufbau verwendet. |
| **URL-Parameter**                                   | Suffix für die Produkt-URL eingeben, wenn dies für den Export erforderlich ist. Die Produkt-URL wird dann um die eingegebene Zeichenkette erweitert, wenn weiter oben die Option **übertragen** für die Produkt-URL aktiviert wurde. |
| **Auftragsherkunft**                                | Aus der Dropdown-Liste die Auftragsherkunft wählen, die beim Auftragsimport zugeordnet werden soll. |
| **Marktplatzkonto**                                 | Marktplatzkonto aus der Dropdown-Liste wählen. Die Produkt-URL wird um die gewählte Auftragsherkunft erweitert, damit die Verkäufe später analysiert werden können. |
| **Sprache**                                         | Sprache aus der Dropdown-Liste wählen. |
| **Artikelname**                                     | **Name 1**, **Name 2** oder **Name 3** wählen. Die Namen sind im Tab **Texte** eines Artikels gespeichert.<br/> Im Feld **Maximale Zeichenlänge (def. Text)** optional eine Zahl eingeben, wenn Rakuten eine Begrenzung der Länge des Artikelnamen beim Export vorgibt. |
| **Vorschautext**                                    | Diese Option ist für dieses Format nicht relevant. |
| **Beschreibung**                                    | Wählen, welcher Text als Beschreibungstext übertragen werden soll.<br/> Im Feld **Maximale Zeichenlänge (def. Text)** optional eine Zahl eingeben, wenn die Preissuchmaschine eine Begrenzung der Länge der Beschreibung beim Export vorgibt.<br/> Option **HTML-Tags entfernen** aktivieren, damit die HTML-Tags beim Export entfernt werden.<br/> Im Feld **Erlaubte HTML-Tags, kommagetrennt (def. Text)** optional die HTML-Tags eingeben, die beim Export erlaubt sind. Wenn mehrere Tags eingegeben werden, mit Komma trennen. |
| **Zielland**                                        | Zielland aus der Dropdown-Liste wählen. |
| **Barcode**                                         | **ASIN**, **ISBN** oder eine **EAN** aus der Dropdown-Liste wählen. Der gewählte Barcode muss mit der oben gewählten Auftragsherkunft verknüpft sein. Andernfalls wird der Barcode nicht exportiert. |
| **Bild**                                            | **Erstes Bild** wählen. |
| **Bildposition des Energieetiketts**                | Diese Option ist für dieses Format nicht relevant. |
| **Bestandspuffer**                                  | Der Bestandspuffer für Varianten mit der Beschränkung auf den Netto-Warenbestand. |
| **Bestand für Varianten ohne Bestandsbeschränkung** | Der Bestand für Varianten ohne Bestandsbeschränkung. |
| **Bestand für Varianten ohne Bestandsführung**      | Der Bestand für Varianten ohne Bestandsführung. |
| **Währung live umrechnen**                          | Aktivieren, damit der Preis je nach eingestelltem Lieferland in die Währung des Lieferlandes umgerechnet wird. Der Preis muss für die entsprechende Währung freigegeben sein. |
| **Verkaufspreis**                                   | Brutto- oder Nettopreis aus der Dropdown-Liste wählen. |
| **Angebotspreis**                                   | Diese Option ist für dieses Format nicht relevant. |
| **UVP**                                             | Aktivieren, um den UVP zu übertragen. |
| **Versandkosten**                                   | Aktivieren, damit die Versandkosten aus der Konfiguration übernommen werden. Wenn die Option aktiviert ist, stehen in den beiden Dropdown-Listen Optionen für die Konfiguration und die Zahlungsart zur Verfügung.<br/> Option **Pauschale Versandkosten übertragen** aktivieren, damit die pauschalen Versandkosten übertragen werden. Wenn diese Option aktiviert ist, muss im Feld darunter ein Betrag eingegeben werden. |
| **MwSt.-Hinweis**                                   | Diese Option ist für dieses Format nicht relevant. |
| **Artikelverfügbarkeit überschreiben**              | Diese Einstellung muss aktiviert sein, da Shopping.com nur spezifische Werte akzeptiert, die hier eingetragen werden müssen.<br/> Weitere Informationen dazu finden Sie im Kapitel **Verfügbare Spalten der Exportdatei**. |

_Tab. 1: Einstellungen für das Datenformat **ShoppingCOM-Plugin**_

## 3 Verfügbare Spalten der Exportdatei

| **Spaltenbezeichnung** | **Erläuterung** |
| :---                   | :--- |
| Händler-SKU            | **Pflichtfeld**<br/> Die Artikel-ID des Artikels. |
| Hersteller             | Der Hersteller des Artikels. Der **Externe Name** unter **System » Artikel »  Hersteller** wird bevorzugt, wenn vorhanden. |
| EAN                    | **Pflichtfeld**<br/> Entsprechend der Formateinstellung **Barcode**. |
| Produktname            | **Pflichtfeld**<br/> Entsprechend der Formateinstellung **Artikelname**. |
| Produktbeschreibung    | **Pflichtfeld**<br/> Entsprechend der Formateinstellung **Beschreibung**. |
| Preis                  | **Pflichtfeld**<br/> Der Verkaufspreis der Variante. |
| Produkt-URL            | **Pflichtfeld**<br/> Der **URL-Pfad** des Artikels abhängig vom gewählten Mandanten in den Formateinstellungen. |
| Produktbild-URL        | **Pflichtfeld**<br/> Erlaubte Dateitypen: jpg, gif, bmp, png<br/> Der **URL-Pfad** des ersten Artikelbilds entsprechend der Formateinstellung **Bild**. Artikelbilder werden vor Variantenbildern priorisiert. |
| Kategorie              | **Pflichtfeld**<br/> Der **Kategoriepfad der Standardkategorie** für den in den Formateinstellungen definierten **Mandanten**. |
| Verfügbar              | **Pflichtfeld**<br/> Erlaubte Werte: Ja, Nein<br/> Der Verfügbarkeitszustand des Artikels. Dies hat den Wert **Ja** als vordefinierten Wert. |
| Verfügbarkeitsdetails  | Übersetzung gemäß der Formateinstellung **Artikelverfügbarkeit überschreiben**. |
| Versand: Landtarif     | **Pflichtfeld**<br/> Entsprechend der Formateinstellung **Versandkosten**. |
| Produktgewicht         | Das Gewicht wie unter **Artikel » Artikel bearbeiten » Artikel öffnen » Variante öffnen » Tab: Einstellungen » Maße** definiert. |
| Produkttyp             | Der Wert eines Merkmals vom Typ **Text** oder **Auswahl**, das mit **product_type** verknüpft ist. |
| Grundpreis             | Die Grundpreisinformation im Format "Preis / Einheit" (Beispiel: 10,00 EUR / Kilogramm). |
| Zustand                | Der Zustand des Artikels gemäß der Einstellung unter **Artikel » Artikel bearbeiten » Artikel öffnen » Tab: Global » Grundeinstellungen » Zustand API**. |

## 4 Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-shopping-com/blob/master/LICENSE.md).
