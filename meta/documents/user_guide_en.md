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
            Händler-SKU
        </td>
        <td>
            <b>Required</b><br>
            The <b>item ID</b> of the main variation.
        </td>
    </tr>
    <tr>
        <td>
            Hersteller
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
            <b>Required</b><br>
            <b>Content:</b> According to the format setting <b>Barcode</b>.
        </td>
    </tr>
    <tr>
        <td>
            Produktname
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> According to the format setting <b>Item name</b>.
        </td>
    </tr>
    <tr>
        <td>
            Produktbeschreibung
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> According to the format setting <b>Description</b>.
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
    <tr>
        <td>
            Produkt-URL
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> The <b>URL path</b> of the item depending on the chosen <b>client</b> in the format settings.
        </td>
    </tr>
    <tr>
        <td>
            Produktbild-URL
        </td>
        <td>
            <b>Required</b><br>
            <b>Allowed file types:</b> jpg, gif, bmp, png.<br>
            <b>Content:</b> The <b>URL path</b> of the first item image according to the format setting <b>image</b>. Item images are prioritizied over variation images.
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
            Verfügbar
        </td>
        <td>
            <b>Required</b><br>
            <b>Allowed values:</b> Ja, Nein<br>
            <b>Content:</b> The <b>item availabilty condition</b> of the item. This has the value <b>Ja</b> as predefined value.
        </td>
    </tr>
    <tr>
        <td>
            Verfügbarkeitdetails
        </td>
        <td>
             <b>Content:</b> Translation according to the format setting <b>Override item availabilty</b>.
        </td>
    </tr>
    <tr>
        <td>
            Versand: Landtarif
        </td>
        <td>
            <b>Required</b><br>
            <b>Content:</b> According to the format setting <b>shipping costs</b>.
        </td>
    </tr>
    <tr>
        <td>
            Produktgewicht
        </td>
        <td>
            <b>Content:</b> The <b>weight</b> within <b>Items » Edit item » Open item » Open variation » Settings » Dimensions</b>.
        </td>
    </tr>
    <tr>
        <td>
            Produkttyp
        </td>
        <td>
            <b>Content:</b> The value of a property of the type <b>Text</b> or <b>Selection</b>, that has the backend name <b>product_type</b></b>.
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
            Zustand
        </td>
        <td>
            <b>Content:</b> The condition of the item. According to <b>Item » Edit item » Global » Basic Settings » Condition for API</b>.
        </td>
    </tr>
</table>

## 4 License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE.- find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-shopping-com/blob/master/LICENSE.md).
