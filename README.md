# google-map-api-from-server-side
Accessing google map from server side with php programming
you can get location, lng, long, distance between two point, suggesstion from server side.

## Usage
```php
<?php
  include 'GoogleMapApiServerSide.php';
  $gmap = $g=new GoogleMapApiServerSide();
  // and you can get call their method
  echo $g->get_detail_place_by_searchterm("monas jakarta indonesia","json");
  echo $g->get_detail_place_by_lnglat("-6.9843281,110.4093032","json");
  echo $g->get_suggestion_place("beach indonesia","json");
  echo $g->get_distance_two_place("-6.9843281,110.4093032","-6.9902904,110.4229372","json");
?>
```
## Method description
### get_detail_place_by_searchterm
you can get detail of place by your search term, And output like this below
```js
{ "results" : [ { "address_components" : [ { "long_name" : "Gambir", "short_name" : "Gambir", "types" : [ "administrative_area_level_3", "political" ] }, { "long_name" : "Gambir", "short_name" : "Gambir", "types" : [ "administrative_area_level_4", "political" ] }, { "long_name" : "Central Jakarta City", "short_name" : "Central Jakarta City", "types" : [ "administrative_area_level_2", "political" ] }, { "long_name" : "Jakarta", "short_name" : "Jakarta", "types" : [ "administrative_area_level_1", "political" ] }, { "long_name" : "Indonesia", "short_name" : "ID", "types" : [ "country", "political" ] } ], "formatted_address" : "Gambir, Central Jakarta City, Jakarta, Indonesia", "geometry" : { "location" : { "lat" : -6.1753924, "lng" : 106.8271528 }, "location_type" : "GEOMETRIC_CENTER", "viewport" : { "northeast" : { "lat" : -6.174043419708497, "lng" : 106.8285017802915 }, "southwest" : { "lat" : -6.176741380291502, "lng" : 106.8258038197085 } } }, "place_id" : "ChIJLbFk59L1aS4RyLzp4OHWKj0", "plus_code" : { "compound_code" : "RRFG+RV Gambir, Central Jakarta City, Jakarta, Indonesia", "global_code" : "6P58RRFG+RV" }, "types" : [ "establishment", "point_of_interest" ] } ], "status" : "OK" }
```
