<div class="">
    <label class="col-sm-1 control-label" style="padding-left: 5px;padding-right: 5px;@if($presenter->getLabelWidth())width: {{$presenter->getLabelWidth()}}px;@endif"> {{$label}}</label>
    <div class="col-sm-{{$presenter->getWidth()}}" style="padding-left: 5px;padding-right: 5px;@if($presenter->getPixelWidth())width: {{$presenter->getPixelWidth()}}px;@endif">
        @include($presenter->view())
    </div>
</div>