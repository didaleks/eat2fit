@php
    $position = 2;
    $objs = collect([]);
@endphp
<ul class="list-inline list-inline-dashed list-white text-big p offset-md-top-13 breadcrumbs">
    <li><a href="/">Главная</a></li>

    @if(($parent = $model->parent))
        @php($objs->push($parent))
    @endif

    @while ($parent && ($parent = $parent->parent))
        @php($objs->push($parent))
    @endwhile

    @php($objs = $objs->reverse())

    @foreach($objs as $obj)
        <li><a href="{{ $obj->url }}">{{ $obj->name }}</a></li>
    @endforeach

    <li>{{$model->name}}</li>
</ul>
