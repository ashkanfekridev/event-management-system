@extends('layouts.app')


@section('content')

    <div class="container mx-auto">
        <div class="flex">
            <div class="basis-1/4">
                <img src="{{$event->image}}" alt="" class="max-w-80">
                <h2 class="text-xl text-black">{{$event->title}}</h2>
            </div>
            <div class="basis-3/4 flex flex-wrap gap-3 align-baseline">
                <p class="basis-full">انتخاب سانس</p>
                @foreach($event->showTimes as $showTime)
                    <div class="p-4 rounded border">
                        <p>{{$showTime->start_at->toDayDateTimeString()}}</p>
                        <a href="{{route('events.show', [$event->id, 'showTime'=>$showTime->id])}}" class="bg-blue-600 text-white rounded-md px-4 py-2 block text-center">ادامه خرید</a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
