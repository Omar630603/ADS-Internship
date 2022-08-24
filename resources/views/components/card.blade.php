@props(['content', 'subContent', 'buttonTxt', 'buttonLink'])

<div
    class="card lg:card-side bg-base-100 shadow shadow-primary transition duration-500 ease-out hover:shadow-[1px_1px_20px] hover:shadow-primary hover:transition hover:duration-500 hover:ease-in">
    <figure><img class="p-3" src="{{ asset('../logo.png') }}" alt="Album"></figure>
    <div class="card-body">
        <h2 class="card-title">{!!$content!!}</h2>
        <p>{!!$subContent!!}</p>
    </div>
    @if ($buttonLink != null && $buttonTxt != null)
    <div class="card-actions justify-end">
        <a href="{{ route($buttonLink) }}" class="btn btn-primary">{{$buttonTxt}}</a>
    </div>
    @endif
</div>