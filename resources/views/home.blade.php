@extends('layouts.app')


@section('content')

    <div class="container mx-auto mt-10">
        <div class="flex">


            @foreach($events as $event)

                <div class="basis-1/4">
                    <img src="{{$event->image}}" alt="{{$event->title}}">
                    <h2 class="text-xl font-black">{{$event->title}}</h2>
                    <p class="text-base">{{$event->location}}</p>
                    <a href="{{route('events.show', $event)}}"
                       class="text-base font-medium inline-block py-2 px-4 bg-blue-400 text-white rounded-md">مشاهده
                        رویداد</a>
                </div>

            @endforeach
        </div>
    </div>

@endsection

