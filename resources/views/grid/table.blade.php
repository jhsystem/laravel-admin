<div class="box">
    @if(isset($title))
    <div class="box-header with-border">
        <h3 class="box-title"> {{ $title }}</h3>
    </div>
    @endif

    @if ( $grid->showTools() || $grid->showExportBtn() || $grid->showCreateBtn() )
    <div class="box-header with-border">
        <div class="pull-right">
            {!! $grid->renderColumnSelector() !!}
            {!! $grid->renderExportButton() !!}
            {!! $grid->renderCreateButton() !!}
        </div>
        @if ( $grid->showTools() )
        <span>
            {!! $grid->renderHeaderTools() !!}
        </span>
        @endif
    </div>
    @endif

    {!! $grid->renderFilter() !!}

    {!! $grid->renderHeader() !!}

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table id="main_data" class="table table-hover table-bordered" @if($grid->getWidth()) style="width: {{ $grid->getWidth() }}px;" @endif>
            <thead>
                <tr>
                    @foreach($grid->visibleColumns() as $column)
                    <th>{{$column->getLabel()}}{!! $column->sorter() !!}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach($grid->rows() as $row)
                <tr {!! $row->getRowAttributes() !!} >

                    @foreach($grid->visibleColumnNames() as $name)
                    <td {!! $row->getColumnAttributes($name) !!} @if($name == '__actions__'){{ "class='act'" }}@endif>
                        @if($name == '__actions__')
                            <div class="act">{!! $row->column($name) !!}</div>
                        @else
                        {!! $row->column($name) !!}
                        @endif
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    {!! $grid->renderFooter() !!}

    <div class="box-footer clearfix">
        {!! $grid->paginator() !!}
    </div>
        <script>
            $('div.act').click(function (e) {
                e.stopPropagation();
            });
            $('tr').click(function () {
                var href = $(this).find('a:first-child');
                if(href)
                    href[0].click();
            });

        </script>
    <!-- /.box-body -->
</div>
