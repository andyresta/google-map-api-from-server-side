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
