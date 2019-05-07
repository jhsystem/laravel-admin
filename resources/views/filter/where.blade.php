<div class="">
    <label class="col-sm-{{$presenter->getLabelWidth()}} control-label" style="padding-left: 5px;padding-right: 5px;@if($presenter->getLabelPixelWidth())width: {{$presenter->getLabelPixelWidth()}}px;@endif"> {{$label}}</label>
    <div class="col-sm-{{$presenter->getWidth()}}" style="padding-left: 5px;padding-right: 5px;@if($presenter->getPixelWidth())width: {{$presenter->getPixelWidth()}}px;@endif">
        @include($presenter->view())
    </div>
</div>