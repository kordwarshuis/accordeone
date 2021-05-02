<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png"><link rel="icon" type="image/png" href="./assets/img//favicon.png"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title> <?php include "config/presentation-title.htm" ?> </title><meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,shrink-to-fit=no" name="viewport"><link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"><link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"><link href="./assets/css/bootstrap.min.css" rel="stylesheet"><link href="./assets/css/paper-kit.css?v=2.2.0" rel="stylesheet"><link href="config/css/custom.css?v=1619950505" rel="stylesheet"><style>body,
    .btn {
      /* font-size: 220% !important; */
      font-size: 20px;
    }</style><link href="css/app.7ebe724b.css" rel="preload" as="style"><link href="js/app.70b2cbee.js" rel="preload" as="script"><link href="js/chunk-vendors.b0587161.js" rel="preload" as="script"><link href="css/app.7ebe724b.css" rel="stylesheet"></head><body class="index-page sidebar-collapse"><div class="page-header section-dark" style="background: rgb(59, 36, 65);"><div class="filter"></div><div class="content-center"><div class="container"><div class="title-brand"><h1 class="presentation-title"><?php include "config/presentation-title.htm" ?></h1></div> <?php include "config/media.htm" ?> <h2 class="presentation-subtitle text-center"><?php include "config/presentation-title-sub.htm" ?></h2></div></div></div><div class="main"><div class="section section-buttons"><div class="container"><div class="title"><h2><?php include "config/presentation-title2.htm" ?></h2></div><noscript><strong>We're sorry but faq doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id="app"></div><script src="./assets/js/core/jquery.min.js"></script><script src="./assets/js/core/popper.min.js"></script><script src="./assets/js/core/bootstrap.min.js"></script><script src="./assets/js/plugins/bootstrap-switch.js"></script><script src="./assets/js/plugins/nouislider.min.js"></script><script src="./assets/js/plugins/moment.min.js"></script><script src="./assets/js/plugins/bootstrap-datepicker.js"></script><script src="./assets/js/paper-kit.js?v=2.2.0"></script><script>$(document).ready(function () {

            if ($("#datetimepicker").length != 0) {
              $('#datetimepicker').datetimepicker({
                icons: {
                  time: "fa fa-clock-o",
                  date: "fa fa-calendar",
                  up: "fa fa-chevron-up",
                  down: "fa fa-chevron-down",
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                }
              });
            }

            function scrollToDownload() {

              if ($('.section-download').length != 0) {
                $("html, body").animate({
                  scrollTop: $('.section-download').offset().top
                }, 1000);
              }
            }
          });</script><script src="js/chunk-vendors.b0587161.js"></script><script src="js/app.70b2cbee.js"></script></div></div></div></body></html>