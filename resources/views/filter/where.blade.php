<div class="form-group">
    @if($presenter->isLabel())
        <label>{{$label}}</label>
    @endif
    @include($presenter->view())
</div>