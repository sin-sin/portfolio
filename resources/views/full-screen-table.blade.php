<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Fresh Bootstrap Table by Creative Tim</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>

    <link href="/assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="/assets/css/fresh-bootstrap-table.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">
    <div class="fresh-table full-color-orange full-screen-table">
        <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
        -->

        <div class="toolbar">
            <button id="alertBtn" class="btn btn-default">Alert</button>
        </div>

        <table id="fresh-table" class="table">
            <thead>
            <th data-field="id">ID</th>
            <th data-field="ime" data-sortable="true">Ime</th>
            <th data-field="sifra" data-sortable="true">Sifra</th>
            <th data-field="username" data-sortable="true">Username</th>
            <th data-field="email">Email</th>
            <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents"></th>
            </thead>
            <tbody>
            @foreach($sifre as $sifra)
                <tr>
                    <td>{{$sifra->id}}</td>
                    <td>{{$sifra->ime}}</td>
                    <td>{{$sifra->sifra}}</td>
                    <td>{{$sifra->username}}</td>
                    <td>{{$sifra->email}}</td>
                    <td>{{$sifra->podesavanja}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

</div>


</body>
<script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-table.js"></script>

<script type="text/javascript">
    var $table      = $('#fresh-table'),
        $alertBtn   = $('#alertBtn'),
        full_screen = false,
        window_height;

    $().ready(function () {

        window_height    = $(window).height();
        var table_height = window_height - 20;


        $table.bootstrapTable({
            toolbar: ".toolbar",

            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            sortable: true,
            height: table_height,
            pageSize: 10,
            pageList: [25, 50, 100],

            formatShowingRows: function (pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function (pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });

        window.operateEvents = {
            'click .like': function (e, value, row, index) {
                alert('You click like icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .edit': function (e, value, row, index) {
                alert('You click edit icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .remove': function (e, value, row, index) {
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                });

            }
        };

        $alertBtn.click(function () {
            alert("You pressed on Alert");
        });


        $(window).resize(function () {
            $table.bootstrapTable('resetView');
        });
    });


    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
            '<i class="fa fa-heart"></i>',
            '</a>',
            '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
            '<i class="fa fa-edit"></i>',
            '</a>',
            '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
            '<i class="fa fa-remove"></i>',
            '</a>'
        ].join('');
    }

</script>

</html>