<table id="main_data" {!! $attributes !!}>
    <thead>
    @if($multi_line_header)
        @foreach($headers as $header)
        <tr>
            @foreach($header as $item)
                @if(is_array($item))
                    <th {!! $item[1] !!} >{!! $item[0] !!}</th>
                @else
                    <th>{{ $item }}</th>
                @endif
            @endforeach
        </tr>
        @endforeach
    @else
        <tr>
            @foreach($headers as $header)
                @if(is_array($header))
                    <th {!! $header[1] !!} >{!! $header[0] !!}</th>
                @else
                    <th>{{ $header }}</th>
                @endif
            @endforeach
        </tr>
    @endif
    </thead>
    <tbody>
    @foreach($rows as $row)
        <tr>
            @foreach($row as $item)
                @if(is_array($item))
                    <td {!! $item[1] !!} >{!! $item[0] !!}</td>
                @else
                    <td>{!! $item !!}</td>
                @endif
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>