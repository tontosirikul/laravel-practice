{{-- @if(5>10)
    <p>5 is lower than 10</p>
@elseif(5 == 10)
    <p>5 is indeed lower than 10</p>
@else
    <h2>all conditions are wrong</h2>
@endif

@unless (empty($name))
    <h2>Name isn't empty</h2>
@endunless

@if(!empty($name))
    <h2>Name isn't empty</h2>
@endif

@empty($second_name)
    <h2>Name is empty</h2>
@endempty

@isset($name)
    <h2>Name has been set</h2>
@endisset

@switch($name)
    @case('Ton')
        <h2>Name is Ton</h2>
        @break
    @case('John')
        <h2>Name is john</h2>
        @break
    @default
@endswitch 

@for ($i = 0; $i < 10; $i++)
    <h2>The number is {{$i}}</h2>
@endfor

@foreach ($name as $n)
    <h3>{{$n}}</h3>
@endforeach

@forelse ($name as $n)
    <h2>{{$n}}</h2>
@empty
    <h2>No name</h2>
@endforelse

{{ $i = 0}}
@while ($i < 10)
    <p>{{$i}}</p>
    {{$i++}}
@endwhile

--}}