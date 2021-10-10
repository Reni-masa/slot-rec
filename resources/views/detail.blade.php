
<x-layout>
    {{-- タイトル --}}
    <x-slot name="title">{{$slotData->number}}</x-slot>

    {{-- css --}}
    <x-slot name="style">
        <style>
            * {
                color:gray;
            }
            .main_content {
                width:98%;
                margin: 0 auto;
                padding: 10px;
            }
            table {
                text-align: center;
            }
            td {
                width: 120px;
            }
            .data {
                display: flex;
                justify-content: flex-end;
                margin-bottom: 5px;
            }

        </style>
    </x-slot>

    {{-- メインコンテンツ --}}
    <x-slot name="content">
        <div class="main_content">
            <div class="data">
                <table border="1" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <td>BB回数</td>
                            <td>BB確率</td>
                            <td>RB回数</td>
                            <td>RB確率</td>
                            <td>合算確率</td>
                            <td>総回転数</td>
                            <td>最大予測設定値</td>
                            <td>日時</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$slotData->BB}}</td>
                            <td>{{$slotData->BB_average}}</td>
                            <td>{{$slotData->RB}}</td>
                            <td>{{$slotData->RB_average}}</td>
                            <td>{{$slotData->bonus_average}}</td>
                            <td>{{$slotData->total_game}}</td>
                            <td>{{$slotData->class}}</td>
                            <td>{{$slotData->date_time}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <section>
                <div id="canvasdiv">
                    <canvas id="slotDataChart" width="200" height="100"></canvas>
                </div>
            </section>
        </div>
    </x-slot>

    <x-slot name="script">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            Chart.defaults.font.size = 18;
            Chart.defaults.animation.duration = 2500

            var ctx = document.getElementById('slotDataChart');

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        "設定1 ({{$slotData->guess_class1}}%)",
                        "設定2 ({{$slotData->guess_class2}}%)",
                        "設定3 ({{$slotData->guess_class3}}%)",
                        "設定4 ({{$slotData->guess_class4}}%)",
                        "設定5 ({{$slotData->guess_class5}}%)",
                        "設定6 ({{$slotData->guess_class6}}%)",
                    ],
                    datasets: [{
                        label: "",
                        data: [
                            {{$slotData->guess_class1}},
                            {{$slotData->guess_class2}},
                            {{$slotData->guess_class3}},
                            {{$slotData->guess_class4}},
                            {{$slotData->guess_class5}},
                            {{$slotData->guess_class6}},
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    plugins: {
                        title: {
                            display: true,
                            text: "{{$slotInfo->slot_name}}({{$slotData->number}}番台)",
                            color: 'grey',
                        },
                        legend: { display: false },
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: '',
                                color: 'grey',
                            },
                        },
                        x: {
                            title: {
                                display: true,
                                text: '予測確率(%)',
                                color: 'grey',
                            },
                        }
                    }
                }
            });
        </script>
    </x-slot>
</x-layout>

