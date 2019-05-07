<div class="box-header with-border {{ $expand?'':'hide' }}" id="{{ $filterID }}">
    <form action="{!! $action !!}" class="form-horizontal" pjax-container method="get">


        @foreach($layout->columns() as $column)
            <div class="col-xs-{{ $column->width() }}">
                @if($layout->isFirstIsSearch())
                    <div class="form-group">
                        {!! $column->filters()[0]->render() !!}
                        <div class="form-group col-xs-3">
                            <div class="btn-group pull-left" style="margin-left: 10px;">
                                <button class="btn btn-info submit btn-sm"><i
                                            class="fa fa-search"></i>&nbsp;&nbsp;{{ trans('admin.search') }}</button>
                            </div>
                            <div class="btn-group pull-left" style="margin-left: 10px;">
                                <a href="{!! $action !!}" class="btn btn-default btn-sm"><i
                                            class="fa fa-undo"></i>&nbsp;&nbsp;{{ trans('admin.reset') }}</a>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-group">
                        <div class="form-row">
                            @for($i=($layout->isFirstIsSearch() ? 1: 0); $i < count($column->filters()); $i++)
                                {!! $column->filters()[$i]->render() !!}
                            @endfor
                        </div>
                </div>
                @endforeach
            </div>
            <!-- /.box-body -->
            @if($layout->isFirstIsSearch() == false)
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-{{ $layout->columns()->first()->width() }}">
                            <div class="col-md-8">
                                <div class="btn-group pull-left">
                                    <button class="btn btn-info submit btn-sm"><i
                                                class="fa fa-search"></i>&nbsp;&nbsp;{{ trans('admin.search') }}
                                    </button>
                                </div>
                                <div class="btn-group pull-left " style="margin-left: 10px;">
                                    <a href="{!! $action !!}" class="btn btn-default btn-sm"><i
                                                class="fa fa-undo"></i>&nbsp;&nbsp;{{ trans('admin.reset') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
    </form>
</div>