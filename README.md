# Lägg till css/js i admin och/eller en css för wordpress editor

## Hur man använder Region Hallands plugin "region-halland-admin-page-styleguide"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-admin-page-styleguide".


## Användningsområde

Denna plugin kan lägga till css/js i admin och/eller en css för wordpress editor


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-admin-page-styleguide/blob/master/LICENSE)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-admin-page-styleguide.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-admin-page-styleguide.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-admin-page-styleguide": "1.0.0"
},
```


## Konfiguerar sökvägar via .env-filen

Du anger sökväg till css/js resp namn för editor-css i .env-filen via

Admin css
```sh
ADMIN_CSS_PATH=${WP_HOME}/web/[SÖKVÄG TILL CSS-FIL].css
```

Admin js
```sh
ADMIN_JS_PATH=${WP_HOME}/web/[SÖKVÄG TILL JS-FIL].js
```

Wordpress editor (tinyMCE)
```sh
EDITOR_STYLE_NAME=[NAMN PÅ CSS-FIL].css
```

OBS! För editor css måste filen ligga i mappen web/app/themes/[DITT TEMA]/resources.
Är filen placerad i den mappen hittar wordpress editor automatiskt filen



## Versionhistorik

### 1.3.0
- Uppdaterat information om licensmodell
- Bifogat fil med licensmodell

### 1.2.0
- Lagt till kontroller om det finns angivna värden för respektive fil
- Finns inte env-variablerna angivna används inte css/js i admin

### 1.1.0
- Lagt till stöd för editor tinyMCE

### 1.0.0
- Första version
