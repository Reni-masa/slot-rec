
<x-layout>
    {{-- タイトル --}}
    <x-slot name="title">機種一覧</x-slot>

    {{-- css --}}
    <x-slot name="style">
        <style>
            a {
                text-decoration: none;
            }
        </style>
    </x-slot>

    {{-- メインコンテンツ --}}
    <x-slot name="content">
        <div>
            <ul>
                @foreach ($slotInfos as $slotInfo)
                    <li class="slot_list"><a href="{{ route('slot.show',$slotInfo->id) }}">{{$slotInfo->slot_name}}</a></li>
                @endforeach
            </ul>
        </div>
    </x-slot>

</x-layout>

