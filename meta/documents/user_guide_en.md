# ElasticExportShoppingCOM plugin user guide

<div class="container-toc"></div>

## 1 Registering with Shopping.com

Shopping.com is an international product and price comparison service.

## 2 Setting up the data format ShoppingCOM-Plugin in plentymarkets

By installing this plugin you will receive the export format **ShoppingCOM-Plugin**. Use this format to exchange data between plentymarkets and Shopping.com. It is required to install the Plugin **Elastic Export** from the plentyMarketplace first before you can use the format **ShoppingCOM-Plugin** in plentymarkets.

Once both plugins are installed, you can create the export format **ShoppingCOM-Plugin**. Refer to the [Elastic Export](https://knowledge.plentymarkets.com/en/data/exporting-data/elastic-export) page of the manual for further details about the individual format settings.

Creating a new export format:

1. Go to **Data » Elastic export**.
2. Click on **New export**.
3. Carry out the settings as desired. Pay attention to the information given in table 1.
4. **Save** the settings.<br>
→ The export format is given an ID and it appears in the overview within the **Exports** tab.

The following table lists details for settings, format settings and recommended item filters for the format **ShoppingCOM-Plugin**.

| **Setting**                                          | **Explanation**|
| :---                                                 | :--- |                                            
| **Settings**                                         | |
| **Name**                                             | Enter a name. The export format is listed by this name in the overview within the **Exports** tab. |
| **Type**                                             | Select the type **Item** from the drop-down list. |
| **Format**                                           | Select **ShoppingCOM-Plugin**. |
| **Limit**                                            | Enter a number. If you want to transfer more than 9,999 data records to the price search engine, then the output file will not be generated again for another 24 hours. This is to save resources. If more than 9,999 data records are necessary, the setting **Generate cache file** has to be active. |
| **Generate cache file**                              | Place a check mark if you want to transfer more than 9,999 data records to the price search engine. The output file will not be regenerated for another 24 hours. We recommend that you do not activate this setting for more than 20 export formats. This is to ensure a high performance of the elastic export. |
| **Provisioning**                                     | Select **URL**. This option generates a token for authentication in order to allow external access. |
| **File name**                                        | The file name must have the ending **.csv** or **.txt** for Shopping.com to be able to import the file successfully. |
| **Token, URL**                                       | If you have selected the option **URL** under **Provisioning**, then click on Generate token. The token will be entered automatically. The URL is entered automatically if the token has been generated under **Token**. |
| **Item filters**                                     | |
| **Add item filters**                                 | Select an item filter from the drop-down list and click on **Add**. There are no filters set in default. It is possible to add multiple item filters from the drop-down list one after the other.<br/> **Variations** = Select **Transfer all** or **Only transfer main variations**.<br/> **Markets** = Choose one or multiple order referrers. The chosen order referrer has to be active at the variation for the item to be exported.<br/> **Currency** = Select a currency.<br/> **Category** = Activate to transfer the item with its category link. Only items belonging to this category are exported.<br/> **Image** = Activate to transfer the item with its image. Only items with images are transferred.<br/> **Client** = Select a client.<br/> **Stock** = Select which stocks you want to export.<br/> **Flag 1 - 2** = Select the flag.<br/> **Manufacturer** = Select one, several or ALL manufacturers.<br/> **Active** = Select **Active**. Only active variations are exported. |
| **Format settings**                                  | |
| **Product URL**                                      | Choose the URL that you wish to transfer to the price comparison portal. You can choose between the item’s URL and the variation’s URL. URLs of variations can only be transferred in combination with the Ceres store. |
| **Client**                                           | Select a client. This setting is used for the URL structure. |
| **URL parameter**                                    | Enter a suffix for the product URL if this is required for the export. This character string is added to the product URL if you have activated the transfer option for the product URL further up. |
| **Order referrer**                                   | Select the order referrer that should be assigned during the order import. The selected referrer is added to the product URL so that sales can be analysed later. |
| **Marketplace account**                              | Select the marketplace account from the drop-down list. |
| **Language**                                         | Select the language from the drop-down list. |
| **Item name**                                        | Select **Name 1**, **Name 2** or **Name 3**. These names are saved in the **Texts** tab of the item.<br/> Enter a number into the **Maximum number of characters (def. Text)** field if desired. This specifies how many characters are exported for the item name. |
| **Preview text**                                     | This option does not affect this format. |
| **Description**                                      | Select the text that you want to transfer as description.<br/> Enter a number into the **Maximum number of characters (def. text) field** if desired. This specifies how many characters should be exported for the description.<br/> Activate the option **Remove HTML tags** if you want HTML tags to be removed during the export.<br/> If you only want to allow specific HTML tags to be exported, then enter these tags into the field **Permitted HTML tags, separated by comma (def. Text)**. Use commas to separate multiple tags. |
| **Target country**                                   | Select the target country from the drop-down list. |
| **Barcode**                                          | Select the **ASIN**, **ISBN** or an **EAN** from the drop-down list. The barcode has to be linked to the order referrer selected above. If the barcode is not linked to the order referrer, it will not be exported. |
| **Image**                                            | Select **First image**. |
| **Image position of the energy efficiency label**    | This option does not affect this format. |
| **Stockbuffer**                                      | The stock buffer for variations with limitation to the net stock. |
| **Stock for variations without stock limitation**    | The stock for variations without stock limitation. |
| **Stock for variation without stock administration** | The stock for variations without stock administration. |
| **Live currency conversion**                         | Activate this option to convert the price into the currency of the selected country of delivery. The price has to be released for the corresponding currency. |
| **Retail price**                                     | Select the gross price or net price from the drop-down list. |
| **Offer price**                                      | This option does not affect this format. |
| **RRP**                                              | Activate to transfer the RRP. |
| **Shipping costs**                                   | Activate this option if you want to use the shipping costs that are saved in a configuration. If this option is activated, then you are able to select the configuration and the payment method from the drop-down lists.<br/> Activate the option **Transfer flat rate shipping charge** if you want to use a fixed shipping charge. If this option is activated, a value has to be entered in the line underneath. |
| **VAT note**                                         | This option does not affect this format. |
| **Overwrite item availability**                      | This setting has to be activated because Shopping.com only accepts specific values which have to be entered here.<br/> For further information, refer to the chapter **Available columns of the export file**. |

_Tab. 1: Settings for the data format **ShoppingCOM-Plugin**_

## 3 Available columns of the export file

| **Column description** | **Explanation** |
| :---                   | :--- |
| Händler-SKU            | **Required**<br/> The item ID of the main variation. |
| Hersteller             | The **name of the manufacturer** of the item. The **external name** within **Setup » Item » Manufacturer** is preferred if existing. |
| EAN                    | **Required**<br/> According to the format setting **Barcode**. |
| Produktname            | **Required**<br/> According to the format setting **Item name**. |
| Produktbeschreibung    | **Required**<br/> According to the format setting **Description**. |
| Preis                  | **Required**<br/> The sales price of the variation. |
| Produkt-URL            | **Required**<br/> The **URL path** of the item depending on the chosen client in the format settings. |
| Produktbild-URL        | **Required**<br/> Allowed file types: jpg, gif, bmp, png<br/> The **URL path** of the first item image according to the format setting **Image**. Item images are prioritised over variation images. |
| Kategorie              | **Required**<br/> The **category path of the default category** for the defined client in the format settings. |
| Verfügbar              | **Required**<br/> Allowed values: Ja ,Nein<br/> The item availability condition of the item. The predefined value is **Ja**. |
| Verfügbarkeitsdetails  | Translation according to the format setting **Overwrite item availability**. |
| Versand: Landtarif     | **Required**<br/> According to the format setting **shipping costs**. |
| Produktgewicht         | The weight as set within **Item » Edit item » Open item » Open variation » Tab: Settings » Dimensions**. |
| Produkttyp             | The value of a property of the type **Text** or **Selection** that has the backend name **product_type**. |
| Grundpreis             | The base price information in the format "price / unit" (example: 10.00 EUR / kilogram). |
| Zustand                | The condition of the item according to the setting **Item » Edit item » Tab: Global » Basic settings » Condition for API**. |

## 4 License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE.- find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-shopping-com/blob/master/LICENSE.md).
