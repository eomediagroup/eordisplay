<?php
/**
 * The template part for injecting a DFP ad script 
 * which will allow ad tags to display
 */
?>

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/1004429/CM_coast_marketplace/CM_featured_ad_1', ['fluid'], 'div-gpt-ad-1517507997537-0').addService(googletag.pubads());
    googletag.defineSlot('/1004429/CM_coast_marketplace/CM_featured_ad_2', ['fluid'], 'div-gpt-ad-1517507997537-1').addService(googletag.pubads());
    googletag.defineSlot('/1004429/CM_coast_marketplace/CM_featured_ad_3', ['fluid'], 'div-gpt-ad-1517507997537-2').addService(googletag.pubads());
    googletag.defineSlot('/1004429/CM_coast_marketplace/CM_featured_ad_4', ['fluid'], 'div-gpt-ad-1517507997537-3').addService(googletag.pubads());
    googletag.defineSlot('/1004429/CM_coast_marketplace/CM_featured_ad_5', ['fluid'], 'div-gpt-ad-1517507997537-4').addService(googletag.pubads());
    googletag.defineSlot('/1004429/CM_coast_marketplace/CM_featured_ad_6', ['fluid'], 'div-gpt-ad-1517507997537-5').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>