# East Oregon Real Estate
East Oregon Real Estate is a real estate focused marketplace Stratum app, powered by Cascade

### Structure ###
The Stratum platform consists of a single [Wordpress](http://www.wordpress.org) install utilizing pages, posts and other standard Wordpress elements, blended with a set of Stratum plugins and applications.. This instance uses the Cascade Core as a Parent Theme and takes advantage of [Child Themes](https://codex.wordpress.org/Child_Themes) for specific site functionality.

We use [Foundation by Zurb](http://foundation.zurb.com/) as our basic framework and our heavily modified starter theme is [JointsWP](http://jointswp.com/). Updates happen regularly but we expect to not be up to the most current version in most situations. All sites must maintain the same version number on frameworks, and work should always happen first in Staging, and push to Production after Q&A.

### Search ###
Stratum's search is powered by [Swiftype](http://www.swiftype.com) using [Elasticsearch](https://www.elastic.co/products/elasticsearch), providing immediate, actionable insight from data.

### Dependencies ###
#### Flickity JS ####
[Flickity JS](http://flickity.metafizzy.co/) which handles our gallery functionality is served by CDN. Historically, this CDN's url has been changed without notice, so in the case that our sliders stop working, always first check the CDN location.

#### Foundation ####
Stratum currently uses Foundation 6.4.3.