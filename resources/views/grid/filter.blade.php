<div class="box-header">
<div class="">
    <form action="{!! $action !!}" method="get" pjax-container>
        <fieldset>

            @foreach($filters as $filter)
                {!! $filter->render() !!}
            @endforeach

            <div class="btn-group btn-group-sm pull-right">
                <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                <a href="{!! $action !!}" class="btn btn-warning" >{{ trans('admin.reset') }}</a>
            </div>

        </fieldset>
    </form>
</div>
</div>