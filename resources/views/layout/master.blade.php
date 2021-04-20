<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="http://127.0.0.1/cdn/bootstrap/css/bootstrap.min.css">
   <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
   <link rel="stylesheet" href="http://127.0.0.1/cdn/iconPicker/dist/css/fontawesome-iconpicker.min.css">
   <link rel="stylesheet" href="{{ url("inc/stylesheet/style.css ") }}">
    @yield('style')
</head>
<body>
@yield('content')












 <script src="http://127.0.0.1/cdn/jquery/jquery.min.js"></script>
 <script src="http://127.0.0.1/cdn/bootstrap/js/bootstrap.min.js"></script>
 <script src="http://127.0.0.1/cdn/select2/js/select2.min.js"></script>
 <script src="http://127.0.0.1/cdn/iconPicker/dist/js/fontawesome-iconpicker.min.js"></script>
 <script>
        $(function () {
        $('.action-destroy').on('click', function () {
            $.iconpicker.batch('.icp.iconpicker-element', 'destroy');
        });
        // Live binding of buttons
        $(document).on('click', '.action-placement', function (e) {
            $('.action-placement').removeClass('active');
            $(this).addClass('active');
            $('.icp-opts').data('iconpicker').updatePlacement($(this).text());
            e.preventDefault();
            return false;
        });
            $('.icp-auto').iconpicker();

            $('.icp-dd').iconpicker({
                //title: 'Dropdown with picker',
                //component:'.btn > i'
            });
            $('.icp-opts').iconpicker({
                title: 'With custom options',
                icons: [
                    {
                        title: "fab fa-github",
                        searchTerms: ['repository', 'code']
                    },
                    {
                        title: "fas fa-heart",
                        searchTerms: ['love']
                    },
                    {
                        title: "fab fa-html5",
                        searchTerms: ['web']
                    },
                    {
                        title: "fab fa-css3",
                        searchTerms: ['style']
                    }
                ],
                selectedCustomClass: 'label label-success',
                mustAccept: true,
                placement: 'bottomRight',
                showFooter: true,
                // note that this is ignored cause we have an accept button:
                hideOnSelect: true,
                // fontAwesome5: true,
                templates: {
                    footer: '<div class="popover-footer">' +
                    '<div style="text-align:left; font-size:12px;">Placements: \n\
    <a href="#" class=" action-placement">inline</a>\n\
    <a href="#" class=" action-placement">topLeftCorner</a>\n\
    <a href="#" class=" action-placement">topLeft</a>\n\
    <a href="#" class=" action-placement">top</a>\n\
    <a href="#" class=" action-placement">topRight</a>\n\
    <a href="#" class=" action-placement">topRightCorner</a>\n\
    <a href="#" class=" action-placement">rightTop</a>\n\
    <a href="#" class=" action-placement">right</a>\n\
    <a href="#" class=" action-placement">rightBottom</a>\n\
    <a href="#" class=" action-placement">bottomRightCorner</a>\n\
    <a href="#" class=" active action-placement">bottomRight</a>\n\
    <a href="#" class=" action-placement">bottom</a>\n\
    <a href="#" class=" action-placement">bottomLeft</a>\n\
    <a href="#" class=" action-placement">bottomLeftCorner</a>\n\
    <a href="#" class=" action-placement">leftBottom</a>\n\
    <a href="#" class=" action-placement">left</a>\n\
    <a href="#" class=" action-placement">leftTop</a>\n\
    </div><hr></div>'
                }
            }).data('iconpicker').show();


        // Events sample:
        // This event is only triggered when the actual input value is changed
        // by user interaction
        $('.icp').on('iconpickerSelected', function (e) {
            $('.lead .picker-target').get(0).className = 'picker-target fa-3x ' +
                e.iconpickerInstance.options.iconBaseClass + ' ' +
                e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
        });
    });

 </script>

 @yield('script')
</body>
</html>