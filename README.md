# Magento 2 Google Map Extension

[Google Maps extension](https://www.mageplaza.com/magento-2-google-maps/) by Mageplaza allows stores to set the location on the web page. The  Contact Us page with information about real location will make your site become more professional and reliable in the customer’s mind. 

## 1. Documentation

- Installation guide(https://www.mageplaza.com/install-magento-2-extension/)
- User guide(https://docs.mageplaza.com/google-maps/index.html)
- Introduction page(http://www.mageplaza.com/magento-2-google-maps/)
- Contribute on Github(https://github.com/mageplaza/magento-2-google-maps)
- Get Support(https://github.com/mageplaza/magento-2-google-maps/issues)

## 2. FAQs

**Q: I got error: Mageplaza_Core has been already defined**

A: Read solution [here](https://github.com/mageplaza/module-core/issues/3).

**Q: Where the map can be displayed on my page?**

A: Google Maps can be set at the top or bottom of Contact Page, by navigating to `Store > Settings > Configuration > Mageplaza Extensions > Google Maps > General > Position` and select the appropriate position.

**Q: Can I customize how the map can be seen on the website?**

A: Absolutely yes, there are 4 map types and 10 map styles for you to choose.

**Q: Can the customer drag and zoom in/out the map?**

A: The customer can easily drag to see the surrounding area of the store. However, it is unable to zoom the map, this feature is available in [Mageplaza Store Locator Extension](https://www.mageplaza.com/magento-2-store-locator/).

**Q: How my store will look like on the map?**

A: There is a customizable Marker showing the exact position of your store. You can freely choose the Marker icon to be displayed.

**Q: Will the map be available on mobile devices?**

A: Yes, the extension works well on the mobile version.

## 3. How to install Google Maps extension for Magento 2

Install via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-google-maps
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## 4. Highlight Features

### Optimize Contact Page appearance

No more boring text to show the store location, store owners now can get the Contact Page with a more eye-catching view by Google Maps, with a marker showing exactly the store location.
Magento 2 Google Maps extension by Mageplaza enable the store owner to set the position of the map at the top or bottom of the Contact Page.

![google map 1](https://i.imgur.com/XvKPOc7.png)

### Adjustable map’s display

Google Maps plugin let the website admin be possible to change how it appears on frontend flexibly. The marker showing the exact location can be configured freely. Furthermore, there are 4 options for map type which are:
- Terrain 
- Roadmap
- Satellite
- Hybrid

And 10 available map styles:
- Default 
- Blue Essence
- Dark Green
- Dark Grey
- Desert
- Light Blue Water
- Light Dream
- Light Grey
- Mid Night
- Nature Color

![google map 2](https://i.imgur.com/xjVeMQw.gif)

### Optional maps embedding 

Mageplaza Google Maps module offers 2 options to add a map on the website. The first option is using Google API key, which gets the allowance to be displayed map from Google. The second one is directly embedding Google iFrame code, which is more simple.

![google map 3](https://i.imgur.com/uEubJ59.png)

### Automatically get GPS coordinates

By using Google API key, once the address information is provided, GPS coordinates can be automatically defined according to the latitude and longitude. These coordinates can be adjusted by the admin, to get the exact location for the marker.

![google map 4](https://i.imgur.com/WM5rPrr.gif)

## 5. More features 

#### Map dragging

It is able to drag the map and see the surrounding area of the store location.

#### Mobile friendliness

Magento 2 Google Maps can work well with both mobile and desktop devices.

#### Extension compatibility 

The extension is responsive with Mageplaza Store Locator Extension. It is also compatible with almost third-party modules.

## 6. Full features list

### For store owners

- Easily enable/ disable the Google Maps
- Select the map’s position on Contact Page
- 2 options to validate Google Map: Google API key/ Embedded code
- 4 options for map type
- 10 options for map style
- Enable/Disable map dragging
- Set default enlargement for map
- Adjustable Marker icon
- Automatically get GPS coordinates after inserting store address

### For shoppers

- View store location more visually
- Visually view the location of the store
- Be able to drag the map and view the surrounding location
- Feel more reliable about the contact information

## 7. User Guide

Magento 2 default Contact Us Page is too simple, it only allows displaying text. With the new extension Google Maps by Mageplaza, it is possible to easily get Google Maps displayed on the Contact Us Page. This also helps your store improve customer trust when they know your exact location.

### 7.1. Configuration

Login to `Magento Admin`, navigate to `Store > Settings > Configuration > Mageplaza Extensions > Google Maps`. 

![google map5](https://i.imgur.com/1whyq2O.png)

#### 7.1.1. General 

![google map6](https://i.imgur.com/d4APcsp.png)

- **Enable**: Select `Yes` to activate Google Maps
- **Insert on Contact Page**: Select Yes to add Google Maps into the Contact Page and display **Position** field
- **Position**: **Top** and **Bottom** are 2 positions that are able to display the map on Contact Page

#### 7.1.2 Map Settings

There are 2 map setting modes as follows:

**1. Protocol = API**

![google map7](https://i.imgur.com/DuwUmKN.gif)

- **Google API key**: Insert Google API key. Get Google API key Here. 
- **Map Type**: There are 4 map displaying options: Roadmap, Terrain, Satellite, and Hybrid.
- **Map Style**: Displayed map style on the frontend. There are 10 main popular map styles:

![google map8](https://i.imgur.com/r58s0lD.png)

- **Allow Map Dragging**: Select `Yes` to enable drag and drop on the map
- **Zoom Default**: The default map enlargement 
- **Marker Icon**: The icon which marks the exact position on the map. The optima icon size is 20 x 20px.

**Location Settings**: `Map Settings > Location Settings`

![google map9](https://i.imgur.com/gahJH9q.png)

- **Address** : Insert the address which need to be displayed on the map. Hit the button `Get GPS coordinates` to load **Latitude** and **Longitude**.
- **Latitude**: Enter the latitude of the location
- **Longitude**: Enter the longitude of the location

**2. Protocol = Embed Code**

With this method, it is possible to add the map on frontend interface by embedding Google iFrame code, without any of following map settings.

![google map10](https://i.imgur.com/BmH5sUb.png)

- Code: Embed Google iFrame code. 

### 7.2. Widget

By adding widget, you can add the map wherever on the store. Widget can be created by the following steps:

**Step 1**: Login to **Magento Admin**, move to `Content > Elements > Widgets`

**Step 2**: Click the `Add Widget` button to start widget setting

![google map11](https://i.imgur.com/wD8WSPH.png)

- Select `Mageplaza Google Maps` for **Type** field, `Magento Luma` for **Design Theme**. Then click `Continue`

**Step 3**: Fill up required information in **Storefront Properties**

![google map12](https://i.imgur.com/2eBq7oz.png)

**Step 4**: Choose the position to display the widget

From `Layout Updates` > Click to `Add Layout Updates` button

**Step 5**: `Save > System`. Navigate to `Cache Management`, hit the `Flush Magento Cache` button.

### 7.3. Frontend

**Using API**

![google map13](https://i.imgur.com/tX0nWDI.png)

![google map14](https://i.imgur.com/p0f9him.png)

**Using Embed Code**

![google map15](https://i.imgur.com/Z1fEfje.png)






