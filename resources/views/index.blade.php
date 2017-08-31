@extends('public/layout')

@section('title')首页@endsection

@section('content')
    <!-- Page Contents -->
    <div class="pusher">
        <div class="ui inverted vertical masthead center aligned segment">
            <div class="ui container">
                @include('public.menu')
            </div>

            <div class="ui text container">
                <h1 class="ui inverted header animated bounce">
                    Imagine-a-Company
                </h1>
                <h2>Do whatever you want when you want to.</h2>
            </div>

        </div>

        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <div class="row">
                    <div class="eight wide column">
                        <h3 class="ui header">我的技能展示</h3>
                        <canvas id="mySkills" width="400" height="400"></canvas>
                    </div>
                    <div class="six wide right floated column">
                        <h3 class="ui header">我的健身计划</h3>
                        {{--<img src="" class="ui large bordered rounded image">--}}
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="center aligned column">--}}
                        {{--<a class="ui huge button">Check Them Out</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>


        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <h3>"What a Company"</h3>
                        <p>That is what they all say about us</p>
                    </div>
                    <div class="column">
                        <h3>"I shouldn't have gone with their competitor."</h3>
                        <p>
                            <img src="" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container">
                <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
                <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
                <a class="ui large button">Read More</a>
                <h4 class="ui horizontal header divider">
                    <a href="#">Case Studies</a>
                </h4>
                <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
                <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
                <a class="ui large button">I'm Still Quite Interested</a>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        var ctx = $("#myChart");
        var mySkills = $("#mySkills");
        $.ajax({
            "url":"front/getSkills",
            "method":"get",
            "data":{"type":1},
            "dataType":"json",
            "success":function (data) {
//                var dataObj=eval("("+data+")");
            }

        });
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
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
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var mySkills = new Chart(mySkills, {
            type: 'polarArea',
            data: {
                labels: ["Laravel", "Yaf", "thinkphp", "yii2.0"],
                datasets: [{
                    label: '技能展示',
                    data: [20, 15, 15, 15],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {}
        });
    </script>
@endsection