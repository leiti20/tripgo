<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Go Trip</title>

    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="css/carossecommentaire.css">
    <link rel="stylesheet" href="css/carosselcss.css">
    <link rel="stylesheet" href="css/btncmt.css">
    <link rel="stylesheet" href="css/stylechat.css">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="https://csite.resource.nicepage.com/nicepage.css?version=3a1bec5f-5053-4b96-b861-97afe2c93f1a" media="screen" />
    <link rel="stylesheet" href="https://csite.resource.nicepage.com/nicepage-site.css?version=3a1bec5f-5053-4b96-b861-97afe2c93f1a" media="screen" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>
<style>
    h1:not(.u-title) {
        font-weight: var(--h1-font-weight);

        font-size: 40px;

        line-height: var(--h1-line-height);

        margin-top: var(--h1-margin-top);

        margin-bottom: var(--h1-margin-bottom);
    }

    .u-custom-color-4,
    .u-body.u-custom-color-4,
    section.u-custom-color-4::before,
    .u-custom-color-4>.u-audio-main-layout-wrapper::before,
    .u-custom-color-4>.u-container-layout::before,
    .u-custom-color-4>.u-inner-container-layout::before,
    .u-custom-color-4.u-sidenav::before,
    .u-container-layout.u-container-layout.u-custom-color-4::before,
    .u-table-alt-custom-color-4 tr:nth-child(2n) {
        color: var(--custom-color-4-text-color);
        background-color: rgba(228, 193, 173);
    }

    .u-palette-1-base,
    .u-body.u-palette-1-base,
    section.u-palette-1-base::before,
    .u-palette-1-base>.u-audio-main-layout-wrapper::before,
    .u-palette-1-base>.u-container-layout::before,
    .u-palette-1-base>.u-inner-container-layout::before,
    .u-palette-1-base.u-sidenav::before,
    .u-container-layout.u-container-layout.u-palette-1-base::before,
    .u-table-alt-palette-1-base tr:nth-child(2n) {
        color: #ffffff;
        background-color: rgb(86, 141, 150);
    }

    .u-palette-4-base,
    .u-body.u-palette-4-base,
    section.u-palette-4-base::before,
    .u-palette-4-base>.u-audio-main-layout-wrapper::before,
    .u-palette-4-base>.u-container-layout::before,
    .u-palette-4-base>.u-inner-container-layout::before,
    .u-palette-4-base.u-sidenav::before,
    .u-container-layout.u-container-layout.u-palette-4-base::before,
    .u-table-alt-palette-4-base tr:nth-child(2n) {
        color: #ffffff;
        background-color: rgb(8, 71, 81);
    }

    .u-section-4 .u-shape-4 {
        width: 233px;

        height: 247px;

        margin: 36px auto 0 0;
        border: 2px solid #3c3f69;


    }



    .u-palette-3-light-1,
    .u-body.u-palette-3-light-1,
    section.u-palette-3-light-1::before,
    .u-palette-3-light-1>.u-audio-main-layout-wrapper::before,
    .u-palette-3-light-1>.u-container-layout::before,
    .u-palette-3-light-1>.u-inner-container-layout::before,
    .u-palette-3-light-1.u-sidenav::before,
    .u-container-layout.u-container-layout.u-palette-3-light-1::before,
    .u-table-alt-palette-3-light-1 tr:nth-child(2n) {
        color: #ffffff;

        background-color: rgba(4, 4, 48, 0.8);

    }

    /*/RESPONSIVE_CLASS*/
    .u-section-4 {
        background-image: none;
    }

    .u-section-4 .u-sheet-1 {
        min-height: 718px;
        margin-top: 17px;
    }

    .u-section-4 .u-image-1 {
        width: 294px;
        height: 217px;
        margin: -102px auto 0 0;
    }

    .u-section-4 .u-group-1 {
        width: 618px;
        min-height: 99px;
        background-image: none;
        margin: -6px auto 0;
        margin-top: 20px;
    }

    .u-section-4 .u-container-layout-1 {
        padding-left: 20px;
        padding-right: 20px;
    }

    .u-section-4 .u-text-1 {
        font-weight: 700;
        margin: 10px 0;
    }

    .u-section-4 .u-layout-wrap-1 {
        width: 1139px;
        margin: 3px auto 0 0;
    }

    .u-section-4 .u-layout-cell-1 {
        min-height: 474px;
    }

    .u-section-4 .u-shape-1 {
        width: 233px;
        height: 247px;
        margin: 83px 0 0 auto;
    }

    .u-section-4 .u-icon-1 {
        height: 65px;
        width: 65px;
        background-image: none;
        margin: -222px auto 0 89px;
    }

    .u-section-4 .u-group-2 {
        width: 233px;
        min-height: 230px;
        background-image: none;
        box-shadow: 0 0 34px 0 rgba(0, 0, 0, 0.15);
        margin: 14px auto 30px 0;
    }

    .u-section-4 .u-container-layout-3 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .u-section-4 .u-text-2 {
        margin: 62px 12px 0;
    }

    .u-section-4 .u-text-3 {
        margin: 21px 20px 0;
    }

    .u-section-4 .u-layout-cell-2 {
        min-height: 474px;
        background-image: none;
    }

    .u-section-4 .u-shape-2 {
        width: 233px;
        height: 247px;
        margin: 36px auto 0 0;
    }

    .u-section-4 .u-icon-2 {
        height: 65px;
        width: 65px;
        background-image: none;
        margin: -220px auto 0 89px;
    }

    .u-section-4 .u-group-3 {
        width: 233px;
        min-height: 227px;
        background-image: none;
        box-shadow: 0 0 34px 0 rgba(0, 0, 0, 0.15);
        margin: 14px 0 45px auto;
    }

    .u-section-4 .u-container-layout-5 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .u-section-4 .u-text-4 {
        margin: 44px 12px 0;
    }

    .u-section-4 .u-text-5 {
        margin: 21px 20px 0;
    }

    .u-section-4 .u-layout-cell-3 {
        min-height: 474px;
        background-image: none;
    }

    .u-section-4 .u-shape-3 {
        width: 233px;
        height: 247px;
        margin: 83px 0 0 auto;
    }

    .u-section-4 .u-icon-3 {
        height: 65px;
        width: 65px;
        background-image: none;
        margin: -222px auto 0 89px;
    }

    .u-section-4 .u-group-4 {
        width: 233px;
        min-height: 227px;
        background-image: none;
        box-shadow: 0 0 34px 0 rgba(0, 0, 0, 0.15);
        margin: 14px auto 30px 0;
    }

    .u-section-4 .u-text-6 {
        margin: 44px 20px 0;
    }

    .u-section-4 .u-text-7 {
        margin: 21px 20px 0;
    }

    .u-section-4 .u-layout-cell-4 {
        min-height: 474px;
        background-image: none;
    }

    .u-section-4 .u-shape-4 {
        width: 233px;
        height: 247px;
        margin: 36px auto 0 0;
    }

    .u-section-4 .u-icon-4 {
        height: 65px;
        width: 65px;
        background-image: none;
        margin: -224px 84px 0 auto;
    }

    .u-section-4 .u-group-5 {
        width: 233px;
        min-height: 227px;
        background-image: none;
        box-shadow: 0 0 34px 0 rgba(0, 0, 0, 0.15);
        margin: 14px 0 45px auto;
    }

    .u-section-4 .u-text-8 {
        margin: 44px 20px 0;
    }

    .u-section-4 .u-text-9 {
        margin: 21px 20px 0;
    }

    .u-section-4 .u-btn-1 {
        background-image: none;
        letter-spacing: 1px;
        box-shadow: 2px 2px 10px 0 rgba(0, 0, 0, 0.3);
        margin: 29px auto 15px;
    }

    /*RESPONSIVE_MEDIA*/
    @media (max-width: 1199px) {
        .u-section-4 .u-sheet-1 {
            min-height: 836px;
        }

        .u-section-4 .u-image-1 {
            width: 295px;
            height: 296px;
            margin-top: -110px;
        }

        .u-section-4 .u-group-1 {
            margin-top: -107px;
            margin-right: initial;
            margin-left: initial;
            width: auto;
        }

        .u-section-4 .u-container-layout-1 {
            padding-left: 16px;
            padding-right: 16px;
        }

        .u-section-4 .u-text-1 {
            position: relative;
        }

        .u-section-4 .u-layout-wrap-1 {
            width: 939px;
            margin-top: 8px;
            margin-left: 1px;
        }

        .u-section-4 .u-layout-cell-1 {
            min-height: 466px;
        }

        .u-section-4 .u-shape-1 {
            width: 192px;
        }

        .u-section-4 .u-icon-1 {
            margin-left: 73px;
        }

        .u-section-4 .u-group-2 {
            width: 192px;
            min-height: 249px;
            margin-bottom: 0;
        }

        .u-section-4 .u-text-2 {
            width: 149px;
            margin-top: 55px;
            margin-left: auto;
            margin-right: auto;
        }

        .u-section-4 .u-text-3 {
            width: 148px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 19px;
        }

        .u-section-4 .u-layout-cell-2 {
            min-height: 466px;
        }

        .u-section-4 .u-shape-2 {
            width: 192px;
        }

        .u-section-4 .u-icon-2 {
            margin-left: 73px;
        }

        .u-section-4 .u-group-3 {
            width: 192px;
            min-height: 250px;
            margin-bottom: 1px;
        }

        .u-section-4 .u-container-layout-5 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .u-section-4 .u-text-4 {
            margin-left: 16px;
            margin-right: 16px;
        }

        .u-section-4 .u-text-5 {
            margin-left: 16px;
            margin-right: 16px;
        }

        .u-section-4 .u-layout-cell-3 {
            min-height: 466px;
        }

        .u-section-4 .u-shape-3 {
            width: 192px;
        }

        .u-section-4 .u-icon-3 {
            margin-left: 73px;
        }

        .u-section-4 .u-group-4 {
            width: 192px;
            margin-bottom: 0;
        }

        .u-section-4 .u-text-6 {
            margin-left: 16px;
            margin-right: 16px;
        }

        .u-section-4 .u-text-7 {
            margin-left: 16px;
            margin-right: 16px;
        }

        .u-section-4 .u-layout-cell-4 {
            min-height: 466px;
        }

        .u-section-4 .u-shape-4 {
            width: 192px;
        }

        .u-section-4 .u-icon-4 {
            margin-right: 69px;
        }

        .u-section-4 .u-group-5 {
            width: 192px;
            margin-bottom: 0;
        }

        .u-section-4 .u-text-8 {
            margin-left: 16px;
            margin-right: 16px;
        }

        .u-section-4 .u-text-9 {
            margin-left: 16px;
            margin-right: 16px;
        }

        .u-section-4 .u-btn-1 {
            margin-top: 50px;
            margin-bottom: 49px;
            margin-left: 340px;
        }
    }

    /*/RESPONSIVE_MEDIA*/
    /*RESPONSIVE_CLASS*/
    .u-lg .u-section-4 .u-sheet-1 {
        min-height: 836px;
    }

    .u-lg .u-section-4 .u-image-1 {
        width: 295px;
        height: 296px;
        margin-top: -110px;
    }

    .u-lg .u-section-4 .u-group-1 {
        margin-top: -107px;
        margin-right: initial;
        margin-left: initial;
        width: auto;
    }

    .u-lg .u-section-4 .u-container-layout-1 {
        padding-left: 16px;
        padding-right: 16px;
    }

    .u-lg .u-section-4 .u-text-1 {
        position: relative;
    }

    .u-lg .u-section-4 .u-layout-wrap-1 {
        width: 939px;
        margin-top: 8px;
        margin-left: 1px;
    }

    .u-lg .u-section-4 .u-layout-cell-1 {
        min-height: 466px;
    }

    .u-lg .u-section-4 .u-shape-1 {
        width: 192px;
    }

    .u-lg .u-section-4 .u-icon-1 {
        margin-left: 73px;
    }

    .u-lg .u-section-4 .u-group-2 {
        width: 192px;
        min-height: 249px;
        margin-bottom: 0;
    }

    .u-lg .u-section-4 .u-text-2 {
        width: 149px;
        margin-top: 55px;
        margin-left: auto;
        margin-right: auto;
    }

    .u-lg .u-section-4 .u-text-3 {
        width: 148px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 19px;
    }

    .u-lg .u-section-4 .u-layout-cell-2 {
        min-height: 466px;
    }

    .u-lg .u-section-4 .u-shape-2 {
        width: 192px;
    }

    .u-lg .u-section-4 .u-icon-2 {
        margin-left: 73px;
    }

    .u-lg .u-section-4 .u-group-3 {
        width: 192px;
        min-height: 250px;
        margin-bottom: 1px;
    }

    .u-lg .u-section-4 .u-container-layout-5 {
        padding-left: 12px;
        padding-right: 12px;
    }

    .u-lg .u-section-4 .u-text-4 {
        margin-left: 16px;
        margin-right: 16px;
    }

    .u-lg .u-section-4 .u-text-5 {
        margin-left: 16px;
        margin-right: 16px;
    }

    .u-lg .u-section-4 .u-layout-cell-3 {
        min-height: 466px;
    }

    .u-lg .u-section-4 .u-shape-3 {
        width: 192px;
    }

    .u-lg .u-section-4 .u-icon-3 {
        margin-left: 73px;
    }

    .u-lg .u-section-4 .u-group-4 {
        width: 192px;
        margin-bottom: 0;
    }

    .u-lg .u-section-4 .u-text-6 {
        margin-left: 16px;
        margin-right: 16px;
    }

    .u-lg .u-section-4 .u-text-7 {
        margin-left: 16px;
        margin-right: 16px;
    }

    .u-lg .u-section-4 .u-layout-cell-4 {
        min-height: 466px;
    }

    .u-lg .u-section-4 .u-shape-4 {
        width: 192px;
    }

    .u-lg .u-section-4 .u-icon-4 {
        margin-right: 69px;
    }

    .u-lg .u-section-4 .u-group-5 {
        width: 192px;
        margin-bottom: 0;
    }

    .u-lg .u-section-4 .u-text-8 {
        margin-left: 16px;
        margin-right: 16px;
    }

    .u-lg .u-section-4 .u-text-9 {
        margin-left: 16px;
        margin-right: 16px;
    }

    .u-lg .u-section-4 .u-btn-1 {
        margin-top: 50px;
        margin-bottom: 49px;
        margin-left: 340px;
    }

    /*/RESPONSIVE_CLASS*/
    /*RESPONSIVE_MEDIA*/
    @media (max-width: 991px) {
        .u-section-4 .u-sheet-1 {
            min-height: 767px;
        }

        .u-section-4 .u-image-1 {
            width: 243px;
            height: 188px;
            margin-top: -78px;
        }

        .u-section-4 .u-group-1 {
            margin-top: -31px;
            width: auto;
            margin-right: initial;
            margin-left: initial;
        }

        .u-section-4 .u-container-layout-1 {
            padding-left: 10px;
            padding-right: 10px;
        }

        .u-section-4 .u-layout-wrap-1 {
            width: 719px;
        }

        .u-section-4 .u-layout-cell-1 {
            min-height: 484px;
        }

        .u-section-4 .u-shape-1 {
            width: 315px;
        }

        .u-section-4 .u-icon-1 {
            margin-top: -229px;
            margin-left: 122px;
        }

        .u-section-4 .u-group-2 {
            width: 309px;
            min-height: 236px;
            margin-top: 21px;
        }

        .u-section-4 .u-text-2 {
            width: 257px;
            margin-top: 47px;
            margin-left: 26px;
            margin-right: 26px;
        }

        .u-section-4 .u-text-3 {
            width: 257px;
            margin-left: 26px;
            margin-right: 26px;
            margin-bottom: 33px;
        }

        .u-section-4 .u-layout-cell-2 {
            min-height: 484px;
        }

        .u-section-4 .u-shape-2 {
            width: 309px;
            height: 272px;
        }

        .u-section-4 .u-icon-2 {
            margin-top: -249px;
            margin-right: 122px;
            margin-left: auto;
        }

        .u-section-4 .u-group-3 {
            width: 309px;
            min-height: 228px;
            margin-top: 18px;
            margin-bottom: 0;
        }

        .u-section-4 .u-container-layout-5 {
            padding-left: 9px;
            padding-right: 9px;
        }

        .u-section-4 .u-text-4 {
            margin-top: 25px;
            margin-left: 2px;
            margin-right: 2px;
        }

        .u-section-4 .u-text-5 {
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 25px;
        }

        .u-section-4 .u-layout-cell-3 {
            min-height: 460px;
        }

        .u-section-4 .u-shape-3 {
            width: 324px;
        }

        .u-section-4 .u-icon-3 {
            margin-left: 122px;
        }

        .u-section-4 .u-group-4 {
            width: 309px;
            min-height: 231px;
        }

        .u-section-4 .u-text-6 {
            margin-top: 25px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .u-section-4 .u-text-7 {
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 25px;
        }

        .u-section-4 .u-layout-cell-4 {
            min-height: 460px;
        }

        .u-section-4 .u-shape-4 {
            width: 309px;
            height: 294px;
            margin-top: 0;
        }

        .u-section-4 .u-icon-4 {
            margin-top: -258px;
            margin-right: 122px;
        }

        .u-section-4 .u-group-5 {
            width: 309px;
            min-height: 248px;
            margin-top: 21px;
            margin-bottom: 45px;
        }

        .u-section-4 .u-text-8 {
            margin-top: 25px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .u-section-4 .u-text-9 {
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 25px;
        }

        .u-section-4 .u-btn-1 {
            margin-top: 52px;
            margin-left: auto;
            margin-bottom: 32px;
        }
    }

    /*/RESPONSIVE_MEDIA*/
    /*RESPONSIVE_CLASS*/
    .u-md .u-section-4 .u-sheet-1 {
        min-height: 767px;
    }

    .u-md .u-section-4 .u-image-1 {
        width: 243px;
        height: 188px;
        margin-top: -78px;
    }

    .u-md .u-section-4 .u-group-1 {
        margin-top: -31px;
        width: auto;
        margin-right: initial;
        margin-left: initial;
    }

    .u-md .u-section-4 .u-container-layout-1 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .u-md .u-section-4 .u-layout-wrap-1 {
        width: 719px;
    }

    .u-md .u-section-4 .u-layout-cell-1 {
        min-height: 484px;
    }

    .u-md .u-section-4 .u-shape-1 {
        width: 315px;
    }

    .u-md .u-section-4 .u-icon-1 {
        margin-top: -229px;
        margin-left: 122px;
    }

    .u-md .u-section-4 .u-group-2 {
        width: 309px;
        min-height: 236px;
        margin-top: 21px;
    }

    .u-md .u-section-4 .u-text-2 {
        width: 257px;
        margin-top: 47px;
        margin-left: 26px;
        margin-right: 26px;
    }

    .u-md .u-section-4 .u-text-3 {
        width: 257px;
        margin-left: 26px;
        margin-right: 26px;
        margin-bottom: 33px;
    }

    .u-md .u-section-4 .u-layout-cell-2 {
        min-height: 484px;
    }

    .u-md .u-section-4 .u-shape-2 {
        width: 309px;
        height: 272px;
    }

    .u-md .u-section-4 .u-icon-2 {
        margin-top: -249px;
        margin-right: 122px;
        margin-left: auto;
    }

    .u-md .u-section-4 .u-group-3 {
        width: 309px;
        min-height: 228px;
        margin-top: 18px;
        margin-bottom: 0;
    }

    .u-md .u-section-4 .u-container-layout-5 {
        padding-left: 9px;
        padding-right: 9px;
    }

    .u-md .u-section-4 .u-text-4 {
        margin-top: 25px;
        margin-left: 2px;
        margin-right: 2px;
    }

    .u-md .u-section-4 .u-text-5 {
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 25px;
    }

    .u-md .u-section-4 .u-layout-cell-3 {
        min-height: 460px;
    }

    .u-md .u-section-4 .u-shape-3 {
        width: 324px;
    }

    .u-md .u-section-4 .u-icon-3 {
        margin-left: 122px;
    }

    .u-md .u-section-4 .u-group-4 {
        width: 309px;
        min-height: 231px;
    }

    .u-md .u-section-4 .u-text-6 {
        margin-top: 25px;
        margin-left: 10px;
        margin-right: 10px;
    }

    .u-md .u-section-4 .u-text-7 {
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 25px;
    }

    .u-md .u-section-4 .u-layout-cell-4 {
        min-height: 460px;
    }

    .u-md .u-section-4 .u-shape-4 {
        width: 309px;
        height: 294px;
        margin-top: 0;
    }

    .u-md .u-section-4 .u-icon-4 {
        margin-top: -258px;
        margin-right: 122px;
    }

    .u-md .u-section-4 .u-group-5 {
        width: 309px;
        min-height: 248px;
        margin-top: 21px;
        margin-bottom: 45px;
    }

    .u-md .u-section-4 .u-text-8 {
        margin-top: 25px;
        margin-left: 10px;
        margin-right: 10px;
    }

    .u-md .u-section-4 .u-text-9 {
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 25px;
    }

    .u-md .u-section-4 .u-btn-1 {
        margin-top: 52px;
        margin-left: auto;
        margin-bottom: 32px;
    }

    /*/RESPONSIVE_CLASS*/
    /*RESPONSIVE_MEDIA*/
    @media (max-width: 767px) {
        .u-section-4 .u-sheet-1 {
            min-height: 1900px;
        }

        .u-section-4 .u-image-1 {
            width: 309px;
            height: 170px;
            margin-top: -79px;
            margin-left: 232px;
        }

        .u-section-4 .u-group-1 {
            margin-top: 23px;
            width: auto;
            margin-right: initial;
            margin-left: initial;
        }

        .u-section-4 .u-container-layout-1 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .u-section-4 .u-layout-wrap-1 {
            width: 535px;
            margin-top: 5px;
            margin-left: 3px;
        }

        .u-section-4 .u-layout-cell-1 {
            min-height: 390px;
        }

        .u-section-4 .u-shape-1 {
            width: 355px;
            height: 259px;
            margin-top: 18px;
            margin-right: auto;
            margin-left: 33px;
        }

        .u-section-4 .u-icon-1 {
            height: 61px;
            width: 61px;
            margin-top: -238px;
            margin-left: 102px;
        }

        .u-section-4 .u-group-2 {
            width: 325px;
            min-height: 242px;
            margin-top: 18px;
        }

        .u-section-4 .u-text-2 {
            width: 241px;
            margin-top: 25px;
            margin-left: auto;
            margin-right: auto;
        }

        .u-section-4 .u-text-3 {
            width: 241px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 25px;
        }

        .u-section-4 .u-layout-cell-2 {
            min-height: 354px;
        }

        .u-section-4 .u-shape-2 {
            width: 308px;
            height: 263px;
            margin-top: 1px;
            margin-right: 36px;
            margin-left: auto;
        }

        .u-section-4 .u-icon-2 {
            height: 61px;
            width: 61px;
            margin-top: -243px;
            margin-right: 121px;
        }

        .u-section-4 .u-group-3 {
            width: 290px;
            min-height: 245px;
            margin-top: 21px;
        }

        .u-section-4 .u-container-layout-5 {
            padding-left: 7px;
            padding-right: 7px;
        }

        .u-section-4 .u-text-4 {
            margin-left: 5px;
            margin-right: 5px;
        }

        .u-section-4 .u-text-5 {
            margin-left: 5px;
            margin-right: 5px;
        }

        .u-section-4 .u-layout-cell-3 {
            min-height: 369px;
        }

        .u-section-4 .u-shape-3 {
            width: 303px;
            margin-top: 1px;
            margin-right: auto;
            margin-left: 50px;
        }

        .u-section-4 .u-icon-3 {
            height: 61px;
            width: 61px;
            margin-top: -205px;
            margin-left: 132px;
        }

        .u-section-4 .u-group-4 {
            width: 290px;
            margin-top: 21px;
            margin-left: 21px;
        }

        .u-section-4 .u-text-6 {
            margin-left: 5px;
            margin-right: 5px;
        }

        .u-section-4 .u-text-7 {
            margin-left: 5px;
            margin-right: 5px;
        }

        .u-section-4 .u-layout-cell-4 {
            min-height: 375px;
        }

        .u-section-4 .u-shape-4 {
            width: 320px;
            margin-top: 1px;
            margin-right: 39px;
            margin-left: auto;
        }

        .u-section-4 .u-icon-4 {
            height: 61px;
            width: 61px;
            margin-top: -255px;
            margin-right: 125px;
        }

        .u-section-4 .u-group-5 {
            width: 311px;
            margin-top: 13px;
            margin-bottom: 0;
        }

        .u-section-4 .u-text-8 {
            margin-top: 75px;
            margin-left: 5px;
            margin-right: 5px;
        }

        .u-section-4 .u-text-9 {
            margin-left: 13px;
            margin-right: 13px;
        }

        .u-section-4 .u-btn-1 {
            margin-top: 43px;
            margin-bottom: 60px;
        }
    }

    /*/RESPONSIVE_MEDIA*/
    /*RESPONSIVE_CLASS*/
    .u-sm .u-section-4 .u-sheet-1 {
        min-height: 1900px;
    }

    .u-sm .u-section-4 .u-image-1 {
        width: 309px;
        height: 170px;
        margin-top: -79px;
        margin-left: 232px;
    }

    .u-sm .u-section-4 .u-group-1 {
        margin-top: 23px;
        width: auto;
        margin-right: initial;
        margin-left: initial;
    }

    .u-sm .u-section-4 .u-container-layout-1 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .u-sm .u-section-4 .u-layout-wrap-1 {
        width: 535px;
        margin-top: 5px;
        margin-left: 3px;
    }

    .u-sm .u-section-4 .u-layout-cell-1 {
        min-height: 390px;
    }

    .u-sm .u-section-4 .u-shape-1 {
        width: 355px;
        height: 259px;
        margin-top: 18px;
        margin-right: auto;
        margin-left: 33px;
    }

    .u-sm .u-section-4 .u-icon-1 {
        height: 61px;
        width: 61px;
        margin-top: -238px;
        margin-left: 102px;
    }

    .u-sm .u-section-4 .u-group-2 {
        width: 325px;
        min-height: 242px;
        margin-top: 18px;
    }

    .u-sm .u-section-4 .u-text-2 {
        width: 241px;
        margin-top: 25px;
        margin-left: auto;
        margin-right: auto;
    }

    .u-sm .u-section-4 .u-text-3 {
        width: 241px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 25px;
    }

    .u-sm .u-section-4 .u-layout-cell-2 {
        min-height: 354px;
    }

    .u-sm .u-section-4 .u-shape-2 {
        width: 308px;
        height: 263px;
        margin-top: 1px;
        margin-right: 36px;
        margin-left: auto;
    }

    .u-sm .u-section-4 .u-icon-2 {
        height: 61px;
        width: 61px;
        margin-top: -243px;
        margin-right: 121px;
    }

    .u-sm .u-section-4 .u-group-3 {
        width: 290px;
        min-height: 245px;
        margin-top: 21px;
    }

    .u-sm .u-section-4 .u-container-layout-5 {
        padding-left: 7px;
        padding-right: 7px;
    }

    .u-sm .u-section-4 .u-text-4 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .u-sm .u-section-4 .u-text-5 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .u-sm .u-section-4 .u-layout-cell-3 {
        min-height: 369px;
    }

    .u-sm .u-section-4 .u-shape-3 {
        width: 303px;
        margin-top: 1px;
        margin-right: auto;
        margin-left: 50px;
    }

    .u-sm .u-section-4 .u-icon-3 {
        height: 61px;
        width: 61px;
        margin-top: -205px;
        margin-left: 132px;
    }

    .u-sm .u-section-4 .u-group-4 {
        width: 290px;
        margin-top: 21px;
        margin-left: 21px;
    }

    .u-sm .u-section-4 .u-text-6 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .u-sm .u-section-4 .u-text-7 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .u-sm .u-section-4 .u-layout-cell-4 {
        min-height: 375px;
    }

    .u-sm .u-section-4 .u-shape-4 {
        width: 320px;
        margin-top: 1px;
        margin-right: 39px;
        margin-left: auto;
    }

    .u-sm .u-section-4 .u-icon-4 {
        height: 61px;
        width: 61px;
        margin-top: -255px;
        margin-right: 125px;
    }

    .u-sm .u-section-4 .u-group-5 {
        width: 311px;
        margin-top: 13px;
        margin-bottom: 0;
    }

    .u-sm .u-section-4 .u-text-8 {
        margin-top: 75px;
        margin-left: 5px;
        margin-right: 5px;
    }

    .u-sm .u-section-4 .u-text-9 {
        margin-left: 13px;
        margin-right: 13px;
    }

    .u-sm .u-section-4 .u-btn-1 {
        margin-top: 43px;
        margin-bottom: 60px;
    }

    /*/RESPONSIVE_CLASS*/
    /*RESPONSIVE_MEDIA*/
    @media (max-width: 575px) {
        .u-section-4 .u-sheet-1 {
            min-height: 824px;
        }

        .u-section-4 .u-image-1 {
            height: 177px;
            width: 271px;
            margin-top: -77px;
            margin-left: 0;
        }

        .u-section-4 .u-group-1 {
            min-height: 131px;
            margin-top: -22px;
            width: auto;
            margin-right: initial;
            margin-left: initial;
        }

        .u-section-4 .u-container-layout-1 {
            padding-left: 1px;
            padding-right: 1px;
        }

        .u-section-4 .u-text-1 {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .u-section-4 .u-layout-wrap-1 {
            width: 316px;
            margin-top: 27px;
            margin-left: 12px;
        }

        .u-section-4 .u-layout-cell-1 {
            min-height: 368px;
        }

        .u-section-4 .u-shape-1 {
            height: 288px;
            width: 303px;
            margin-top: 0;
            margin-right: 0;
            margin-left: auto;
        }

        .u-section-4 .u-icon-1 {
            height: 65px;
            width: 65px;
            margin-top: -254px;
            margin-left: 112px;
        }

        .u-section-4 .u-group-2 {
            width: 289px;
            min-height: 237px;
            margin-top: 21px;
        }

        .u-section-4 .u-container-layout-3 {
            padding-left: 0;
            padding-right: 0;
        }

        .u-section-4 .u-text-2 {
            margin-top: 59px;
            margin-left: 24px;
            margin-right: 24px;
        }

        .u-section-4 .u-text-3 {
            margin-left: 24px;
            margin-right: 24px;
            margin-bottom: 59px;
        }

        .u-section-4 .u-layout-cell-2 {
            min-height: 400px;
        }

        .u-section-4 .u-shape-2 {
            width: 289px;
            height: 272px;
            margin-top: 0;
            margin-right: auto;
            margin-left: 0;
        }

        .u-section-4 .u-icon-2 {
            height: 65px;
            width: 65px;
            margin-top: -236px;
            margin-right: 122px;
        }

        .u-section-4 .u-group-3 {
            width: 309px;
            min-height: 268px;
        }

        .u-section-4 .u-container-layout-5 {
            padding-left: 15px;
            padding-right: 15px;
        }

        .u-section-4 .u-text-4 {
            margin-left: 1px;
            margin-right: 1px;
        }

        .u-section-4 .u-text-5 {
            margin-left: 1px;
            margin-right: 1px;
        }

        .u-section-4 .u-layout-cell-3 {
            min-height: 373px;
        }

        .u-section-4 .u-shape-3 {
            margin-top: 0;
            margin-right: -1px;
            margin-left: auto;
        }

        .u-section-4 .u-icon-3 {
            height: 65px;
            width: 65px;
            margin-top: -210px;
            margin-left: 112px;
        }

        .u-section-4 .u-group-4 {
            width: 289px;
            min-height: 239px;
            margin-left: 0;
        }

        .u-section-4 .u-text-6 {
            margin-left: 12px;
            margin-right: 12px;
        }

        .u-section-4 .u-text-7 {
            margin-left: 12px;
            margin-right: 12px;
        }

        .u-section-4 .u-layout-cell-4 {
            min-height: 539px;
        }

        .u-section-4 .u-shape-4 {
            width: 289px;
            margin-top: 0;
            margin-right: auto;
            margin-left: 0;
        }

        .u-section-4 .u-icon-4 {
            height: 65px;
            width: 65px;
            margin-top: -252px;
            margin-right: 122px;
        }

        .u-section-4 .u-group-5 {
            width: 297px;
            min-height: 298px;
            margin-top: 21px;
        }

        .u-section-4 .u-text-8 {
            margin-top: 30px;
            margin-left: 12px;
            margin-right: 12px;
        }

        .u-section-4 .u-text-9 {
            margin-left: 12px;
            margin-right: 12px;
            margin-bottom: 30px;
        }

        .u-section-4 .u-btn-1 {
            margin-top: -16px;
            margin-bottom: 114px;
        }
    }

    /*/RESPONSIVE_MEDIA*/
    /*RESPONSIVE_CLASS*/
    .u-xs .u-section-4 .u-sheet-1 {
        min-height: 824px;
    }

    .u-xs .u-section-4 .u-image-1 {
        height: 177px;
        width: 271px;
        margin-top: -77px;
        margin-left: 0;
    }

    .u-xs .u-section-4 .u-group-1 {
        min-height: 131px;
        margin-top: -22px;
        width: auto;
        margin-right: initial;
        margin-left: initial;
    }

    .u-xs .u-section-4 .u-container-layout-1 {
        padding-left: 1px;
        padding-right: 1px;
    }

    .u-xs .u-section-4 .u-text-1 {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .u-xs .u-section-4 .u-layout-wrap-1 {
        width: 316px;
        margin-top: 27px;
        margin-left: 12px;
    }

    .u-xs .u-section-4 .u-layout-cell-1 {
        min-height: 368px;
    }

    .u-xs .u-section-4 .u-shape-1 {
        height: 288px;
        width: 303px;
        margin-top: 0;
        margin-right: 0;
        margin-left: auto;
    }

    .u-xs .u-section-4 .u-icon-1 {
        height: 65px;
        width: 65px;
        margin-top: -254px;
        margin-left: 112px;
    }

    .u-xs .u-section-4 .u-group-2 {
        width: 289px;
        min-height: 237px;
        margin-top: 21px;
    }

    .u-xs .u-section-4 .u-container-layout-3 {
        padding-left: 0;
        padding-right: 0;
    }

    .u-xs .u-section-4 .u-text-2 {
        margin-top: 59px;
        margin-left: 24px;
        margin-right: 24px;
    }

    .u-xs .u-section-4 .u-text-3 {
        margin-left: 24px;
        margin-right: 24px;
        margin-bottom: 59px;
    }

    .u-xs .u-section-4 .u-layout-cell-2 {
        min-height: 400px;
    }

    .u-xs .u-section-4 .u-shape-2 {
        width: 289px;
        height: 272px;
        margin-top: 0;
        margin-right: auto;
        margin-left: 0;
    }

    .u-xs .u-section-4 .u-icon-2 {
        height: 65px;
        width: 65px;
        margin-top: -236px;
        margin-right: 122px;
    }

    .u-xs .u-section-4 .u-group-3 {
        width: 309px;
        min-height: 268px;
    }

    .u-xs .u-section-4 .u-container-layout-5 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .u-xs .u-section-4 .u-text-4 {
        margin-left: 1px;
        margin-right: 1px;
    }

    .u-xs .u-section-4 .u-text-5 {
        margin-left: 1px;
        margin-right: 1px;
    }

    .u-xs .u-section-4 .u-layout-cell-3 {
        min-height: 373px;
    }

    .u-xs .u-section-4 .u-shape-3 {
        margin-top: 0;
        margin-right: -1px;
        margin-left: auto;
    }

    .u-xs .u-section-4 .u-icon-3 {
        height: 65px;
        width: 65px;
        margin-top: -210px;
        margin-left: 112px;
    }

    .u-xs .u-section-4 .u-group-4 {
        width: 289px;
        min-height: 239px;
        margin-left: 0;
    }

    .u-xs .u-section-4 .u-text-6 {
        margin-left: 12px;
        margin-right: 12px;
    }

    .u-xs .u-section-4 .u-text-7 {
        margin-left: 12px;
        margin-right: 12px;
    }

    .u-xs .u-section-4 .u-layout-cell-4 {
        min-height: 539px;
    }

    .u-xs .u-section-4 .u-shape-4 {
        width: 289px;
        margin-top: 0;
        margin-right: auto;
        margin-left: 0;
    }

    .u-xs .u-section-4 .u-icon-4 {
        height: 65px;
        width: 65px;
        margin-top: -252px;
        margin-right: 122px;
    }

    .u-xs .u-section-4 .u-group-5 {
        width: 297px;
        min-height: 298px;
        margin-top: 21px;
    }

    .u-xs .u-section-4 .u-text-8 {
        margin-top: 30px;
        margin-left: 12px;
        margin-right: 12px;
    }

    .u-xs .u-section-4 .u-text-9 {
        margin-left: 12px;
        margin-right: 12px;
        margin-bottom: 30px;
    }

    .u-xs .u-section-4 .u-btn-1 {
        margin-top: -16px;
        margin-bottom: 114px;
    }
</style>

<body>
    <!--===========Nav Bar=================-->
    <?php require('navbar.php'); ?>

    <!--===============Banner================-->
    <section class="banner">
        <div class="banner-text-item">
            <div class="banner-heading">
                <h1 data-translate-key="Decouvrir le monde!">Decouvrir le monde!</h1>
            </div>

            <form id="contform" action="search.php" method="post">

                <div class="formgv">
                    <input type="radio" name="al" id="alr" value="aller-retour">
                    <label for="alr" data-translate-key="Aller-retour">Aller-retour</label>
                    <input type="radio" name="al" id="als" value="Direct">
                    <label for="als" data-translate-key="Aller-simple">Aller-simple</label>
                    <input type="radio" name="al" id="amld" value="Une escale">
                    <label for="amld" data-translate-key="Multi-destination">Multi-destination</label>

                </div>
                <div class="choixclass" style="z-index: 1;">
                    <label for="" data-translate-key="Classe :">Classe :</label>
                    <select class="pays" name="classe">
                        <option value="Economy">Economy</option>
                        <option value="Premium economy">Premium economy</option>
                        <option value="Busines">Busines</option>
                        <option value="First">First</option>
                    </select>
                    <label for="" data-translate-key="Nombre de passager:">Nombre de passager:</label>
                    <input type="number" min="1" max="9" step="1" value="1" id="nbrdepasger" name="nbrpass">

                </div>
                <div class="form" id="formalr" style="position: relative;">
                    <input type="text" list="mylist" placeholder="De" name="de1" data-translate-key="De">
                    <input type="text" list="mylist" placeholder="Vers" name="vers1" data-translate-key="Vers">
                    <input type="date" pattern="\d{4}-\d{2}-\d{2}" placeholder="date de depart" id="datedalr" name="datede1">
                    <input type="date" pattern="\d{4}-\d{2}-\d{2}" placeholder="date de depart" id="dateralr" name="dateret1">
                </div>
                <div class="formals" id="formals">
                    <input type="text" list="mylist" placeholder="De" name="departure_airport" data-translate-key="De">
                    <input type="text" list="mylist" placeholder="Vers" name="arrival_airport" data-translate-key="Vers">
                    <input type="date" id="date_depart" name="date_depart" pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD" data-translate-key="date de depart">
                </div>
                <div class="formmld" id="formmld">
                    <input type="text" list="mylist" placeholder="De" name="de3" data-translate-key="De">
                    <input type="text" list="mylist" placeholder="Vers" name="vers3" data-translate-key="Vers">
                    <input type="date" name="datede3" pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD">
                    <input type="date" name="dateret3" pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD">
                </div>
                <div class="formmld" id="formml">
                    <input type="text" list="mylist" placeholder="De" name="de4" data-translate-key="De">
                    <input type="text" list="mylist" placeholder="Vers" name="vers4" data-translate-key="Vers">
                    <input type="date" name="datede4" pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD">
                    <input type="date" name="dateret4" pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD">
                </div>
                <div action="" class="bookf">
                    <button type="submit" class="book">Book</button>

                </div>



                <datalist id="mylist">
                    <option>London</option>
                    <option>Paris</option>
                    <option>New York</option>
                    <option>Los Angeles</option>
                    <option>San Francisco</option>
                    <option>Tokyo</option>
                    <option>Duha</option>
                    <option>Dubai</option>
                    <option>Sydney</option>
                    <option>Chicago</option>
                    <option>Frankfurt</option>
                    <option>Bangkok</option>
                </datalist>

            </form>
        </div>
        </div>
    </section>
    <!--=============== chatbot ================-->
    <div class="containerch">

        <div class="glassch" id="sidebarch">
            <div class="chat" id="contentch">
                <h1 class="chat-title" data-translate-key="TripGénie Chatbot">TripGénie Chatbot</h1>
                <div class="chat-log" id="chatLog" data-translate-key="">
                    <!-- Les messages seront ajoutés ici -->
                </div>
                <div class="input">
                    <input type="text" id="userInput" placeholder="Type your question here..." data-translate-key="Type your question here...">
                    <button id="envcht" data-translate-key="Envoyer">Envoyer</button>
                </div>
                <div class="suggestions">
                    <button onclick="sendQuestion('quis vous-êtes?')" data-translate-key="Who are you?">Quis vous-êtes?</button>
                    <button onclick="sendQuestion('comment puis-je réserver un vol ?')" data-translate-key="How to book a flight?">Comment réserver un vol ?</button>
                    <button onclick="sendQuestion('quelles méthodes de paiement acceptez-vous ?')" data-translate-key="Payment methods accepted">Méthodes de paiement</button>
                    <button onclick="sendQuestion('puis-je annuler ma réservation et obtenir un remboursement ?')" data-translate-key="Cancellation and refund">Annulation et Remboursement</button>
                    <button onclick="sendQuestion('comment puis-je modifier ma réservation ?')" data-translate-key="Modify a booking">Modifier une réservation</button>
                    <button onclick="sendQuestion('quelles sont les restrictions de bagages pour mon vol ?')" data-translate-key="Baggage restrictions">Restrictions de bagages</button>
                    <button onclick="sendQuestion('y a-t-il des réductions pour les réservations de groupe ?')" data-translate-key="Group booking discounts">Réductions pour groupes</button>
                    <button onclick="sendQuestion('comment puis-je obtenir une facture pour ma réservation ?')" data-translate-key="How to get an invoice?">Obtenir une facture</button>
                    <button onclick="sendQuestion('comment puis-je ajouter des services spéciaux à ma réservation ?')" data-translate-key="Add special services">Ajouter des services spéciaux</button>
                    <button onclick="sendQuestion('que dois-je faire si mon vol est retardé ?')" data-translate-key="What to do if my flight is delayed?">Vol retardé</button>
                    <button onclick="sendQuestion('est-il possible de réserver un vol de dernière minute ?')" data-translate-key="Last-minute booking">Réservation de dernière minute</button>
                </div>

            </div>
        </div>
        <div id="btnchatbot">
            <input type="button" id="chatbot" value="Assistante" data-translate-key="Assistant">
        </div>
    </div>

    <!--=============== btn commentaire ================-->
    <div class="utilicm">
        <div id="btncmnt">
            <input type="button" id="comments" value="Commentaire" data-translate-key="Commentaire">
        </div>
        <div class="vertical-nav bg-white" id="sidebar">
            <section id="contact">
                <div class="content">
                    <div id="form">
                        <form action="" id="contactForm" method="post">
                            <span data-translate-key="Name">Nom</span>
                            <input type="text" name="name" class="name" placeholder="Entrez votre nom" tabindex=1 data-translate-key="Enter your name" />
                            <span data-translate-key="Email">Email</span>
                            <input type="text" name="email" class="email" placeholder="Entrez votre email" tabindex=2 data-translate-key="Enter your email" />
                            <span id="captcha"></span>
                            <input type="text" name="captcha" class="captcha" maxlength="4" size="4" placeholder="Entrez le code captcha" tabindex=3 data-translate-key="Enter the captcha code" />
                            <span data-translate-key="Comment">Commentaire</span>
                            <textarea class="message" placeholder="Entrez votre commentaire" tabindex=4 data-translate-key="Enter your comment"></textarea>
                            <input type="submit" name="submit" value="Envoyer le commentaire" class="submit" tabindex=5 data-translate-key="Send the comment">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--==============Why us===================-->
    <div class="wrap wrap-fluid">
        <section id="main" class="container-fluid">

            <div class="u-body u-xl-mode">
                <section class="u-clearfix u-section-4" id="carousel_24a8">
                    <div class="u-clearfix u-sheet u-sheet-1">
                        <div class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h2 class="u-text u-text-1" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key="Qu'apporte de plus notre application?">
                                    Qu'apporte de plus notre application?</h2>
                            </div>
                        </div>
                        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
                            <div class="u-layout">
                                <div class="u-layout-row">
                                    <div class="u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                                        <div class="u-container-layout">
                                            <div class="u-custom-color-4 u-shape u-shape-rectangle u-shape-1"></div>

                                            <span class="u-icon u-icon-circle u-text-body-alt-color u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 480.164 480.164">
                                                    <use xlink:href="#svg-dee8"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 480.164 480.164" x="0px" y="0px" id="svg-dee8" style="enable-background:new 0 0 480.164 480.164;">
                                                    <g>
                                                        <g>
                                                            <path d="M464.164,232.082c-3.141,0.102-6.352,1.938-7.594,5.027l-7.133,17.84l-17.719-64.973c-0.875-3.199-3.633-5.527-6.93-5.855    c-3.359-0.359-6.461,1.422-7.945,4.383l-21.789,43.578h-12.249c11.185-22.096,17.194-46.638,17.194-72    c0-88.223-71.773-160-160-160s-160,71.777-160,160c0,25.371,6.015,49.92,17.206,72.021l-1.042-0.021    c-3.219,0.102-6.352,1.938-7.594,5.027l-7.133,17.84l-17.719-64.973c-0.875-3.199-3.633-5.527-6.93-5.855    c-3.391-0.359-6.461,1.422-7.945,4.383l-21.789,43.578H0v16h32c3.031,0,5.797-1.711,7.156-4.422l14.633-29.273l18.492,67.801    c0.906,3.316,3.828,5.684,7.266,5.883c0.148,0.008,0.305,0.012,0.453,0.012c3.258,0,6.211-1.98,7.43-5.027l13.945-34.863    l5.367,0.108c4.106,6.168,8.52,12.16,13.508,17.767c0.219,0.859,0.586,1.691,1.094,2.453    c26.258,39.383,27.789,47.543,32.344,71.77c0.844,4.449,1.773,9.391,2.953,15.078c2.036,9.923,7.845,18.002,15.669,23.056    c-2.702,3.883-4.31,8.58-4.31,13.659c0,8.523,4.497,15.975,11.211,20.233c-1.985,3.492-3.211,7.471-3.211,11.767    c0,8.523,4.497,15.975,11.211,20.233c-1.985,3.492-3.211,7.471-3.211,11.767c0,13.234,10.766,24,24,24h64    c13.234,0,24-10.766,24-24c0-4.296-1.226-8.274-3.211-11.767c6.714-4.259,11.211-11.71,11.211-20.233    c0-4.296-1.226-8.274-3.211-11.767c6.714-4.259,11.211-11.71,11.211-20.233c0-5.079-1.607-9.775-4.309-13.658    c7.824-5.052,13.632-13.125,15.668-23.037c1.18-5.707,2.109-10.648,2.953-15.098c4.555-24.227,6.086-32.387,32.344-71.77    c0.508-0.762,0.875-1.594,1.094-2.453c5.047-5.673,9.51-11.737,13.654-17.984H400c3.031,0,5.797-1.711,7.156-4.422l14.633-29.273    l18.492,67.801c0.906,3.316,3.828,5.684,7.266,5.883c0.148,0.008,0.305,0.012,0.453,0.012c3.258,0,6.211-1.98,7.43-5.027    l13.945-34.863l10.461,0.211l0.328-16L464.164,232.082z M272,464.082h-64c-4.414,0-8-3.59-8-8s3.586-8,8-8h64c4.414,0,8,3.59,8,8    S276.414,464.082,272,464.082z M280,432.082h-8h-64h-8c-4.414,0-8-3.59-8-8s3.586-8,8-8h80c4.414,0,8,3.59,8,8    S284.414,432.082,280,432.082z M288,400.082h-8h-80h-8c-4.414,0-8-3.59-8-8s3.586-8,8-8h96c4.414,0,8,3.59,8,8    S292.414,400.082,288,400.082z M344.898,258.59c-1.305,1.387-2.047,3.164-2.164,4.992c-25.586,38.84-27.563,49.379-32.148,73.75    c-0.82,4.359-1.734,9.207-2.898,14.824c-1.922,9.375-9.727,15.926-18.969,15.926H288h-14.468l21.176-120H304    c13.234,0,24-10.766,24-24v-32h24c4.422,0,8-3.582,8-8v-40c0-13.234-10.766-24-24-24v-24c0-13.234-10.766-24-24-24h-8    c0-13.234-10.766-24-24-24h-24c-4.422,0-8,3.582-8,8v184c0,4.418,3.578,8,8,8h22.468l-21.176,120h-34.583l-21.176-120H224    c4.422,0,8-3.582,8-8v-184c0-4.418-3.578-8-8-8h-24c-13.234,0-24,10.766-24,24h-8c-13.234,0-24,10.766-24,24v24    c-13.234,0-24,10.766-24,24v56c0,4.418,3.578,8,8,8h24v16c0,13.234,10.766,24,24,24h9.292l21.176,120H192h-0.719    c-9.242,0-17.047-6.551-18.969-15.945c-1.164-5.598-2.078-10.445-2.898-14.805c-4.586-24.371-6.563-34.91-32.148-73.75    c-0.117-1.828-0.859-3.605-2.164-4.992C109.883,231.879,96,196.898,96,160.082c0-79.402,64.602-144,144-144s144,64.598,144,144    C384,196.898,370.117,231.879,344.898,258.59z M296,136.082v-24c0-4.418-3.578-8-8-8h-24v-40h16c4.414,0,8,3.59,8,8v8    c0,4.418,3.578,8,8,8h16c4.414,0,8,3.59,8,8v32c0,4.418,3.578,8,8,8h8c4.414,0,8,3.59,8,8v32h-24h-32c-4.422,0-8,3.582-8,8v16h16    v-8h16v32c0,4.41-3.586,8-8,8h-40v-112h16v16H296z M160,160.082c-4.422,0-8,3.582-8,8v24h-16v-48c0-4.41,3.586-8,8-8h8    c4.422,0,8-3.582,8-8v-32c0-4.41,3.586-8,8-8h8v16h16v-24v-8c0-4.41,3.586-8,8-8h16v168h-40c-4.414,0-8-3.59-8-8v-24v-24h16v-16    H160z">
                                                            </path>
                                                        </g>
                                                    </g>

                                                </svg></span>
                                            <div class="u-container-style u-group u-white u-group-2">
                                                <div class="u-container-layout u-valign-middle-sm u-container-layout-3">
                                                    <h4 class="u-align-center u-text u-text-2" data-translate-key="Suivez n'importe quel vol en direct">Suivez n'importe quel
                                                        vol
                                                        en direct</h4>
                                                    <p class="u-align-center u-text u-text-3" data-translate-key="Tout ce que vous voulez savoir sur tous les vols, dans le monde entier, que vous soyez passager ou non.">Tout ce que vous
                                                        voulez
                                                        savoir sur tous les vols, dans le monde entier, que vous
                                                        soyez
                                                        passager ou
                                                        non.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                                        <div class="u-container-layout">
                                            <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-2"></div>
                                            <span class="u-icon u-icon-circle u-text-body-alt-color u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                                                    <use xlink:href="#svg-0263"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-0263" style="enable-background:new 0 0 512 512;">
                                                    <g>
                                                        <g>
                                                            <path d="M458.667,192H352c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h106.667c17.643,0,32,14.357,32,32    v213.333c0,17.643-14.357,32-32,32H245.333c-17.643,0-32-14.357-32-32v-85.333c0-5.888-4.779-10.667-10.667-10.667    S192,367.445,192,373.333v85.333C192,488.064,215.936,512,245.333,512h213.333C488.064,512,512,488.064,512,458.667V245.333    C512,215.936,488.064,192,458.667,192z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M160,298.667h-10.667c-5.888,0-10.667,4.779-10.667,10.667S143.445,320,149.333,320H160    c5.888,0,10.667-4.779,10.667-10.667S165.888,298.667,160,298.667z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M62.741,0h-9.408C48.235,0,43.2,0.725,38.357,2.133c-5.653,1.664-8.896,7.595-7.253,13.248     c1.365,4.651,5.632,7.659,10.24,7.659c1.003,0,2.005-0.128,3.008-0.427c2.901-0.853,5.909-1.28,8.981-1.28h9.408     c5.909,0,10.667-4.779,10.667-10.667S68.629,0,62.741,0z">
                                                                </path>
                                                                <path d="M21.333,257.216v-21.568c0-5.888-4.779-10.667-10.667-10.667S0,229.76,0,235.648v21.568     c0,5.888,4.779,10.667,10.667,10.667S21.333,263.104,21.333,257.216z">
                                                                </path>
                                                                <path d="M10.667,203.179c5.888,0,10.667-4.779,10.667-10.667v-21.568c0-5.888-4.779-10.667-10.667-10.667S0,165.056,0,170.944     v21.568C0,198.4,4.779,203.179,10.667,203.179z">
                                                                </path>
                                                                <path d="M10.667,73.792c5.888,0,10.667-4.779,10.667-10.667v-9.792c0-2.965,0.405-5.888,1.195-8.704     c1.6-5.675-1.685-11.563-7.36-13.163c-5.632-1.685-11.563,1.664-13.163,7.36C0.683,43.541,0,48.427,0,53.333v9.792     C0,69.013,4.779,73.792,10.667,73.792z">
                                                                </path>
                                                                <path d="M10.667,138.496c5.888,0,10.667-4.779,10.667-10.667v-21.568c0-5.888-4.779-10.667-10.667-10.667S0,100.373,0,106.261     v21.568C0,133.717,4.779,138.496,10.667,138.496z">
                                                                </path>
                                                                <path d="M44.587,297.451c-5.163-1.472-9.941-4.267-13.781-8.085c-4.16-4.16-10.923-4.117-15.083,0.043     c-4.16,4.181-4.139,10.944,0.043,15.083c6.4,6.379,14.357,11.029,22.997,13.483c0.981,0.277,1.963,0.405,2.923,0.405     c4.629,0,8.917-3.051,10.24-7.744C53.547,304.96,50.261,299.051,44.587,297.451z">
                                                                </path>
                                                                <path d="M307.605,51.968c0.981,0,1.984-0.128,2.987-0.448c5.653-1.664,8.917-7.573,7.253-13.227     c-2.517-8.619-7.253-16.533-13.675-22.891c-4.181-4.139-10.944-4.117-15.083,0.085c-4.139,4.181-4.096,10.944,0.085,15.083     c3.84,3.84,6.699,8.576,8.192,13.717C298.731,48.939,302.976,51.968,307.605,51.968z">
                                                                </path>
                                                                <path d="M256.832,0h-21.568c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h21.568     c5.888,0,10.667-4.779,10.667-10.667S262.72,0,256.832,0z">
                                                                </path>
                                                                <path d="M106.219,298.667H84.651c-5.888,0-10.667,4.779-10.667,10.667S78.763,320,84.651,320h21.568     c5.888,0,10.667-4.779,10.667-10.667S112.107,298.667,106.219,298.667z">
                                                                </path>
                                                                <path d="M309.333,73.6c-5.888,0-10.667,4.779-10.667,10.667v21.568c0,5.888,4.779,10.667,10.667,10.667S320,111.723,320,105.835     V84.267C320,78.357,315.221,73.6,309.333,73.6z">
                                                                </path>
                                                                <path d="M192.149,0h-21.568c-5.909,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h21.547     c5.909,0,10.688-4.779,10.688-10.667S198.037,0,192.149,0z">
                                                                </path>
                                                                <path d="M127.445,0h-21.568c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h21.568     c5.888,0,10.667-4.779,10.667-10.667S133.333,0,127.445,0z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M309.333,138.667c-5.888,0-10.667,4.779-10.667,10.667V160c0,5.888,4.779,10.667,10.667,10.667S320,165.888,320,160    v-10.667C320,143.445,315.221,138.667,309.333,138.667z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M349.952,185.515l-33.067-33.067c-12.971-12.971-34.112-12.971-47.083,0c-3.883,3.883-6.613,8.512-8.171,13.419    c-11.627-4.053-25.536-1.045-34.496,7.915c-4.885,4.885-7.915,10.923-9.131,17.237c-10.176-1.429-20.8,2.027-28.203,9.429    c-7.083,7.083-10.304,16.576-9.664,25.856c-7.189,0.981-13.824,4.245-19.029,9.451c-6.293,6.293-9.749,14.656-9.749,23.552    s3.456,17.28,9.749,23.552l9.557,9.557v38.251C170.667,360.064,194.603,384,224,384h43.733C331.84,384,384,331.84,384,267.733    C384,236.693,371.904,207.488,349.952,185.515z M267.733,362.667H224c-17.643,0-32-14.357-32-32v-16.917l24.469,24.469    c4.16,4.16,10.923,4.16,15.083,0c2.069-2.091,3.115-4.821,3.115-7.552c0-2.731-1.045-5.461-3.115-7.552l-55.36-55.36    c-2.261-2.24-3.499-5.269-3.499-8.448c0-3.179,1.237-6.187,3.499-8.448c4.523-4.523,12.395-4.523,16.917,0l23.36,23.36    c4.16,4.16,10.923,4.16,15.083,0c2.069-2.091,3.115-4.821,3.115-7.552c0-2.731-1.045-5.461-3.115-7.531l-26.667-26.667    c-4.672-4.672-4.672-12.245,0-16.917c4.523-4.523,12.395-4.523,16.917,0l16,16c4.16,4.16,10.923,4.16,15.083,0    c2.069-2.091,3.115-4.821,3.115-7.552s-1.045-5.461-3.115-7.531l-10.667-10.667c-4.672-4.672-4.672-12.245,0-16.917    c4.523-4.523,12.395-4.523,16.917,0l10.667,10.667c4.16,4.16,10.923,4.16,15.083,0c2.069-2.091,3.115-4.821,3.115-7.552    s-1.045-5.461-3.136-7.552c-2.261-2.24-3.499-5.248-3.499-8.448s1.259-6.208,3.52-8.448c4.672-4.672,12.245-4.672,16.917,0    l33.067,33.067c17.92,17.92,27.797,41.771,27.797,67.115C362.667,320.085,320.085,362.667,267.733,362.667z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                            <div class="u-align-center-xs u-align-left-lg u-align-left-sm u-container-style u-group u-white u-group-3">
                                                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-5">
                                                    <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-text u-text-4" data-translate-key="Ne manquez aucune notification de vol">
                                                        Ne manquez aucune notification de vol</h4>
                                                    <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-text u-text-5" data-translate-key="Recevez gratuitement des mises à jour sur les horaires, la porte d'embarquement, le tapis bagages.">
                                                        Recevez gratuitement des mises à jour sur les
                                                        horaires, la porte d'embarquement, le
                                                        tapis bagages.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                                        <div class="u-container-layout u-valign-top-sm">
                                            <div class="u-palette-4-base u-shape u-shape-rectangle u-shape-3"></div>
                                            <span class="u-icon u-icon-circle u-text-body-alt-color u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 480 480">
                                                    <use xlink:href="#svg-7f51"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 480 480" x="0px" y="0px" id="svg-7f51" style="enable-background:new 0 0 480 480;">
                                                    <g>
                                                        <g>
                                                            <path d="M392,0H88C65.92,0.026,48.026,17.92,48,40v216c0.026,22.08,17.92,39.974,40,40h109.392l-11.424,40H160v16h160v-16h-25.968    l-11.424-40H392c22.08-0.026,39.974-17.92,40-40V40C431.974,17.92,414.08,0.026,392,0z M202.608,336l11.424-40h51.936l11.424,40    H202.608z M416,256c0,13.255-10.745,24-24,24H88c-13.255,0-24-10.745-24-24v-16h352V256z M416,224H64V40c0-13.255,10.745-24,24-24    h304c13.255,0,24,10.745,24,24V224z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M304,368H80c-4.418,0-8,3.582-8,8v96c0,4.418,3.582,8,8,8h224c4.418,0,8-3.582,8-8v-96C312,371.582,308.418,368,304,368z     M296,464H88v-80h208V464z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="104" y="432" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="104" y="400" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="136" y="400" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="168" y="400" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="232" y="400" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="200" y="400" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="264" y="432" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="264" y="400" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="136" y="432" width="112" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368,368c-22.091,0-40,17.909-40,40v32c0,22.091,17.909,40,40,40c22.091,0,40-17.909,40-40v-32    C408,385.909,390.091,368,368,368z M392,440c0,13.255-10.745,24-24,24s-24-10.745-24-24v-32c0-13.255,10.745-24,24-24    s24,10.745,24,24V440z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="360" y="400" width="16" height="16"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <rect x="181.737" y="120.139" transform="matrix(0.2751 -0.9614 0.9614 0.2751 50.7457 323.5759)" width="116.43" height="15.993"></rect>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M197.12,94.144l-10.24-12.288l-48,40c-3.393,2.83-3.85,7.874-1.02,11.268c0.309,0.37,0.65,0.712,1.02,1.02l48,40    l10.24-12.288L156.496,128L197.12,94.144z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M342.14,122.876c-0.309-0.37-0.65-0.712-1.02-1.02l-48-40l-10.24,12.288L323.504,128l-40.624,33.856l10.24,12.288l48-40    C344.513,131.314,344.97,126.27,342.14,122.876z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                            <div class="u-align-center-xl u-align-center-xs u-align-left-lg u-align-left-sm u-container-style u-group u-white u-group-4">
                                                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs">
                                                    <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-text u-text-6" data-translate-key="Codes de réduction spécifiques">
                                                        Codes de réduction spécifiques</h4>
                                                    <p class="u-align-center-lg u-align-center-md u-align-center-sm u-text u-text-7" data-translate-key="Économisez encore plus sur votre voyage en réservant dans l'app avec nos codes de réduction exclusifs pour l'app.">
                                                        Économisez encore plus sur votre voyage en réservant dans
                                                        l'app
                                                        avec nos codes de réduction exclusifs
                                                        pour l'app.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                                        <div class="u-container-layout u-valign-top-sm">
                                            <div class="u-palette-3-light-1 u-shape u-shape-rectangle u-shape-4">
                                            </div>
                                            <span class="u-icon u-icon-circle u-text-body-alt-color u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                                                    <use xlink:href="#svg-8ad1"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-8ad1" style="enable-background:new 0 0 512 512;">
                                                    <g>
                                                        <g>
                                                            <path d="M485.547,251.733h-58.88v-153.6C426.638,74.581,407.552,55.495,384,55.467H128c-23.552,0.028-42.638,19.114-42.667,42.667    v51.2H38.519C17.255,149.357,0.023,166.589,0,187.853v230.161c0.023,21.264,17.255,38.496,38.519,38.519h136.294    c16.24-0.049,30.7-10.294,36.13-25.6H358.4c4.713,0,8.533-3.82,8.533-8.533v-17.067c0-14.138-11.462-25.6-25.6-25.6h-25.6V345.6    H384v84.48c0,14.61,11.844,26.453,26.453,26.453h75.093c14.61,0,26.453-11.844,26.453-26.453V278.187    C512,263.577,500.156,251.733,485.547,251.733z M196.267,418.014c-0.009,11.844-9.609,21.443-21.453,21.453H38.519    c-11.844-0.009-21.443-9.609-21.453-21.453v-4.147h179.2V418.014z M196.267,396.8h-179.2V209.067h179.2V396.8z M196.267,192    h-179.2v-4.147c0.009-11.844,9.609-21.443,21.453-21.453h136.294c11.844,0.009,21.443,9.609,21.453,21.453V192z M341.333,396.8    c4.713,0,8.533,3.821,8.533,8.533v8.533H213.333V396.8H341.333z M213.333,379.733V345.6h85.333v34.133H213.333z M384,328.533    h-76.8h-93.867v-25.6H384V328.533z M384,278.187v7.68H213.333v-98.014c-0.024-21.264-17.256-38.496-38.519-38.519H102.4v-51.2    c0-14.138,11.461-25.6,25.6-25.6h256c14.138,0,25.6,11.461,25.6,25.6v153.685C395.358,252.278,384.039,263.937,384,278.187z     M494.933,430.08c0,5.184-4.203,9.387-9.387,9.387h-75.093c-5.184,0-9.387-4.203-9.387-9.387v-7.68h93.867V430.08z     M494.933,405.333h-93.867v-102.4h93.867V405.333z M494.933,285.867h-93.867v-7.68c0-5.184,4.203-9.387,9.387-9.387h75.093    c5.184,0,9.387,4.203,9.387,9.387V285.867z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                            <div class="u-align-center-sm u-align-center-xl u-align-center-xs u-align-left-lg u-container-style u-group u-white u-group-5">
                                                <div class="u-container-layout u-valign-middle-md u-valign-middle-xs">
                                                    <h4 class="u-align-center-lg u-align-center-md u-text u-text-8" data-translate-key="Le consommateur d'abord">
                                                        Le consommateur d'abord</h4>
                                                    <p class="u-align-center-lg u-align-center-md u-text u-text-9" data-translate-key="En vous facilite votre voyage par la disponibilite des carte geographique des pays ainsi que des guides.">
                                                        En
                                                        vous facilite votre voyage par la disponibilite des carte
                                                        geographique des pays ainsi que des guides.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif; text-shadow: 0 5px 4px #002438; font-size: 50px;" data-translate-key="Meilleurs destination">Meilleures destinations</h1>
                                <small style="text-align: center; font-family: 'merienda one', sans-serif; font-size: 10px; margin-left: 40%;" data-translate-key="Cliquer sur l'un des pays pour plus d'informations">Cliquez
                                    sur l'un des pays pour plus d'informations</small>

                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </section>
    </div>
    <!--==============favourite places===================-->
    <div class="d-none d-md-block">
        <div class="controls" style="text-align: center;"><button onclick="rotate()" data-translate-key="Tourner">Tourner</button></div>

        <div class="ctn">
            <div class="carouse">
                <div class="carouse__face" onclick="openPage('japon.php')"></div>
                <div class="carouse__face" onclick="openPage('anglettere.php')"></div>
                <div class="carouse__face" onclick="openPage('france.php')"></div>
                <div class="carouse__face" onclick="openPage('algerie.php')"></div>
                <div class="carouse__face" onclick="openPage('egy.php')"></div>
                <div class="carouse__face" onclick="openPage('russie.php')"></div>
                <div class="carouse__face" onclick="openPage('suisse.php')"></div>
                <div class="carouse__face" onclick="openPage('turquie.php')"></div>
                <div class="carouse__face" onclick="openPage('usa.php')"></div>
            </div>
        </div>
        <div class="controls">
            <button onclick="prevSlide()" style="float: left; margin: 25px;" data-translate-key="Précedent">Précedent</button>
            <button onclick="nextSlide()" style="float: right; margin: 25px;" data-translate-key="Suivant">Suivant</button>

        </div>
    </div>
    <!--=====remplace carossel=========-->
    <div class="d-block d-sm-block d-md-none ">

        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-1" data-translate-key="France">France</label>
                <label for="slide-dot-2" data-translate-key="England">Angleterre</label>
                <label for="slide-dot-3" data-translate-key="Egypt">Égypte</label>
                <label for="slide-dot-4" data-translate-key="Japan">Japon</label>
                <label for="slide-dot-5" data-translate-key="Algeria">Algérie</label>
                <label for="slide-dot-6" data-translate-key="Russia">Russie</label>
                <label for="slide-dot-7" data-translate-key="Turkey">Turquie</label>
                <label for="slide-dot-8" data-translate-key="USA">USA</label>
                <label for="slide-dot-9" data-translate-key="Switzerland">Suisse</label>
            </div>


            <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
            <img class="slide-img" src="imagecarossel/france.png">

            <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
            <img class="slide-img" src="imagecarossel/angleterre.png">

            <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
            <img class="slide-img" src="imagecarossel/egypt.jpg">

            <input class="slide-input" id="slide-dot-4" type="radio" name="slides" checked>
            <img class="slide-img" src="imagecarossel/japon.png">

            <input class="slide-input" id="slide-dot-5" type="radio" name="slides">
            <img class="slide-img" src="imagecarossel/algerie.png">

            <input class="slide-input" id="slide-dot-6" type="radio" name="slides">
            <img class="slide-img" src="imagecarossel/russie.jpg">

            <input class="slide-input" id="slide-dot-7" type="radio" name="slides" checked>
            <img class="slide-img" src="imagecarossel/turquie.png">

            <input class="slide-input" id="slide-dot-8" type="radio" name="slides">
            <img class="slide-img" src="imagecarossel/usa.png">

            <input class="slide-input" id="slide-dot-9" type="radio" name="slides">
            <img class="slide-img" src="imagecarossel/suisse.png">

        </div>
    </div>
    <!--==============Places===================-->
    <section class="places">
        <div class="places-text">
            <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key="Meilleurs Offres">
                Meilleurs Offres</h2>
        </div>
        <div class="cards">
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="offres/canda.jpg">
                    </div>
                </div>
                <form action="search.php" method="post">
                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <p class="cost" data-translate-key="1870€ / Par personne">1870€ / Par personne</p>
                        <div class="card-box">
                            <p class="time" data-translate-key="🕓 3 jour">🕓 3 jours</p>
                            <p class="location" data-translate-key="✈ Vancouver, Canada">✈ Vancouver, Canada</p>
                        </div>
                        <input type="hidden" name="cost" value="1870">
                        <input type="hidden" name="location" value="Vancouver">
                        <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                        style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="offres/paris.jpg">
                    </div>
                </div>
                <form action="search.php" method="post">
                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <p class="cost" data-translate-key="187€ / par Person">187€ / par Person</p>
                        <div class="card-box">
                            <p class="time" data-translate-key="🕓 2 jours">🕓 2 jours</p>
                            <p class="location" data-translate-key="✈ Paris, France">✈ Paris, France</p>
                        </div>
                        <input type="hidden" name="cost" value="187">
                        <input type="hidden" name="location" value="Paris">
                        <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                        style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="offres/monaco.jpg">
                    </div>
                </div>
                <form action="search.php" method="post">
                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <p class="cost" data-translate-key="2000€ / Par personne">2000€ / Par personne</p>
                        <div class="card-box">
                            <p class="time" data-translate-key="🕓 5 jours">🕓 5 jours</p>
                            <p class="location" data-translate-key="✈ Monaco, Monaco">✈ Monaco, Monaco</p>
                        </div>
                        <input type="hidden" name="cost" value="2000">
                        <input type="hidden" name="location" value="Monaco">
                        <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                        style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="offres/bern.jpeg">
                    </div>
                </div>
                <form action="search.php" method="post">
                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <p class="cost" data-translate-key="2300€ / Par personne">2300€ / Par personne</p>
                        <div class="card-box">
                            <p class="time" data-translate-key="🕓 6 jours">🕓 6 jours</p>
                            <p class="location" data-translate-key="✈ Bern, Switzerland">✈ Bern, Switzerland</p>
                        </div>
                        <input type="hidden" name="cost" value="2300">
                        <input type="hidden" name="location" value="Bern">
                        <input type="submit" name="reserver" value="Réserver"data-translate-key="Réserver"
                         style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="offres/seoul.jpg">
                    </div>
                </div>
                <form action="search.php" method="post">
                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <p class="cost" data-translate-key="3000€ / Par personne">3000€ / Par personne</p>
                        <div class="card-box">
                            <p class="time" data-translate-key="🕓 8jours">🕓 8jours</p>
                            <p class="location" data-translate-key="✈ Seoul, South Korea">✈ Seoul, South Korea</p>
                        </div>
                        <input type="hidden" name="cost" value="3000€">
                        <input type="hidden" name="location" value="Seoul">
                        <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                        style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="offres/caire.jpg">
                    </div>
                </div>
                <form action="search.php" method="post">
                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <p class="cost" data-translate-key="1000€ / Par personne">1000€ / Par personne</p>
                        <div class="card-box">
                            <p class="time" data-translate-key="🕓 3 jours">🕓 3 jours</p>
                            <p class="location" data-translate-key="✈ Caire,Egypte">✈ Caire,Egypte</p>
                        </div>
                        <input type="hidden" name="cost" value="1000€">
                        <input type="hidden" name="location" value="Caire">
                        <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                        style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--==============Partenaire===================-->
    <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;margin-top: 20px;" data-translate-key="Partenaires aériens de TRIP GO">Partenaires aériens de TRIP GO</h1>
    <div class="containerpart">

        <img alt="Qatar Airlines" src="image/imagepartenaire/qatarailines.png" class="imgp">
        <img alt="Turkish Airlines" src="image/imagepartenaire/turkishairlines.png" class="imgp">
        <img alt="Air Algérie" src="image/imagepartenaire/airalgeri.png" class="imgp"> <!-- Note: Fixed the image path -->
        <img alt="Air France" src="image/imagepartenaire/airfrance.png" class="imgp">
        <img alt="Egypt Air" src="image/imagepartenaire/egyptairline.png" class="imgp">
    </div>
    <!--==============Avis===================-->
    <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif; text-shadow: 0 5px 4px #002438;" data-translate-key="Avis des utilisateurs">Avis des utilisateurs</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="image/cmt1.jpg" alt="" class="img-responsive">
                        </div>
                        <h3 class="testimonial-info">Mar Babr</h3>
                        <p class="description" data-translate-key="J'ai vraiment apprécié mon voyage avec cette application. C'était une expérience formidable et j'ai hâte de réserver mon prochain voyage!">J'ai vraiment apprécié mon voyage avec cette application. C'était une expérience formidable et j'ai hâte de réserver mon prochain voyage!</p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="image/cmt2.jpg" alt="" class="img-responsive">
                        </div>
                        <h3 class="testimonial-info">Sam Arch</h3>
                        <p class="description" data-translate-key="Je recommande vivement cette application à tous ceux qui aiment voyager. C'est pratique, facile à utiliser et offre d'excellents choix de destinations.">Je recommande vivement cette application à tous ceux qui aiment voyager. C'est pratique, facile à utiliser et offre d'excellents choix de destinations.</p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="image/cmt3.jpg" alt="" class="img-responsive">
                        </div>
                        <h3 class="testimonial-info">Tin Bhrt</h3>
                        <p class="description" data-translate-key="Cette application a rendu mes voyages beaucoup plus simples. Je peux facilement suivre mes vols et trouver des informations utiles sur les destinations.">Cette application a rendu mes voyages beaucoup plus simples. Je peux facilement suivre mes vols et trouver des informations utiles sur les destinations.</p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="image/cm4.jpg" alt="" class="img-responsive">
                        </div>
                        <h3 class="testimonial-info">Leti Mhb</h3>
                        <p class="description" data-translate-key="Les fonctionnalités de cette application sont incroyables! Je suis très satisfait de mon expérience jusqu'à présent.">Les fonctionnalités de cette application sont incroyables! Je suis très satisfait de mon expérience jusqu'à présent.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============footer===================-->
    <?php require('foot.php'); ?>
</body>
<script src="js/com.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="js/index.js"></script>
<script src="js/scriptchat.js"></script>
<script>
    //comnt
    $(document).ready(function() {
        $("#testimonial-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            navigation: false,
            navigationText: ["", ""],
            slideSpeed: 1000,
            singleItem: true,
            autoPlay: true
        });
    });

    //changement de langue

    function changeLanguage(language) {
        var googleTranslateUrl = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=" + language + "&dt=t&q=";

        var elements = document.querySelectorAll('[data-translate-key]');
        elements.forEach(function(element) {
            var originalText = element.getAttribute('data-translate-key');
            var xhr = new XMLHttpRequest();
            xhr.open("GET", googleTranslateUrl + encodeURI(originalText), true);
            xhr.onload = function() {
                if (xhr.status === 200 && xhr.responseText) {
                    var response = JSON.parse(xhr.responseText);
                    if (response && response[0] && response[0][0]) {
                        var translatedText = response[0][0][0];
                        if (translatedText) {
                            if (element.tagName === 'INPUT' && (element.type === 'submit' || element.type === 'text' || element.type === 'button')) {
                                if (element.hasAttribute('placeholder')) {
                                    element.placeholder = translatedText;
                                } else {
                                    element.value = translatedText;
                                }
                            } else {
                                element.innerText = translatedText;
                            }
                        }
                    }
                }
            };
            xhr.send();
        });
    }

    document.getElementById('languageSelect').addEventListener('change', function() {
        var selectedLanguage = this.value;
        changeLanguage(selectedLanguage);
    });


    document.getElementById('languageSelect').addEventListener('change', function() {
        var selectedLanguage = this.value;
        changeLanguage(selectedLanguage);
    });
</script>

</script>

</html>