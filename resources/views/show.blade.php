
<x-layout>
    {{-- タイトル --}}
    <x-slot name="title">{{$slotInfo->slot_name}}</x-slot>

    {{-- css --}}
    <x-slot name="style">
        <style>
            .table-wrap {
                overflow-x: scroll;
            }
            table {
                font-size:10px;
                white-space: nowrap;
                border-collapse: collapse;
            }
            .predict_class {
                text-align: center;;
            }
            .predict_class6 .slot_detail_link{
                background-color: rgba(255, 51, 51, .8);
                color:white;
                font-weight: bold;
            }
            .slot_detail_link {
                display: block;
                text-decoration: none;
                transition:0.８s;
                color:gray;
                font-weight: bold;
            }
            .slot_detail_link:hover {
                color: #5fb2f9;
                font-weight: bold;
                text-decoration: underline;
            }
            #top_pade_btn {
                font-size: 26px;
                display: block;
                background: #5fb2f9;
                color: white;
                padding: 18px;
                border-radius: 100px;
                position: fixed;
                right: 30px;
                bottom: 30px;
                width: 30px;
                height: 30px;
                text-align: center;
                line-height: 30px;
            }

        </style>
    </x-slot>

    {{-- メインコンテンツ --}}
    <x-slot name="content">
        <div class="table-wrap">

            <table border="1">
                <tr>
                    <td>&emsp;&emsp;&emsp;</td>
                    @foreach ($dates as $date)
                        <td colspan="2">{{$date->date_time}}</td>
                    @endforeach
                </tr>


                @foreach ($numbers as $number)
                    <tr>
                        <td rowspan="4">{{$number->number}}</td>
                        @foreach ($dates as $date)
                            <?php $slotData = $slotDatas->where('number',$number->number)->where('date_time',$date->date_time)->first(); ?>
                            <td>BB: {{$slotData['BB']}}</td>
                            <td>RB: {{$slotData['RB']}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($dates as $date)
                            <?php $slotData = $slotDatas->where('number',$number->number)->where('date_time',$date->date_time)->first(); ?>
                            <td>総回転数: {{$slotData['total_game']}}</td>
                            <td>合算 {{$slotData['bonus_average']}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($dates as $date)
                            <td colspan="2" class="predict_class">設定</td>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($dates as $date)
                            <?php $slotData = $slotDatas->where('number',$number->number)->where('date_time',$date->date_time)->first(); ?>
                            <td colspan="2" class="predict_class predict_class{{$slotData['class']}}">
                                <a class="slot_detail_link" href="@if($slotData["id"]){{ route("slot.detail",$slotData["id"]) }}@endif">
                                    {{$slotData['class']}}
                                </a>
                            </td>
                        @endforeach
                    </tr>

                @endforeach

            </table>
        </div>

        <div>
            <a href="{{route("index")}}" id="top_pade_btn"><i class="fas fa-home"></i></a>
        </div>
    </x-slot>

</x-layout>

