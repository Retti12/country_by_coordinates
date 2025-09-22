# API Demo: Definition by Country Coordinates v1.4

This demo shows how to query the WildTracks API to get **country information by coordinates**.

## Files
- `country_by_coordinates.php` — Example PHP script.

## API Endpoint
```
https://wildtracks.pro/api/polygon/{token}/{latitude}/{longitude}/
```

## Example usage
```php
$token = "YOUR_TOKEN";
$latitude = "-37.837617";
$longitude = "-64.788609";
```

## Response fields
- **name** — Country name
- **official_name_english** — Official name of the country in English
- **name_lang** — Country name in different languages
- **demonyms** — Male/female inhabitants names
- **flag** — Country flag
- **icon** — Country icon
- **alpha_3_iso_3166_1** — Three-letter ISO code
- **iso_3166_1** — Two-letter ISO code
- **iso_3166_2** — Administrative ISO codes
- **languages** — Languages spoken
- **religion** — Main religions
- **capital** — Capital city
- **capital_latitude / capital_longitude** — Coordinates of the capital
- **region / subregion** — Region and subregion
- **area** — Country area
- **postal_code_format / postal_code_regex** — Postal code info
- **auto_code** — Auto country code
- **borders** — Neighboring countries
- **callingCode** — Phone code
- **domain** — Country domain zone
- **organizations** — International organizations membership
- **country_latitude / country_longitude** — Country center coordinates
- **currency** — Currency (code and name)
- **website_rating** — Website rating
