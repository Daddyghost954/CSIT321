<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">.q-plugin .sho-header button.sho-close-button svg {
    vertical-align: middle;
}

.q-plugin .sho-header button.sho-close-button {
    background-color: white;
    border: none;
    min-width: 0;
    height: 22px !important;
    min-height: 22px !important;
    cursor: pointer;
    padding: 0;
}

.q-plugin .sho-header button.sho-close-button:hover {
    background-color: white !important;
}
</style>
<style type="text/css">@font-face {
    font-family: "Ciutadella-Regular";
    src: url("https://shopping.qantas.com/static/fonts/Ciutadella-Regular.woff") format("woff");
}

.q-plugin {
    max-width: 250px;
    box-shadow: 0 3px 16px 0 #00000019, 0 2px 4px 0 #00000019;
    font: 400 11px "Ciutadella-Regular", Helvetica !important;
    letter-spacing: 0;
    color: #323232;
    background-color: #ffffff;
}

.q-plugin a, .q-plugin button {
    all: unset;
}

.q-plugin .sho-header {
    background-color: #ffffff;
    padding: 18px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    position: relative;
}

.q-plugin .sho-header .sho-user-pod {
    text-align: right;
}

.q-plugin .sho-header .sho-user-pod p {
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    margin: 0;
    line-height: 13px;
}

.q-plugin .sho-header .sho-user-pod a {
    cursor: pointer;
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    text-decoration: underline;
}

.q-plugin footer {
    height: 36px;
    margin-top: 1px;
    display: flex;
}

.q-plugin footer :first-child {
    margin-right: 1px;
}

.q-plugin footer a {
    background-color: #f1f1f1;
    width: 50%;
    text-decoration: underline;
    font: 400 13px "Ciutadella-Regular", Helvetica !important;
    align-items: center;
    display: flex;
    justify-content: center;
    cursor: pointer;
}

.q-plugin .sho-main {
    background-color: #ffffff;
    text-align: center;
    padding: 0;
    margin: 0;
}

.q-plugin .sho-main p.sho-title {
    text-align: center;
    font: 400 14px "Ciutadella-Regular", Helvetica !important;
    padding: 0 20px 10px 20px;
    margin: 0;
    letter-spacing: 0;
    color: #323232;
}

.q-plugin .sho-main p.sho-title strong {
    font: 600 15px "Ciutadella-Regular", Helvetica !important;
    letter-spacing: 0;
    color: #323232;
}

.q-plugin button.sho-button {
    font: 400 14px "Ciutadella-Regular", Helvetica !important;
    letter-spacing: 0.5px;
    text-align: center;
    min-width: 195px;
    max-width: fit-content;
    min-height: 40px !important;
    height: 40px !important;
    border-radius: 3px;
    background-color: #e40000;
    text-transform: uppercase;
    color: #ffffff;
    cursor: pointer;
    border: none !important;
    margin: 0 0 10px 0 !important;
    padding: 0 !important;
    box-shadow: none;
}

.q-plugin button.sho-button:hover {
    background-color: #e40000;
}

.q-plugin button.sho-button svg {
    margin-right: 4px;
    vertical-align: middle;
}

.q-plugin button.sho-success {
    background-color: #66aa4f;
}

.q-plugin button.sho-success:hover {
    background-color: #66aa4f;
}

.q-plugin button.suboptimal {
    cursor: not-allowed;
    background-color: #dadada;
    color: #555555;
}

.q-plugin button.suboptimal:hover {
    background-color: #dadada;
    color: #555555;
}
</style>
<style type="text/css">@font-face {
    font-family: "Ciutadella-Regular";
    src: url("https://shopping.qantas.com/static/fonts/Ciutadella-Regular.woff") format("woff");
}

.q-plugin {
    max-width: 250px;
    box-shadow: 0 3px 16px 0 #00000019, 0 2px 4px 0 #00000019;
    font: 400 11px "Ciutadella-Regular", Helvetica !important;
    letter-spacing: 0;
    color: #323232;
    background-color: #ffffff;
}

.q-plugin a, .q-plugin button {
    all: unset;
}

.q-plugin .sho-header {
    background-color: #ffffff;
    padding: 18px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    position: relative;
}

.q-plugin .sho-header .sho-user-pod {
    text-align: right;
}

.q-plugin .sho-header .sho-user-pod p {
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    margin: 0;
    line-height: 13px;
}

.q-plugin .sho-header .sho-user-pod a {
    cursor: pointer;
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    text-decoration: underline;
}

.q-plugin footer {
    height: 36px;
    margin-top: 1px;
    display: flex;
}

.q-plugin footer :first-child {
    margin-right: 1px;
}

.q-plugin footer a {
    background-color: #f1f1f1;
    width: 50%;
    text-decoration: underline;
    font: 400 13px "Ciutadella-Regular", Helvetica !important;
    align-items: center;
    display: flex;
    justify-content: center;
    cursor: pointer;
}

.q-plugin .sho-main {
    background-color: #ffffff;
    text-align: center;
    padding: 0;
    margin: 0;
}

.q-plugin .sho-main p.sho-title {
    text-align: center;
    font: 400 14px "Ciutadella-Regular", Helvetica !important;
    padding: 0 20px 10px 20px;
    margin: 0;
    letter-spacing: 0;
    color: #323232;
}

.q-plugin .sho-main p.sho-title strong {
    font: 600 15px "Ciutadella-Regular", Helvetica !important;
    letter-spacing: 0;
    color: #323232;
}

.q-plugin .sho-hidden {
    display: none;
    height: 0;
}

.q-plugin .sho-terms {
    background-color: #ffffff;
}

.q-plugin .sho-terms a {
    padding-bottom: 18px !important;
    display: block;
    cursor: pointer;
    text-decoration: underline !important;
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    line-height: normal;
    letter-spacing: normal;
    text-align: center;
    color: #555555 !important;
}

.q-plugin .sho-terms a:hover {
    border: none;
}

.q-plugin .sho-terms p {
    text-align: left;
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    line-height: 1.42;
    letter-spacing: normal;
    color: #555555;
}

.q-plugin .sho-terms-details {
    background-color: #f1f1f1;
    padding: 15px;
}

.q-plugin .sho-terms-details p {
    color: #323232;
    margin: 0;
    padding: 0;
}

.q-plugin .sho-terms-details p.sho-terms-details-title {
    display: flex;
}

.q-plugin .sho-terms-details p.sho-terms-details-title .sho-tc-close {
    font: 400 11px "Ciutadella-Regular", Helvetica !important;
    margin-left: auto;
}

.q-plugin .sho-terms-details p.sho-terms-details-title strong {
    color: #323232;
    display: inline;
    font: 600 13px "Ciutadella-Regular", Helvetica !important;
}

.q-plugin .sho-terms-details-text {
    height: 155px;
    overflow-y: scroll;
}
</style>
<style type="text/css">@font-face {
    font-family: "Ciutadella-Regular";
    src: url("https://shopping.qantas.com/static/fonts/Ciutadella-Regular.woff") format("woff");
}

.q-plugin {
    max-width: 250px;
    box-shadow: 0 3px 16px 0 #00000019, 0 2px 4px 0 #00000019;
    font: 400 11px "Ciutadella-Regular", Helvetica !important;
    letter-spacing: 0;
    color: #323232;
    background-color: #ffffff;
}

.q-plugin a, .q-plugin button {
    all: unset;
}

.q-plugin .sho-header {
    background-color: #ffffff;
    padding: 18px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    position: relative;
}

.q-plugin .sho-header .sho-user-pod {
    text-align: right;
}

.q-plugin .sho-header .sho-user-pod p {
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    margin: 0;
    line-height: 13px;
}

.q-plugin .sho-header .sho-user-pod a {
    cursor: pointer;
    font: 400 12px "Ciutadella-Regular", Helvetica !important;
    text-decoration: underline;
}

.q-plugin footer {
    height: 36px;
    margin-top: 1px;
    display: flex;
}

.q-plugin footer :first-child {
    margin-right: 1px;
}

.q-plugin footer a {
    background-color: #f1f1f1;
    width: 50%;
    text-decoration: underline;
    font: 400 13px "Ciutadella-Regular", Helvetica !important;
    align-items: center;
    display: flex;
    justify-content: center;
    cursor: pointer;
}

.q-plugin .sho-main {
    background-color: #ffffff;
    text-align: center;
    padding: 0;
    margin: 0;
}

.q-plugin .sho-main p.sho-title {
    text-align: center;
    font: 400 14px "Ciutadella-Regular", Helvetica !important;
    padding: 0 20px 10px 20px;
    margin: 0;
    letter-spacing: 0;
    color: #323232;
}

.q-plugin .sho-main p.sho-title strong {
    font: 600 15px "Ciutadella-Regular", Helvetica !important;
    letter-spacing: 0;
    color: #323232;
}
</style>
<head>
    <style type="text/css">.q-plugin .sho-header button.sho-close-button svg {
        vertical-align: middle;
    }

    .q-plugin .sho-header button.sho-close-button {
        background-color: white;
        border: none;
        min-width: 0;
        height: 22px !important;
        min-height: 22px !important;
        cursor: pointer;
        padding: 0;
    }

    .q-plugin .sho-header button.sho-close-button:hover {
        background-color: white !important;
    }
    </style>
    <style type="text/css">@font-face {
        font-family: "Ciutadella-Regular";
        src: url("https://shopping.qantas.com/static/fonts/Ciutadella-Regular.woff") format("woff");
    }

    .q-plugin {
        max-width: 250px;
        box-shadow: 0 3px 16px 0 #00000019, 0 2px 4px 0 #00000019;
        font: 400 11px "Ciutadella-Regular", Helvetica !important;
        letter-spacing: 0;
        color: #323232;
        background-color: #ffffff;
    }

    .q-plugin a, .q-plugin button {
        all: unset;
    }

    .q-plugin .sho-header {
        background-color: #ffffff;
        padding: 18px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        position: relative;
    }

    .q-plugin .sho-header .sho-user-pod {
        text-align: right;
    }

    .q-plugin .sho-header .sho-user-pod p {
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        margin: 0;
        line-height: 13px;
    }

    .q-plugin .sho-header .sho-user-pod a {
        cursor: pointer;
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        text-decoration: underline;
    }

    .q-plugin footer {
        height: 36px;
        margin-top: 1px;
        display: flex;
    }

    .q-plugin footer :first-child {
        margin-right: 1px;
    }

    .q-plugin footer a {
        background-color: #f1f1f1;
        width: 50%;
        text-decoration: underline;
        font: 400 13px "Ciutadella-Regular", Helvetica !important;
        align-items: center;
        display: flex;
        justify-content: center;
        cursor: pointer;
    }

    .q-plugin .sho-main {
        background-color: #ffffff;
        text-align: center;
        padding: 0;
        margin: 0;
    }

    .q-plugin .sho-main p.sho-title {
        text-align: center;
        font: 400 14px "Ciutadella-Regular", Helvetica !important;
        padding: 0 20px 10px 20px;
        margin: 0;
        letter-spacing: 0;
        color: #323232;
    }

    .q-plugin .sho-main p.sho-title strong {
        font: 600 15px "Ciutadella-Regular", Helvetica !important;
        letter-spacing: 0;
        color: #323232;
    }

    .q-plugin button.sho-button {
        font: 400 14px "Ciutadella-Regular", Helvetica !important;
        letter-spacing: 0.5px;
        text-align: center;
        min-width: 195px;
        max-width: fit-content;
        min-height: 40px !important;
        height: 40px !important;
        border-radius: 3px;
        background-color: #e40000;
        text-transform: uppercase;
        color: #ffffff;
        cursor: pointer;
        border: none !important;
        margin: 0 0 10px 0 !important;
        padding: 0 !important;
        box-shadow: none;
    }

    .q-plugin button.sho-button:hover {
        background-color: #e40000;
    }

    .q-plugin button.sho-button svg {
        margin-right: 4px;
        vertical-align: middle;
    }

    .q-plugin button.sho-success {
        background-color: #66aa4f;
    }

    .q-plugin button.sho-success:hover {
        background-color: #66aa4f;
    }

    .q-plugin button.suboptimal {
        cursor: not-allowed;
        background-color: #dadada;
        color: #555555;
    }

    .q-plugin button.suboptimal:hover {
        background-color: #dadada;
        color: #555555;
    }
    </style>
    <style type="text/css">@font-face {
        font-family: "Ciutadella-Regular";
        src: url("https://shopping.qantas.com/static/fonts/Ciutadella-Regular.woff") format("woff");
    }

    .q-plugin {
        max-width: 250px;
        box-shadow: 0 3px 16px 0 #00000019, 0 2px 4px 0 #00000019;
        font: 400 11px "Ciutadella-Regular", Helvetica !important;
        letter-spacing: 0;
        color: #323232;
        background-color: #ffffff;
    }

    .q-plugin a, .q-plugin button {
        all: unset;
    }

    .q-plugin .sho-header {
        background-color: #ffffff;
        padding: 18px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        position: relative;
    }

    .q-plugin .sho-header .sho-user-pod {
        text-align: right;
    }

    .q-plugin .sho-header .sho-user-pod p {
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        margin: 0;
        line-height: 13px;
    }

    .q-plugin .sho-header .sho-user-pod a {
        cursor: pointer;
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        text-decoration: underline;
    }

    .q-plugin footer {
        height: 36px;
        margin-top: 1px;
        display: flex;
    }

    .q-plugin footer :first-child {
        margin-right: 1px;
    }

    .q-plugin footer a {
        background-color: #f1f1f1;
        width: 50%;
        text-decoration: underline;
        font: 400 13px "Ciutadella-Regular", Helvetica !important;
        align-items: center;
        display: flex;
        justify-content: center;
        cursor: pointer;
    }

    .q-plugin .sho-main {
        background-color: #ffffff;
        text-align: center;
        padding: 0;
        margin: 0;
    }

    .q-plugin .sho-main p.sho-title {
        text-align: center;
        font: 400 14px "Ciutadella-Regular", Helvetica !important;
        padding: 0 20px 10px 20px;
        margin: 0;
        letter-spacing: 0;
        color: #323232;
    }

    .q-plugin .sho-main p.sho-title strong {
        font: 600 15px "Ciutadella-Regular", Helvetica !important;
        letter-spacing: 0;
        color: #323232;
    }

    .q-plugin .sho-hidden {
        display: none;
        height: 0;
    }

    .q-plugin .sho-terms {
        background-color: #ffffff;
    }

    .q-plugin .sho-terms a {
        padding-bottom: 18px !important;
        display: block;
        cursor: pointer;
        text-decoration: underline !important;
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #555555 !important;
    }

    .q-plugin .sho-terms a:hover {
        border: none;
    }

    .q-plugin .sho-terms p {
        text-align: left;
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        line-height: 1.42;
        letter-spacing: normal;
        color: #555555;
    }

    .q-plugin .sho-terms-details {
        background-color: #f1f1f1;
        padding: 15px;
    }

    .q-plugin .sho-terms-details p {
        color: #323232;
        margin: 0;
        padding: 0;
    }

    .q-plugin .sho-terms-details p.sho-terms-details-title {
        display: flex;
    }

    .q-plugin .sho-terms-details p.sho-terms-details-title .sho-tc-close {
        font: 400 11px "Ciutadella-Regular", Helvetica !important;
        margin-left: auto;
    }

    .q-plugin .sho-terms-details p.sho-terms-details-title strong {
        color: #323232;
        display: inline;
        font: 600 13px "Ciutadella-Regular", Helvetica !important;
    }

    .q-plugin .sho-terms-details-text {
        height: 155px;
        overflow-y: scroll;
    }
    </style>
    <style type="text/css">@font-face {
        font-family: "Ciutadella-Regular";
        src: url("https://shopping.qantas.com/static/fonts/Ciutadella-Regular.woff") format("woff");
    }

    .q-plugin {
        max-width: 250px;
        box-shadow: 0 3px 16px 0 #00000019, 0 2px 4px 0 #00000019;
        font: 400 11px "Ciutadella-Regular", Helvetica !important;
        letter-spacing: 0;
        color: #323232;
        background-color: #ffffff;
    }

    .q-plugin a, .q-plugin button {
        all: unset;
    }

    .q-plugin .sho-header {
        background-color: #ffffff;
        padding: 18px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        position: relative;
    }

    .q-plugin .sho-header .sho-user-pod {
        text-align: right;
    }

    .q-plugin .sho-header .sho-user-pod p {
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        margin: 0;
        line-height: 13px;
    }

    .q-plugin .sho-header .sho-user-pod a {
        cursor: pointer;
        font: 400 12px "Ciutadella-Regular", Helvetica !important;
        text-decoration: underline;
    }

    .q-plugin footer {
        height: 36px;
        margin-top: 1px;
        display: flex;
    }

    .q-plugin footer :first-child {
        margin-right: 1px;
    }

    .q-plugin footer a {
        background-color: #f1f1f1;
        width: 50%;
        text-decoration: underline;
        font: 400 13px "Ciutadella-Regular", Helvetica !important;
        align-items: center;
        display: flex;
        justify-content: center;
        cursor: pointer;
    }

    .q-plugin .sho-main {
        background-color: #ffffff;
        text-align: center;
        padding: 0;
        margin: 0;
    }

    .q-plugin .sho-main p.sho-title {
        text-align: center;
        font: 400 14px "Ciutadella-Regular", Helvetica !important;
        padding: 0 20px 10px 20px;
        margin: 0;
        letter-spacing: 0;
        color: #323232;
    }

    .q-plugin .sho-main p.sho-title strong {
        font: 600 15px "Ciutadella-Regular", Helvetica !important;
        letter-spacing: 0;
        color: #323232;
    }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art Work Collection - University of Wollongong, Australia</title>
    <link rel="stylesheet" type="text/css" media=""
          href="./Library - University of Wollongong, Australia_files/library-pilot.css">
    <link rel="stylesheet" href="./Library - University of Wollongong, Australia_files/fonts.css">
    <link rel="stylesheet" href="./Library - University of Wollongong, Australia_files/css">
    <link rel="stylesheet" type="text/css" media="all"
          href="./Library - University of Wollongong, Australia_files/app.min.css"><!-- app.min.css -->
    <link rel="stylesheet" type="text/css" media="all"
          href="./Library - University of Wollongong, Australia_files/library-search.min.css">
    <!-- library-search.min.css -->
    <link rel="stylesheet" type="text/css" media="all"
          href="./Library - University of Wollongong, Australia_files/emergency-notices.css">
    <!-- T4 Emergency Notices  -->
    <link rel="stylesheet" type="text/css" media=""
          href="./Library - University of Wollongong, Australia_files/extra.css">
    <!-- UOW extra CSS fixes (while in transition)  -->
    <link rel="stylesheet" href="./Library - University of Wollongong, Australia_files/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script type="text/javascript" async="" src="//siteimproveanalytics.com/js/siteanalyze_13656.js"></script>
    <script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.8.47" async=""></script>
    <script src="https://connect.facebook.net/signals/config/230785750765815?v=2.8.47&amp;r=stable" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async="" src="//siteimproveanalytics.com/js/siteanalyze_13656.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TNGXT9W"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="./Library - University of Wollongong, Australia_files/inferredEvents.js.下载" async=""></script>
    <script src="./Library - University of Wollongong, Australia_files/230785750765815" async=""></script>
    <script async="" src="./Library - University of Wollongong, Australia_files/fbevents.js.下载"></script>
    <script type="text/javascript" async=""
            src="./Library - University of Wollongong, Australia_files/siteanalyze_13656.js.下载"></script>
    <script type="text/javascript" async=""
            src="./Library - University of Wollongong, Australia_files/analytics.js.下载"></script>
    <script async="" src="./Library - University of Wollongong, Australia_files/gtm.js.下载"></script>
    <script src="./Library - University of Wollongong, Australia_files/dc5d3cc4.js.下载"></script>
    <link rel="stylesheet" href="https://use.fortawesome.com/kits/dc5d3cc4/publications/92836/woff2.css" media="all">
    <link rel="stylesheet" href="./Library - University of Wollongong, Australia_files/woff2.css" media="all">
    <script src="./Library - University of Wollongong, Australia_files/jquery-3.3.1.min.js.下载"></script>
    <script defer="" src="./Library - University of Wollongong, Australia_files/emergency-notices.js.下载"></script>
    <!-- T4 Emergency Notices-->
    <script defer=""
            src="./Library - University of Wollongong, Australia_files/jquery.easy-autocomplete.min.js.下载"></script>
    <!-- easy autocomplete JS-->

    <link rel="stylesheet" type="text/css" media="all"
          href="./Library - University of Wollongong, Australia_files/t4-updates.css"><!-- t4 CSS -->
    <script defer="" src="./Library - University of Wollongong, Australia_files/t4-updates.js.下载"></script>
    <!-- T4 JS-->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TNGXT9W');</script>
    <!-- End Google Tag Manager -->
    <meta class="foundation-mq">
    <style type="text/css">/* LibChat Widget CSS */
    .lcs_slide_out {
        width: 400px;
        height: 340px;
        position: fixed;
        -webkit-transition-duration: 0.6s;
        -moz-transition-duration: 0.6s;
        -o-transition-duration: 0.6s;
        transition-duration: 0.6s;
        background-color: rgb(249, 249, 249);
        border: 1px solid #ccc;
        z-index: 1000;
    }

    .lcs_slide_out header {
        display: block;
    }

    .lcs_slide_out header a {
        text-align: center;
        padding: 10px;
        display: block;
        position: absolute;
        border-width: 0;
        border-style: solid;
        background-color: #CC0000;
    }

    .lcs_load {
        width: 400px;
        height: 100%;
        padding: 0 2px 0 0;
        box-sizing: border-box;
    }

    .lcs_slide_out-l {
        top: 100px;
        left: -400px;
    }

    .lcs_slide_out-l.open {
        left: 0px;
    }

    .lcs_slide_out-l header {
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transform-origin: top right;
        -ms-transform-origin: top right;
        transform-origin: top right;
    }

    .lcs_slide_out-l header a {
        right: 10px;
    }

    .lcs_slide_out-r {
        top: 100px;
        right: -400px;
    }

    .lcs_slide_out-r.open {
        right: 0px;
    }

    .lcs_slide_out-r header {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
    }

    .lcs_slide_out-r header a {
        left: 10px;
    }

    .lcs_slide_out-b {
        right: 100px;
        bottom: -2px;
        height: 0;
    }

    .lcs_slide_out-b.open {
        height: 340px;
    }

    .lcs_slide_out-b header a {
        left: 10px;
        bottom: 0px;
        border-width: 1px 1px 0px 1px;
    }

    .lcs_slide_out-b.open header a {
        top: -42px;
        bottom: auto;
    }

    .lcs_slide_out iframe {
        width: 100%;
        height: 338px;
        background-color: #FFFFFF;
        border: 0px;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .lcs_slide_out {
            width: 80%;
        }

        .lcs_load {
            width: 100%
        }

        .lcs_slide_out-l {
            left: -80%;
        }

        .lcs_slide_out-r {
            right: -80%;
        }

        .lcs_slide_out-b {
            left: 0;
        }
    }</style>
    <style type="text/css">/* LibChat Widget CSS */
    .lcs_slide_out {
        width: 400px;
        height: 340px;
        position: fixed;
        -webkit-transition-duration: 0.6s;
        -moz-transition-duration: 0.6s;
        -o-transition-duration: 0.6s;
        transition-duration: 0.6s;
        background-color: rgb(249, 249, 249);
        border: 1px solid #ccc;
        z-index: 1000;
    }

    .lcs_slide_out header {
        display: block;
    }

    .lcs_slide_out header a {
        text-align: center;
        padding: 10px;
        display: block;
        position: absolute;
        border-width: 0;
        border-style: solid;
        background-color: #CC0000;
    }

    .lcs_load {
        width: 400px;
        height: 100%;
        padding: 0 2px 0 0;
        box-sizing: border-box;
    }

    .lcs_slide_out-l {
        top: 100px;
        left: -400px;
    }

    .lcs_slide_out-l.open {
        left: 0px;
    }

    .lcs_slide_out-l header {
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transform-origin: top right;
        -ms-transform-origin: top right;
        transform-origin: top right;
    }

    .lcs_slide_out-l header a {
        right: 10px;
    }

    .lcs_slide_out-r {
        top: 100px;
        right: -400px;
    }

    .lcs_slide_out-r.open {
        right: 0px;
    }

    .lcs_slide_out-r header {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
    }

    .lcs_slide_out-r header a {
        left: 10px;
    }

    .lcs_slide_out-b {
        right: 100px;
        bottom: -2px;
        height: 0;
    }

    .lcs_slide_out-b.open {
        height: 340px;
    }

    .lcs_slide_out-b header a {
        left: 10px;
        bottom: 0px;
        border-width: 1px 1px 0px 1px;
    }

    .lcs_slide_out-b.open header a {
        top: -42px;
        bottom: auto;
    }

    .lcs_slide_out iframe {
        width: 100%;
        height: 338px;
        background-color: #FFFFFF;
        border: 0px;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .lcs_slide_out {
            width: 80%;
        }

        .lcs_load {
            width: 100%
        }

        .lcs_slide_out-l {
            left: -80%;
        }

        .lcs_slide_out-r {
            right: -80%;
        }

        .lcs_slide_out-b {
            left: 0;
        }
    }</style>
</head>
<body>
    <div id = "body">
        <div id="header-back"></div>
        <img id="print-logo" src="./Library - University of Wollongong, Australia_files/uow-logo.png" alt="University of Wollongong Australia">
        <div id="header">
            <div class="navbar-container navbar-top has-two-navbars outer-container">
                <div class="row container">
                    <div class="navbar">
                        <ul>
                            <li class="desktop-tablet"><a href="https://www.uow.edu.au/about/index.html">About</a></li>
                            <li class="desktop"><a href="https://employment.uow.edu.au/index.html">Jobs</a></li>
                            <li class="desktop-tablet"><a href="https://media.uow.edu.au/index.html">Newsroom</a></li>
                            <li class="desktop-tablet"><a href="https://www.uow.edu.au/library/">Library</a></li>
                            <li class="desktop"><a href="https://www.uow.edu.au/donations/index.html">Give to UOW</a></li>
                            <li class="desktop-tablet"><a href="https://www.uow.edu.au/about/contacts/index.html">People &amp; Places</a></li>
                            <li class="desktop-tablet"><a href="https://www.uow.edu.au/alumni/index.html">Alumni</a></li>
                            <li class="desktop-tablet"><a href="https://www.uow.edu.au/about/community/index.html">Community</a></li>
                        </ul>
                    </div>
                    <div id="navbar-dropdown-top" class="navbar navbar-dropdowns">
                        <ul>
                            <li class="intranet">
                                <a href="https://intranet.uow.edu.au/" class="icon-link">
                                    <i class="fas fa-fw fa-lock"></i>
                                    <span>Intranet</span>
                                </a>
                            </li>
                            <li class="students">
                                <a href="https://www.uow.edu.au/student/index.html" class="icon-link">
                                    <i class="fa fa-fw baxter duck" aria-hidden="true"></i>
                                    <span>Current Students</span>
                                </a>
                            </li>
                            <li class="search desktop">
                                <a href="https://search.uow.edu.au/" class="button-search" title="Search"></a>
                            </li>
                            <li class="tablet-mobile">
                                <a id="mobile-menu-button" href="javascript:void(0)" class="icon"><span class="icon icon-hamburger-white"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navbar-container navbar-bottom navbar-large outer-container smaller">
                <div class="row container">
                    <div class="logo">
                        <div class="logobox">
                            <a href="https://www.uow.edu.au/">
                                <div class="logo-image logo-small">
                                    <img src="./Library - University of Wollongong, Australia_files/uow-logo.png" alt="University of Wollongong Australia">
                                </div>
                            </a>
                            <div itemscope="" itemtype="https://schema.org/Organization" class="hidden">
                                <a itemprop="url" href="https://www.uow.edu.au/">Home</a>
                                <img itemprop="logo" alt="University of Wollongong Logo" src="./Library - University of Wollongong, Australia_files/university_of_wollongong_logo.jpg">
                            </div>
                        </div>
                    </div>
                    <div id="navbar-dropdown-bottom" class="navbar navbar-dropdowns">
                        <ul>
                            <li class="desktop-tablet color-study">
                                <a href="https://www.uow.edu.au/future/index.html" class="desktop">STUDY AT UOW</a>
                            </li>
                            <li class="desktop-tablet color-research">
                                <a href="https://www.uow.edu.au/research/index.html" class="desktop">RESEARCH &amp; INNOVATION</a>
                            </li>
                            <li class="desktop-tablet color-business">
                                <a href="https://www.uow.edu.au/international/index.html" class="desktop">INTERNATIONAL</a>
                            </li>
                            <li class="search tablet-mobile">
                                <a href="https://search.uow.edu.au/" class="button-search" data-target="#header-searchbar" title="Search"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!-----Start----->
        <!-----startindex----->
        <div class="site-container">
            <main id="main-content">
                <!--stopindex-->
                <section class="uw-masthead uw-masthead--library">
                    <div class="grid-container page-navigator-wrapper">
                        <div class="page-navigator js-page-navigator">
                            <div class="grid-x page-navigator__button-wrapper">
                                <a href="#" class="page-navigator__button page-navigator__button--breadcrumbs js-page-navigator__button" data-toggle="page-navigator__list--breadcrumbs">
                                    You are here
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="page-navigator__list page-navigator__list--breadcrumbs">
                                <ul class="no-bullet breadcrumbs js-breadcrumbs">
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="https://lha.uow.edu.au/index.html">Law, Humanities and the Arts</a>
                                    </li>
                                    <li>
                                        <a href="https://lha.uow.edu.au/uowac/index.html">UOW Art Collection</a>
                                    </li>
                                    <li>
                                        Tracker
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uw-masthead__main">
                        <div class="grid-container">
                            <div class="uw-masthead__content">
                                <div class="grid-x grid-padding-x align-justify">
                                    <div class="cell large-7">
                                        <h1 class="js-scroll-reveal--left uw-masthead__title">
                                            Art Work Collection Tracker
                                        </h1>
                                    </div>
<!-------------------- Login ------------------->
                                    <div class="cell large-4">
                                        <div class="uw-opening-times">
                                            <div class="border-top js-scroll-reveal--right">
                                                <div class="border-bottom">
                                                    <form action="controller/login.php" method="post">
                                                        <span class="uw-opening-times__title">Login</span>
                                                        <ul class="uw-opening-times__list no-bullet grid-x medium-up-2 large-up-1 js-opening-times">
                                                            <li class="cell">Username: <input type="text" name="username"/></li>
                                                            <li class="cell">Password: <input type="password" name="password"/></li>
                                                        </ul>
                                                        <span>
                                                            <input type="submit" class="uw-opening-times__btn" name="submit" value="Login">
                                                        </span>
                                                        <br/>
                                                            <a>Forget Password</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--startindex-->
                <section class="page-content grid-container uw-related-image-links-four-block js-scroll-reveal">
                <div class="grid-x grid-padding-x">
                    <div class="cell js-scroll-reveal--left">
                        <h2>Why Chooes Us?</h2>
                    </div>
                    <a href="https://uow.libguides.com/az.php" class="image-link js-scroll-reveal cell medium-4">
                        <img src="/assets/contributed/library/Library-Stock_freepik-499x281.jpg" alt="A person's hands typing on a laptop" style="width:499;height:281">
                        <span class="image-link__title">Fully Secured Data</span>
                    </a>
                    <a href="https://ey9ff7jb6l.search.serialssolutions.com/" class="image-link js-scroll-reveal cell medium-4">
                        <img src="/assets/contributed/library/Library-Journals_1-499x281.jpg" alt="A stack of colourful print journals" style="width : 499; height : 281;     ">
                        <span class="image-link__title">Better User Interface</span>
                    </a>
                    <a href="https://iii.library.uow.edu.au/" class="image-link js-scroll-reveal cell medium-4">
                        <img src="/assets/curated/wollongong-campus/library/reading/Branding-Shoot-9-13-706-499x281.jpg" alt="" style="width : 499; height : 281;     ">
                        <span class="image-link__title">Better Service</span>
                    </a>
                </div>
            </section><!-- Text Block With Related Links Component -->
                <section class="page-content grid-container uw-text-block">
                    <a id="d.en.41303"></a>
                    <div class="grid-x grid-padding-x align-justify">

                        <div class="cell medium-7 large-8 text standard-content-text js-scroll-reveal">
                            <h2>Library Help</h2>
                            <h3>Ask Us</h3>
                            <p><a href="https://uow.libanswers.com/">Search our Frequently Asked Questions</a>&nbsp;(FAQs) or&nbsp;<a href="https://uow.libanswers.com/">contact us</a> for answers to a&nbsp;range of Library queries.</p>
                            <h3>Live Chat</h3>
                            <p><a href="https://uow.libanswers.com/#chat">Instant message a librarian</a>&nbsp;from 9am to 5pm, Monday to Friday.</p>
                            <h3>Library guides</h3>
                            <p><a href="https://uow.libguides.com/">Our Library guides</a>&nbsp;have resources and tutorials, including guidance on the best databases for your subject or discipline.</p>
                            <h3>Feedback</h3>
                            <p>Have something to say? <a href="https://feedback.uow.edu.au/">Tell us your feedback</a>.</p>
                        </div>
                        <aside class="cell medium-5 large-4 uw-related-links js-scroll-reveal--right">
                            <div class="border-top">
                                <div class="border-bottom">
                                    <span class="uw-related-links__title">Quick links</span>
                                    <ul class="menu vertical"><li><a href="/library/about-us/">About us</a></li><li><a href="https://uow.libcal.com/reserve/groupstudy">Book a room</a></li><li><a href="/library/borrowing/">Borrowing</a></li><li><a href="https://www.uow.edu.au/student/learningcoop/index.html">Learning Co-Op</a></li><li><a href="https://www.uow.edu.au/student/learningcoop/referencingciting/index.html">Referencing</a></li><li><a href="https://ro.uow.edu.au/">Research Online</a></li><li><a href="/library/spaces/">Spaces</a></li><li><a href="https://ereadingsprd.uow.edu.au/">Subject Readings</a></li>          </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- End Text Block With Related Links Component -->
                <section class="page-content grid-container uw-related-image-links-four-block js-scroll-reveal">
                <a id="d.en.41325"></a>
                <div class="grid-x grid-padding-x">
                    <div class="cell js-scroll-reveal--left"><h2>Services for...</h2></div>
                    <a href="/library/students/" class="image-link js-scroll-reveal cell medium-4">
                        <img src="/assets/contributed/library/Mediavalet_TIM3714-499x281.jpg" alt="A group of students around a laptop in the Library" style="width : 499; height : 281;     ">
                        <span class="image-link__title">Students</span>
                    </a>
                    <a href="/library/staff/" class="image-link js-scroll-reveal cell medium-4">
                        <img src="/assets/contributed/library/Mediavalet_575-499x281.jpg" alt="Two researchers, one in a white lab coat, conducting scientific tests in a lab" style="width : 499; height : 281;     ">
                        <span class="image-link__title">Staff</span>
                    </a>
                    <a href="/library/alumni-guests/" class="image-link js-scroll-reveal cell medium-4">
                        <img src="/assets/curated/graduation/walking/Graduation-Graduates-Graduates495-499x281.jpg" alt="" style="width : 499; height : 281;     ">
                        <span class="image-link__title">Alumni &amp; guests</span>
                    </a>
                </div>
            </section><section class="page-content grid-container uw-split-grey-section js-scroll-reveal in-view">
                <a id="d.en.41314"></a>
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-6 large-5 uw-split-grey-section__text-block js-scroll-reveal--left">
                        <h2 class="uw-split-grey-section__title">
                            UOW MakerSpace
                        </h2>
                        <p>Looking for a place to spark your creativity, learn new technology and meet like-minded makers?</p>
                        <a href="/library/spaces/makerspace/" class="button button--chevron-right">Visit the MakerSpace</a>
                    </div>
                    <div class="cell medium-6 large-7 uw-split-grey-section_image-block">
                        <img src="/assets/contributed/library/Mediavalet_TIM4419-750x421.jpg" alt="Two students looking at 3D printed objects in the MakerSpace" style="width : 750; height : 421;     ">
                    </div>
                </div>
            </section><section class="page-content img--fullwidth margin--bottom-0" style="background-image:url(/assets/contributed/library/Archives-online.jpg) !important;">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x align-center">
                        <div class="cell img--fullwidth-content">
                            <h2 class="margin--bottom-10">
                                UOW Archives
                            </h2>
                            <hr>
                            <p class="strong">Discover our archival collections, online and in-person</p>


                            <a class="uw-button color--white margin--top-20" href="/library/archives/">Visit the archives</a>
                        </div>
                    </div>
                </div>
            </section><section class="page-content grid-container uw-split-grey-section js-scroll-reveal">
                <a id="d.en.55492"></a>
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-6 large-5 uw-split-grey-section__text-block js-scroll-reveal--left">
                        <h2 class="uw-split-grey-section__title">
                            Marking our national day of remembrance
                        </h2>
                        <p>Explore personal letters, drawings and official correspondence from both World Wars with Archives Online.  </p>
                        <a href="/library/news/anzac-day/" class="button button--chevron-right">Read more here</a>
                    </div>
                    <div class="cell medium-6 large-7 uw-split-grey-section_image-block">
                        <img src="/assets/contributed/library/dad-730x411.jpg" alt="Postcard of Ypres to Dear Dad: William Agate Collection: University of Wollongong Archives, collection D190/039" style="width : 730; height : 411;     ">
                    </div>
                </div>
            </section><!-- Text Block With Related Links Component -->
                <section class="page-content grid-container uw-text-block">
                    <a id="d.en.53627"></a>
                    <div class="grid-x grid-padding-x align-justify">
                        <h2 class="cell js-scroll-reveal--left">News</h2>
                        <div class="cell medium-7 large-8 text standard-content-text js-scroll-reveal">
                            <ul>
                                <li><a href="/library/news/library-study-spots/">The best study spots in the Library</a></li>
                                <li><a href="https://media.uow.edu.au/releases/UOW257407.html">Ethel Hayton: avid arts advocate or social-climbing busybody?</a></li>
                                <li><a href="/library/news/martin-sharp-poster/">UOW Archives acquires 1968 Martin Sharp poster of rock band Cream</a></li>
                                <li><a href="/library/news/jindaola-journey-begins/">Library's Jindaola journey begins...</a></li>
                                <li><a href="/library/news/wry-artificer-review/">Review: Wry ARTificer exhibition and AR experience</a></li>
                                <li><a href="/library/news/sharrad-book-launch/">"Postcolonial Past &amp; Present" book launched at Wollongong Campus Library</a></li>
                                <li><a href="/library/news/5-things-about-library/">Library hacks: 5 things I wish I knew about UOW Library in my first year</a></li>
                                <li><a href="/library/news/flugelman-ar-experience/">Experience Bert Flugelman's sculptures in AR with HoloLens</a></li>
                                <li><a href="https://media.uow.edu.au/releases/UOW255953.html?" target="">Lloyd Rees' painting&nbsp;<em>Illawarra Pastoral</em>&nbsp;unveiled at the Wollongong Campus Library</a></li>
                                <li><a href="https://uow.libguides.com/beyond-orientation" target="">Library help beyond orientation</a></li>
                            </ul>
                        </div>
                        <aside class="cell medium-5 large-4 uw-related-links js-scroll-reveal--right">
                            <div class="border-top">
                                <div class="border-bottom">
                                    <span class="uw-related-links__title">Follow us on social media</span>
                                    <ul class="menu vertical"><li><a href="https://www.facebook.com/UOWLibrary">Facebook</a></li><li><a href="https://twitter.com/UOW_Library">Twitter</a></li><li><a href="https://www.youtube.com/user/libuow">YouTube</a></li>          </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- End Text Block With Related Links Component --><section class="page-content grid-container uw-text-block">
                <a id="d.en.52901"></a>
                <div class="grid-x grid-padding-x">
                    <div class="cell"><h2>Events calendar</h2></div>
                    <div class="cell large-auto"><div id="api_upc_cid7772_5636_6780_iid102"><h3 class="s-lc-ea-h3">Upcoming Events</h3><ul><li><a target="_blank" href="https://uow.libcal.com/event/5206842?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Saturday, May 11, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206843?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Sunday, May 12, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206844?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Monday, May 13, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206845?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Tuesday, May 14, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206846?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Wednesday, May 15, 2019</span></li></ul></div>
                        <p><a href="https://uow.libguides.com/calendar">See our full Library events calendar here</a>.</p>
                        <p>
                            <script src="https://api3-au.libcal.com/api_events.php?iid=102&amp;m=upc&amp;cid=7772_5636_6780&amp;audience=&amp;c=&amp;d=&amp;l=5&amp;target=_blank&amp;simple=ul_date&amp;context=object&amp;format=js" type="text/javascript">// <![CDATA[

                            // ]]></script>
                        </p></div>


                </div>
            </section>      </main>
        </div>
    </div>

</body>
</html>