
<x-layout>
    {{-- タイトル --}}
    <x-slot name="title">機種一覧</x-slot>

    {{-- css --}}
    <x-slot name="style">
        <style>
            /*========= レイアウトのためのCSS ===============*/
            a {
                text-decoration: none;
                color: #fff;
                font-weight: bold;
            }
            a:hover {
                color: #5fb2f9;
            }
            ul {
                list-style: none;
                background: rgba(16,0,61,0.6);
                padding: 50px;
            }
            li {
                margin-bottom: 10px;
            }
            #wrapper{
                display: flex;
                justify-content: center;
                align-items: center;
                text-align:center;
                color: #fff;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                margin: auto;
                font-size: 20px;
            }

            /*========= particle js を描画するエリア設定 ===============*/

            html,body{
                height: 100%;/*高さを100%にして描画エリアをとる*/
            }

            #particles-js{
                position:fixed;/*描画固定*/
                z-index:-1;/*描画を一番下に*/
                width: 100%;
                height: 100%;
                background-color:#35004D;/*背景色*/
            }
        </style>
    </x-slot>

    {{-- メインコンテンツ --}}
    <x-slot name="content">
        <div id="particles-js"></div>
        <div id="wrapper">
            <ul>
                @foreach ($slotInfos as $slotInfo)
                    <li class="slot_list"><a href="{{ route('slot.show',$slotInfo->id) }}">{{$slotInfo->slot_name}}</a></li>
                @endforeach
            </ul>
        </div>
    </x-slot>

    {{-- js --}}
    <x-slot name="script">
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <!--自作のJS-->
        <script>
            particlesJS("particles-js",{
                "particles":{
                    "number":{
                        "value":38,//この数値を変更すると幾何学模様の数が増減できる
                        "density":{
                            "enable":true,
                            "value_area":800
                        }
                    },
                    "color":{
                        "value":"#ffffff"//色
                    },
                    "shape":{
                        "type":"polygon",//形状はpolygonを指定
                        "stroke":{
                            "width":0,
                        },
                        "polygon":{
                            "nb_sides":3//多角形の角の数
                        },
                        "image":{
                            "width":190,
                            "height":100
                        }
                    },
                    "opacity":{
                    "value":0.664994832269074,
                    "random":false,
                    "anim":{
                        "enable":true,
                        "speed":2.2722661797524872,
                        "opacity_min":0.08115236356258881,
                        "sync":false
                    }
                    },
                    "size":{
                        "value":3,
                        "random":true,
                        "anim":{
                            "enable":false,
                            "speed":40,
                            "size_min":0.1,
                            "sync":false
                        }
                    },
                    "line_linked":{
                        "enable":true,
                        "distance":150,
                        "color":"#ffffff",
                        "opacity":0.6,
                        "width":1
                    },
                    "move":{
                        "enable":true,
                        "speed":6,//この数値を小さくするとゆっくりな動きになる
                        "direction":"none",//方向指定なし
                        "random":false,//動きはランダムにしない
                        "straight":false,//動きをとどめない
                        "out_mode":"out",//画面の外に出るように描写
                        "bounce":false,//跳ね返りなし
                        "attract":{
                            "enable":false,
                            "rotateX":600,
                            "rotateY":961.4383117143238
                        }
                    }
                },
                "interactivity":{
                    "detect_on":"canvas",
                    "events":{
                        "onhover":{
                            "enable":false,
                            "mode":"repulse"
                        },
                "onclick":{
                    "enable":false
                },
                "resize":true
                    }
                },
                "retina_detect":true
            });
        </script>
    </x-slot>

</x-layout>

