# ElasticExportShopopingCOM plugin user guide

<div class="container-toc"></div>

## 1 Registering with Shopping.com

Shopping.com is an international product and price comparison service.

## 2 Setting up the data format ShoppingCOM-Plugin in plentymarkets

The plugin Elastic Export is required to use this format.

Refer to the [Exporting data formats for price search engines](https://knowledge.plentymarkets.com/en/basics/data-exchange/exporting-data#30) page of the manual for further details about the individual format settings.

The following table lists details for settings, format settings and recommended item filters for the format **ShoppingCOM-Plugin**.
<table>
    <tr>
        <th>
            Settings
        </th>
        <th>
            Explanation
        </th>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Settings
        </td>
    </tr>
    <tr>
        <td>
            Format
        </td>
        <td>
            Choose <b>ShoppingCOM-Plugin</b>.
        </td>
    </tr>
    <tr>
        <td>
            Provisioning
        </td>
        <td>
            Choose <b>URL</b>.
        </td>
    </tr>
    <tr>
        <td>
            File name
        </td>
        <td>
            The file name must have the ending <b>.csv</b> or <b>.txt</b> for Shopping.com to be able to import the file successfully.
        </td>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Item filter
        </td>
    </tr>
    <tr>
        <td>
            Active
        </td>
        <td>
            Choose <b>active</b>.
        </td>
    </tr>
    <tr>
        <td>
            Markets
        </td>
        <td>
            Choose one or multiple order referrer. The chosen order referrer has to be active at the variation for the item to be exported.
        </td>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Format settings
        </td>
    </tr>
    <tr>
        <td>
            Order referrer
        </td>
        <td>
            Choose the order referrer that should be assigned during the order import.
        </td>
    </tr>
    <tr>
        <td>
            Preview text
        </td>
        <td>
            This option does not affect this format.
        </td>
    </tr>
    <tr>
        <td>
            Image
        </td>
        <td>
            Choose <b>First image</b>.
        </td>
    </tr>
    <tr>
        <td>
            Offer price
        </td>
        <td>
            This option is not relevant for this format.
        </td>
    </tr>
    <tr>
        <td>
            VAT note
        </td>
        <td>
            This option is not relevant for this format.
        </td>
    </tr>
    <tr>
        <td>
            Override item availability
        </td>
        <td>
            This setting has to be activated, because Shopping.com only allows specific values, that have to be filled in.
            You can find further information in chapter <b>Overview of available columns</b>.
        </td>
    </tr>
</table>


## 3 Overview of available columns

<table>
    <tr>
        <th>
            Column name
        </th>
        <th>
            Explanation
        </th>
    </tr>
    <tr>
        <td>
            ID
        </td>
        <td>
            <b>Required</b><br>
            The <b>SKU</b> of the variation based on the chosen order referrer in the format settings.
        </td>
    </tr>
    <tr>
        <td>
            Titel
        </td>
        <td>
            <b>Required</b><br>
            <b>Limitation:</b> no HTML code allowed<br>
            <b>Content:</b> According to the format setting <b>item name</b>.
        </td>
    </tr>
    <tr>
        <td>
            Beschreibung
        </td>
        <td>
            <b>Required</b><br>
            <b>Limitation:</b> no HTML code allowed<br>
            <b>Content:</b> According to the format setting <b>Description</b>.
        </td>
    </tr>
    <tr>
        <td>
            Kategorie
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> The <b>category path of the default cateogory</b> for the defined client in the format settings.
        </td>
    </tr>
    <tr>
        <td>
            Artikel-URL
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> The <b>URL path</b> of the item depending on the chosen <b>client</b> in the format settings.
        </td>
    </tr>
    <tr>
        <td>
            Bild-URL
        </td>
        <td>
            <b>Required</b><br>
            <b>Limitation:</b> <b>Minimium size:</b> 450 x 450 pixel. <b>Maximum size:</b> 1000 x 1000 pixel, <b>Allowed file types:</b> jpg, gif, bmp, png<br>
            <b>Content:</b> URL of the image according to the format setting <b>image</b>. Variation images are prioritizied over item images.
        </td>
    </tr>
    <tr>
        <td>
            Zusätzliche Bild-URL
        </td>
        <td>
             <b>Limitation:</b> <b>Minimium size:</b> 450 x 450 pixel. <b>Maximum size:</b> 1000 x 1000 pixel, <b>Allowed file types:</b> jpg, gif, bmp, png<br>
           <b>Content:</b> A list of up to 10 URLs of the image according to the format setting <b>image</b> separated by comma. Variation images are prioritizied over item images.
        </td>
    </tr>
    <tr>
        <td>
            Zustand
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> The value from <b>Condition for API</b> of the variation will be translated. <b>[0]New</b> will be exported as <b>Neu</b>. Every other option will be exported as **Gebraucht**.
        </td>
    </tr>
    <tr>
        <td>
            Bestand
        </td>
        <td>
            <b>Required</b><br>
            <b>Allowed values:</b><br> Auf Lager, Nicht vorrätig, Verfügbar, Auf Vorbestellung<br>
            <b>Content:</b> Translation according to the format setting <b>Override item availabilty</b>.
        </td>
    </tr>
    <tr>
        <td>
            Marke
        </td>
        <td>
            <b>Content:</b> The <b>name of the manufacturer</b> of the item. The <b>external name</b> within <b>Settings » Items » Manufacturer</b> will be preferred if existing.
        </td>
    </tr>
    <tr>
        <td>
            EAN
        </td>
        <td>
            <b>Content:</b> According to the format setting <b>Barcode</b>.
        </td>
    </tr>
    <tr>
        <td>
            Artikelnummer
        </td>
        <td>
            <b>Content:</b> The <b>model</b> within <b>Items » Edit item » Open item » Open variation » Settings » Basic settings</b>.
        </td>
    </tr>
    <tr>
        <td>
            Versandkosten
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> According to the format setting <b>shipping costs</b>.
        </td>
    </tr>
    <tr>
        <td>
            Geschlecht
        </td>
        <td>
            <b>Allowed values:</b><br> männlich, weiblich, nicht geschlechtspezifisch<br>
            <b>Content:</b> The value of a property of the type <b>Text</b> or <b>Selection</b>, that is linked to <b>Shopzilla.de » Gender</b>.
        </td>
    </tr>
    <tr>
        <td>
            Altersgruppe
        </td>
        <td>
            <b>Allowed values:</b><br> Erwachsene, Kinder<br>
            <b>Content:</b> The value of a property of the type <b>Text</b> or <b>Selection</b>, that is linked to <b>Shopzilla.de » Age group</b>.
        </td>
    </tr>
    <tr>
        <td>
            Größe
        </td>
        <td>
            <b>Content:</b> The value of an attribute, with an attribute link for <b>Google Shopping</b> to  <b>Size</b>. As an alternative the value of a property of the type <b>Text</b> or <b>Selection</b>, that is linked to <b>Shopzilla.de » Size</b> can also be used.
        </td>
    </tr>
    <tr>
        <td>
            Farbe
        </td>
        <td>
            <b>Content:</b> The value of an attribute, with an attribute link for <b>Google Shopping</b> to  <b>Colour</b>. As an alternative the value of a property of the type <b>Text</b> or <b>Selection</b>, that is linked to <b>Shopzilla.de » Colour</b> can also be used.
        </td>
    </tr>
    <tr>
        <td>
            Material
        </td>
        <td>
            <b>Content:</b> The value of an attribute, with an attribute link for <b>Google Shopping</b> to  <b>Material</b>. As an alternative the value of a property of the type <b>Text</b> or <b>Selection</b>, that is linked to <b>Shopzilla.de » Material</b> can also be used.
        </td>
    </tr>
    <tr>
        <td>
            Muster
        </td>
        <td>
            <b>Content:</b> The value of an attribute, with an attribute link for <b>Google Shopping</b> to  <b>Pattern</b>. As an alternative the value of a property of the type <b>Text</b> or <b>Selection</b>, that is linked to <b>Shopzilla.de » Pattern</b> can also be used.
        </td>
    </tr>
    <tr>
        <td>
            Produktgruppe
        </td>
        <td>
            <b>Required for items with variations</b><br>
            <b>Content:</b> The item ID.
        </td>
    </tr>
    <tr>
        <td>
            Grundpreis
        </td>
        <td>
            <b>Content:</b> The <b>base price information</b> in the format "price / unit". (Example: 10,00 EUR / kilogram)
        </td>
    </tr>
    <tr>
        <td>
            Empfohlener Preis
        </td>
        <td>
            <b>Content:</b> <b>Content:</b> The <b>sales price</b> of the price type <b>RRP</b> of the variation.
        </td>
    </tr>
    <tr>
        <td>
            Preis
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> The <b>sales price</b> of the variation.
        </td>
    </tr>
</table>

## 4 License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE.- find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-shopping-com/blob/master/LICENSE.md).
