# Hypermedia Applications
@Polimi, TIM REDESIGN , project repository for Mattia Bianchi, Federico Cesaro and Filippo Ciceri


The site has been published online at http://hmproj2.altervista.org/ . 

The site was built using bootstrap and jquery, as well as basic js DOM functions. The only important external library we used was the jquery cookie library, available at https://github.com/carhartl/jquery-cookie , used mainly to store language settings and passing parameters between pages. We used localstorage in the mobile build, due to issues with phonegap and cookies.

To build the multilanguage site, we used php to dynamically generate the pages. Essentially, through php we pull strings for every occurence of text in the website, barring database calls. The language is stored both server side associated to the session, and clientside with a cookie. The rest of the site is in html, and all database calls are still done as POSTS with ajax. This choice was discussed and approved during class sessions.

Our mobile build instead lives on another repository. We had to convert every page from php with soft references to every string, to hardcoding everything in the html page. For the sake of simplicity, our final mobile build is in italian. Database calls in the mobile build are done via ajax on the remote altervista website. The mobile build is available at https://github.com/fciceri17/hmproj_bianchi_cesaro_ciceri-mobile .



We slightly adjusted our site in relation to our old mockups. First of all, we removed the search functionality to simplify the site, since we were already implementing multilanguage. We also relinked our promotions page to filtered category pages, instead of creating separate "new" pages for that purpose.
Also, the "home" link was removed from every breadcrumb since it wasn't necessary but rather redundant. Updated diagrams that reflect these changes are available within this repository as well.